<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" contant="гризли, grizzly, offical, онлайн, тюмень, тюменские, заведения, размещение, реклама, портал, видеосвязь, услуги">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Кабинет</title>
    <link rel="shortcut icon" href="Logo3.png" type="image/png">
    <!-- Bootstrap -->
    <link href="../template/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
      <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> -->
      <!-- <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    <!-- <![endif] -->
    <link rel="stylesheet" href="../template/css/font-awesome.min.css">
    <link rel="stylesheet" href="../template/slick/slick.css">
    <link rel="stylesheet" href="../template/slick/slick-theme.css">
    <!-- <link rel="stylesheet" href="../template/css/about_institution.css"> -->
    <link rel="stylesheet" href="../template/css/style.css"><!-- Resource style -->

  <script src="../template/js/modernizr.js"></script>
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../template/css/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="../template/css/bootstrap.min.css" rel="stylesheet"> -->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <!— Chrome, Firefox, Opera —> 
    <meta name="theme-color" content="#212529"> 
    <!— Windows Phone —> 
    <meta name="msapplication-navbutton-color" content="#212529"> 
    <!— iOS Safari —> 
    <meta name="apple-mobile-web-app-status-bar-style" content="#212529"> -->
  </head>
  <body>
	
    <!-- Start block Menu 
    ===========================-->
    <?php
      $logo = $_SERVER['SERVER_NAME'];
      if(isset($_COOKIE['logged_user'])){
      $user = $_COOKIE['logged_user'];
    }
      //echo $logo;
    ?>

    <!-- //////////////////////////////////////////////////////////// -->

    <!-- Start block Menu for display srarted with md-screen (<768px) 
    =====================================================-->

  	<div id="account-main">
  		<div class="container-fluid">
  			<div class="row">
  				<div class="account-menu col-lg-12 col-md-12">
  					<ul class="menu text-center">
  						<li class="col-lg-2"><a href="/cabinet" class="active">Кабинет</a></li>
  						<li class="col-lg-2"><a href="/">Главная</a></li>
  						<li class="col-lg-2"><a href="<?php $logo;?>/#partners">Партнёры</a></li>
  						<!-- <li class="col-lg-1"><a href="<?php $logo; echo "#"?>feedback">Отзывы</a></li> -->
              <li class="col-lg-1"><a href="<?php $logo;?>/#feedback">Отзывы</a></li>









              
              <?php
              if(isset($user)){
                $findeOne = R::findOne("users", "who = ? and login = '$user'", array("partner"));
                if(isset($user) and $findeOne == null){
                    //echo 'YES';
                    //Если пользователь не партнёр
                  }else{
                  //Если пользователь партнёр
                  ?>
                    <!-- <li class="col-lg-1"><a href="/balance">Баланс</a></li> -->
                  <?php
                  }
                }
                  
                  //echo $findeOne->login;

                ?>
              
              


              <!-- <li class="col-lg-1"><a href="/balance">Баланс</a></li> -->
              <!-- <li class="col-lg-1"><a href="/login">Авторизация</a></li> -->



              <?php
                      if(!isset($_COOKIE['logged_user'])){
                        ?>
                        <li class="col-lg-1"><a href="/login">Авторизация</a></li>
                        <?php
                      }else{
                        ?>
                        <li class="col-lg-1"><a href="/about">О вас</a></li>
                        <?php
                      }
                      ?>
  						<li class="col-lg-1">
                
                  <form name="search" action="/search" method="POST">
                    <div class="search-wrapper">
                    <div class="input-holder">
                    <input type="text" name="zapros" class="search-input" placeholder="Type to search" />
                    <button class="search-icon" name="send" onclick="searchToggle(this, event);"><span></span></button>
                  </div>
                  <span class="close" onclick="searchToggle(this, event);"></span>
                </div>
                  </form>
                        
              </li>
  						<li class="slider"></li>
  					</ul>
  				</div>

          
           <!-- Finish block Menu for display srarted with md-screen (<768px) 
          =====================================================-->

          <!-- ///////////////////////////////////////////////////////////// -->
          
          <!-- Start block Menu for display ended with sm-screen (=>767px) 
          =====================================================-->

          <nav class="navbar navbar-inverse">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">grizzly-offical.ru</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active">
                    <a href="/cabinet">Кабинет<span class="sr-only"></span></a>
                  </li>
                  <li><a href="/">Главная</a></li>
                  <li><a href="<?php $logo;?>/#partners">Партнёры</a></li>
                  <li><a href="<?php $logo;?>/#feedback"">Отзывы</a></li>
                  <li><a href="/login">Авторизация | Регистрация</a></li>
                  <li>
                    <div class="navbar-nav-search">
                      <input type="text" class="search-input" placeholder="Поиск"/>
                      <input type="button" class="search-button btn btn-default" value="Поиск" onclick="searchToggle(this, event);">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    
          <!-- Finish block Menu for display ended with sm-screen (=>767px) 
          =====================================================-->

          <!-- /////////////////////////////////////////////////////////////// -->

  			</div>
  		</div>
  	</div>
