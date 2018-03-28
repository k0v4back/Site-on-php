<?php

include_once ROOT.'/models/News.php';

class NewsController {
    
    public function actionIndex(){ //Этот action дял Списка новостей
        
        $newsList = array();
        $newsList = News::getNewsList(); //Используем методы модели News (Обращаемся к ним статически)
        
        require_once(ROOT . '/views/news/index.php');
        
        return true;
        
    }
    
    
    public function actionView($id){ //Для просмотра одной новости
        
        echo 'Просмотр одной новости';
        
        return true;
    }
    
}

