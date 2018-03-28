<?php


class Router{
    
    private $routes;
    
    public function __construct(){
        
        $routesPath = ROOT.'/config/routes.php';//Путь к роутам. ROOT - путь к корню
        $this->routes = include($routesPath);// ТУт мы присваиваем свойству роутс массив из файла routs.php
        
        
    }
    
    
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    
    public function run(){ //Будет принимать отправления от FrontController. Отвечает за анализ запроса и предачу управления
       
        //Задача 3.
        
        //Получить строку запроса 
       $uri = $this->getURI();
       
        
        //Проверитть наличия такого запроса в routes.php
       foreach ($this->routes as $uriPattern => $path){//Для каждого маршрута в массиве, мы помещаем $uriPattern в строку запроса из роутов, а в path путь
       
           //Будм сравнивать $uriPattrn и $uri при помощи preg_math()
           if(preg_match("~$uriPattern~", $uri)){ //Для этого передаём строку запроса $uri и данные из роутов $uriPattern (данные - это к примеру news в url)
              
             
              //Получаем внутренний путь из внешнего согласно правилу.
              $internalRoute = preg_replace("~$uriPattern~", $path, $uri);//В нашем запросе ($uri) ищи параметры по опреленному шаблону ($uriPattern из файла routes.php) и подставляем в строку $path
              
              //Определить контроллер, action, параметры
               
               $segments = explode('/', $internalRoute);//Фугкция explode() разделит строку на две части и получится массив. В итоге будет два элемента 1-относитьс к контроллера, а второй к экшену
               
               //ПОлучим имя контроллера
               $controllerName = array_shift($segments).'Controller'; //Эта функция получает первый элемент из массива и удаляет его. И прибавляем имя Controller так как приняли систему именовани
               $controllerName = ucfirst($controllerName);//КОнтроллер мы получили. Эта функция делает первый символ с большой буквы. 
               
               $actionName = 'action'.ucfirst(array_shift($segments));
              
               
               $parameters = $segments;
                

               //Подключить файл класса-контроллера. Так как мы знаем его имя и где расположен пишем вот этот код
               $controllerFile = ROOT . '/controllers/' .$controllerName. '.php'; //Опеределяем файл который нужно подключить
               if (file_exists($controllerFile)) {//Проверяем существование файла на диске
                   include_once($controllerFile); //А затем подключаем его
               }
               
               
               //Создать объект, вызвать метод (т.е. action)
               $controllerObject = new $controllerName;
               $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
               if ($result != null) {
                   break;
               }
               
               
               
           }
           
       }
        
        
    }
    
    
    }