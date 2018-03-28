<?php



ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);





//FRONT CONTROLLER



//1.Общие настройки

//ОТображение ошибок на время разаработки сайта

ini_set('display_errors', 1);

error_reporting(E_ALL);







//2.Подключение файлов системы (каркаса MVC)

define('ROOT', dirname(__FILE__));

include(ROOT.'/components/Router.php');

include(ROOT.'/components/Db.php');





//3.Установка соединения с БД

include ROOT.'/views/db/rb/rb.php';



R::setup('mysql:host=localhost;dbname=u0469335_default', 'u0469335_default', 'rR9JMB_M');

if(!R::testConnection()){
  echo 'Нет соединиенияsssssssssssssss';
  die();
}else{
  //echo 'Соединение установлено';
  //echo '<br>';

	session_start();
}


//4.Вызов Router

$router = new Router();

$router->run();









?>