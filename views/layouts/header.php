<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" contant="гризли, grizzly, offical, онлайн, тюмень, тюменские, заведения, размещение, реклама, портал, видеосвязь, услуги">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Онлайн Тюмень</title>
    <link rel="shortcut icon" href="Logo3.png" type="image/png">
    <!-- Bootstrap -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
      <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> -->
      <!-- <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    <!-- <![endif] -->
    <link rel="stylesheet" href="template/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/slick/slick.css">
    <link rel="stylesheet" href="template/slick/slick-theme.css">
    <link rel="stylesheet" href="template/css/style.css"><!-- Resource style -->
	<script src="template/js/modernizr.js"></script> <!-- Modernizr -->
  </head>
  <body>
  	<!-- Start section Header 
	=================================-->

  	<header id="main">
  		<!-- <div class="video-container">
  			<div class="filter"></div>
  			<video autoplay loop class="fillWidth">
  				<source src="vidheo-bg/MP4/date.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
  				<source src="video-bg/WEBM/date.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
  			</video>
  			<div class="poster hidden">
  				<img src="video-bg/Snapshots/date.jpg" alt="date">
  			</div>
  		</div> -->
  		<div class="container">
  			<div class="row main-head">
  				<div class="col-xs-6 main-logo">
  					<div style="height: 100px;">
  						<!-- <p><span class="color-logo">Grizzly.ru</span></p> -->
  						<a href="/">
  						<img src="template/img/header/Logo3.png" alt="people">
  						</a>
  					</div>
  				</div>

  				<!-- Start section Navigation on Main screen -->
  				<?php
          $logo = $_SERVER['SERVER_NAME'];
          if(isset($_COOKIE['logged_user'])){
          $user = $_COOKIE['logged_user'];
        }
          //echo $logo;
        ?>
  				<div class="col-xs-6 main-nav">
  					<a href="#cd-nav" class="cd-nav-trigger">Menu 
  						<span class="cd-nav-icon"></span>
  						<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
  							<circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
  						</svg>
  					</a>
  					<div id="cd-nav" class="cd-nav">
  						<div class="cd-navigation-wrapper">
  							<div class="cd-half-block">
  								<h3>Навигация</h3>
  								<nav>
  									<ul class="cd-primary-nav">
  										<li><a href="/" class="selected">Главная</a></li>
  										<!-- <li><a href="/about">Личный кабинет</a></li> -->
  										<li><a href="#partners">Партнёры</a></li>
  										<li><a href="/cabinet">Заведения</a></li>
                      <?php
                      if(!isset($_COOKIE['logged_user'])){
                            //echo 'YES';
                            //Если пользователь не партнёр
                          ?>
                            <li><a href="/login">Авторизация | Регистрация</a></li>
                            <?php
                          }else{
                          //Если пользователь партнёр
                          ?>
                            <li><a href="/about">Личный кабинет</a></li>
                          <?php
                          }
                        
                          
                          //echo $findeOne->login;

                        ?>


  										<!-- <li><a href="/login">Авторизация | Регистрация</a></li> -->
  										<li><a href="#feedback">Отзывы</a></li>
  										<li><a href="#contact-us">Служба поддержки</a></li>
  									</ul>
  								</nav>
  							</div><!-- .cd-half-block -->
  							<div class="cd-half-block">
  								<address>
  									<ul class="cd-contact-info">
  										<li><a href="mailto:admin@grizzlyoffical.ru">admin@grizzlyoffical.ru</a></li>
  										<li>+79224886206</li>
  										<li>
  											<span>г.Тюмень</span>
  											<span>Россия</span>
  										</li>
  									</ul>
  								</address>
  							</div> <!-- .cd-half-block -->
  						</div> <!-- .cd-navigation-wrapper -->
  					</div> <!-- .cd-nav -->
  				</div>
  			</div>
  			
  			<!-- Finish section NAvigation on Main screen -->

  			<div class="row main-text">
  				<div class="col-lg-8 col-lg-offset-2">
  					<h1><span>Добро пожаловать</span> <br> Онлайн город <br> Тюмень</h1>
  					<!-- <img src="template/img/header/people.jpg" alt="people"> -->
  				</div>
  			</div>
  		</div>
  	</header>