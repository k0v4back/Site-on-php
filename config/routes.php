<?php
return array (
    
    //'' => 'site/index',//Контроллер Site, и actionIndex
    

    //Из news/sport/114 вырезать sport/114 и подставить на места ссылок $1, $2
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2', //Для того чтобы работали ссылкенужно их в роутере описать
    'institution/([0-9]+)' => 'institution/index/$1',
    //'news' => 'news/index', //news - это то что вводится пользователем url
    //'products' => 'product/list', //actionList в ProductController


    'login' => 'login/index',
	'register' => 'register/index',
	'exit' => 'exit/index',
    'cabinet' => 'cabinet/index',
    'cabinet/([0-9]+)' => 'cabinet/index/$1',
    'reset' => 'reset/index',
    'about' => 'about/index',
    'balance' => 'balance/index',
    'category/([0-9]+)' => 'category/index/$1',
    'vost' => 'vost/index',
    'newpassword' => 'newpassword/index',
    'search' => 'search/index',
    'goodpay' => 'goodpay/index',
    'add' => 'add/index',
    'cookie' => 'cookie/index',
    // 'category/([0-9]+)/([0-9]+)' => 'category/index/$1/$2',
    


    '' => 'site/index',
);