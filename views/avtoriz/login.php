<?php

					
					   if(isset($_POST['goregist'])){
					   		$logo = $_SERVER['SERVER_NAME'];
					   		header("Location: http://$logo/register");
					   }	
					   if(isset($_POST['resetpassword'])){
					   		$logo = $_SERVER['SERVER_NAME'];
					   		header("Location: http://$logo/reset");
					   }

					   if(isset($_COOKIE['logged_user'])){
					   		$logo = $_SERVER['SERVER_NAME'];
					   		header("Location: http://$logo/login");
					   }else{
	
					    //Вход на сайт
					    $date = $_POST;
					    if(isset($date['submit'])){
					      $errors = array();
					      $login = $date['email'];
					      $password = $date['password'];
					      // $check = $data['check'];

					      $user = R::findOne('users', 'email = ?', array($login));
					      if($user){
					        if(password_verify($password, $user->password)){

					        $logo = $_SERVER['SERVER_NAME'];
					        if(isset($_POST['check'])){
					        	setcookie("logged_user", "$user->login", time()+604800);
					        }else{
					        	setcookie("logged_user", "$user->login", time()+3600);
					        }
					        // setcookie("logged_user", "$user->login");
						      header("Location: http://$logo/cabinet");
					          
					        }else{
					          //Пароль не совпадет, выведем ошибку
					          $errors[] = 'Пароль введён неверно!';
					          ?>
					          <script> alert('Пароль введён неверно!');</script> 
					        <?php
					        }
					      }else{
					        $errors[] = 'Пользователь не найден';
					        ?>
					          <script> alert('Пользователь не найден');</script> 
					        <?php
					      }
					             


					    }
					}

					    ?>


<?php

	include ROOT.'/views/layouts/header2.php';
?>


  	<!-- Finish header 
	============================-->

	<!-- Start section Partners 
	==================================-->



	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				</div>
				<div class="col-sm-8 col-sm-offset-2">
					<div class="login-form"><!-- login form -->
						<h5>Авторизация</h5>
						<form method="post" action="/login">
							<input type="email" name="email" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Пароль" />
							<span>
								<input type="checkbox" name="check" value="true" class="checkbox"> 
								Запомнить меня
							</span>
							
          					<!-- <button type="submit" name="submit" class="btn">Авторизироваться</button>
							<div style="text-align: center; padding-top: 10px; font-size: 1.5em">
								<strong><a href="/register" >Регистрация</a></strong>
							</div>
							<div style="text-align: center; padding-top: 10px; font-size: 1.5em">
								<strong><a href="/reset" >Сброс пароля</a></strong>
							</div> -->

							<button type="submit" name="submit" class="btn">Авторизироваться</button>
							<form method="POST" action="/login">
							    <button type="submit" class="btn" name="goregist">Регистрация</button>
							</form>
							<form method="POST" action="/login">
							    <button type="submit" class="btn" name="resetpassword">Сброс пароля</button>
							</form>
						</form>
						

						

					</div><!-- /login form -->
				</div>
				
				<div class="col-sm-4">
					<div class="signup-form"><!-- sign up form -->
					</div><!-- /sign up form -->
				</div>
			</div>
		</div>
	</section><!--/form-->

	<!-- Finish section Form 
	==============================-->

	<!-- Start section Contact Us 
	==============================-->
	
	<?php
						include ROOT.'/views/layouts/sectionpodder.php';
					?>

	<!-- Finish section Contact Us 
	=============================-->

<!-- Finish section Contact Us 
	=============================-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="template/slick/slick.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/wow.min.js"></script>
    <script src="template/js/main.js"></script> <!-- Resource jQuery -->

	<!-- Scripts for opition site -->


	<script>
		jQuery(document).ready(function($){
			var isLateralNavAnimating = false;
			//open/close lateral navigation
			$('.cd-primary-nav').on('click', function(event){
				event.preventDefault();
				//stop if nav animation is running 
				if( !isLateralNavAnimating ) {
					if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
					$('body').toggleClass('navigation-is-open');
					$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
						//animation is over
						isLateralNavAnimating = false;
					});
				}
			});
		});
	</script>
    <script>
    	jQuery(document).ready(function($){
	// при клике скрывает меню и переходит по якорю 
	$("#cd-nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1500);
    });

	});
    </script>

    
    <script>
      $(document).ready(function(){
        $('.partners-slider').slick({

            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
			autoplaySpeed: 3000,
			speed: 1000,
			pauseOnFocus: true,
            arrows: true,
            prevArrow: '<i class="fa partners-slider-arrows arrow-left fa-chevron-left"></i>',
            nextArrow: '<i class="fa partners-slider-arrows arrow-right fa-chevron-right"></i>',
            dots: true,
            responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 320,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  	]
        });
      });
    </script>
    <script>
      $(document).ready(function(){
        $('.feedback-slider').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
			autoplaySpeed: 3000,
			speed: 1000,
            arrows: true,
            prevArrow: '<i class="fa feedback-slider-arrows arrow-left fa-chevron-left"></i>',
            nextArrow: '<i class="fa feedback-slider-arrows arrow-right fa-chevron-right"></i>',
            dots: true,
            responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 320,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  	]
        });
      });
    </script>

    
</body>
</html>