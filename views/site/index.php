
<?php

include ROOT.'/views/layouts/header.php';
?>


	<!-- Start section Partners 
	==================================-->



	<section id="partners">
		<div class="container">
				<div class="row">
					<div class="partners-head text-center col-lg-12">
						<h3>Наши партнёры</h3>
					</div>
				</div>
				<div class="row">
		            <div class="col-lg-12">
		              <div class="partners-slider">
		              	<?php 
			              $slider = R::find('bars', 'id >?  ORDER BY id LIMIT 8', array(0));
			              foreach($slider as $value){
			             ?>
		                <div class="partners-slider-item text-center">
		                  <div class="partners-box">
		                    <img class="img-circle center-block partners-img" src="../template/img/institutions/<?php echo $value->img; ?>" alt="Mike">
		                    <div class="partners-shadow">
								<!-- <h3>Carat Auto</h3> -->
								<h4><?php echo $value['name']; ?></h4>
			                    <p><!-- От 1500 до 6000 руб./час --> <br>
									Телефон: <?php echo $value['phone']; ?> <br>
									<?php echo $value['address']; ?> <br>
									<?php echo $value['director']; ?>
			                    </p>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <br>
			                    <a href="/institution/<?php echo $value->id ?>" class="btn">Подробнее</a>
		                    </div>
		                  </div>
		                </div>
		                <?php

		            }

		                ?>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="partners-chat">
						<?php
					      $logo = $_SERVER['SERVER_NAME'];
					      if(isset($_COOKIE['logged_user'])){
					      $user = $_COOKIE['logged_user'];
					    }else{
					    	?>

					    	<p>Для того, чтобы иметь доступ ко всему сайту, войдите в <a href="/login">Личный кабинет</a>.</p>

					    	<?php
					    }
					    ?>
						<!-- <p>Для того, чтобы иметь доступ ко всему сайту, войдите в <a href="/login">Личный кабинет</a>.</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Finish section Partners 
	===================================-->

	<!-- Start section Services 
	============================-->

  	<!-- <section id="services">
  		<div class="container">
  			<div class="services">
  				<div class="row">
  		  				<div class="services-head col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1">
  		  					<h3>О нас</h3>
  		  					<p>В наше, настоящее время. Красивые ухаживания. Редкость. В виду жизненной суеты, нехватки времени, мы позабыли о радости и красоте, приятных моментов с противоположным полом. Не мало мы знаем примеров не составляющих, утрачиваемых радость, приятных моментов отношений. Ниже мы предоставляем спектор услуг, улучшающих настоящие отношения. Мы зажжем глаза вашего, близкого человека. Подарите моменты радости себе и любимым. Возобновите то, что было утрачено.</p>
  		  				</div>
  		  				<div class="row">
  		  					<div class="services-box col-lg-12">
  		  						<h3>Услуги</h3>
  		  					</div>
  		  				</div>
  		  				<div class="row">
  							<div class="col-xs-12 col-sm-6 col-lg-3">
  								<div class="services-box">
  									<img src="template/img/services/1.png" alt="image">
  									<h4>Оригинальные подарки</h4>
  								</div>
  							</div>
  							<div class="col-xs-12 col-sm-6 col-lg-3">
  								<div class="services-box">
  									<img src="template/img/services/2.png" alt="image">
  									<h4>Романтика Необчные свидания</h4>
  								</div>
  							</div>
  							<div class="col-xs-12 col-sm-6 col-lg-3">
  								<div class="services-box">
  									<img src="template/img/services/3.png" alt="image">
  									<h4>Для тех, кто одинок</h4>
  								</div>
  							</div>
  							<div class="col-xs-12 col-sm-6 col-lg-3">
  								<div class="services-box">
  									<img src="template/img/services/4.png" alt="image">
  									<h4>Специальные предложения</h4>
  								</div>
  							</div>
  		  				</div>
  		  				<div class="row">
  		  					<div class="services-footer col-lg-12">
  		  						<p>Для связи с нами заполните анкету ниже, и наш Менеджер свяжется с вами в удобное для вас время</p>
  		  					</div>
  		  				</div>
  		  			</div>
  			</div>
  		</div>
  	</section> -->
	
	<!-- Finish section Services 
	===============================-->

	<!-- Start section Pricing 
	===============================-->

	<!-- <section id="pricing" class="bg-pricing">
		<div class="container">
			<div class="row">
				
				<div class="title text-center wow fadeInDown" data-wow-duration="500ms">
		        	<h2>Пакеты услуг</h2>
			        <div class="border"></div>
			    </div>
			    <article class="col-md-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
					<div class="pricing">
						
						<div class="price-title">
							<h3>Эконом</h3>
							<p><strong class="value">5000</strong> 
							</p>
						</div>
						<ul>
							<li>1GB Disk Space</li>
							<li>10 Email Account</li>
							<li>Script Installer</li>
							<li>1 GB Storage</li>
							<li>10 GB Bandwidth</li>
							<li>24/7 Tech Support</li>
						</ul>
						<a class="btn btn-transparent" href="#form">Заказать</a>
						</div>
				</article>
				<article class="col-md-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
					<div class="pricing">
					
						<div class="price-title">
							<h3>Стандарт</h3>
							<p><strong class="value">10000</strong> 
							</p>
						</div>
						<ul>
							<li>1GB Disk Space</li>
							<li>10 Email Account</li>
							<li>Script Installer</li>
							<li>1 GB Storage</li>
							<li>10 GB Bandwidth</li>
							<li>24/7 Tech Support</li>
						</ul>
						<a class="btn btn-transparent" href="#form">Заказать</a>
						</div>
				</article>
				<article class="col-md-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
					<div class="pricing">
						
						<div class="price-title">
							<h3>VIP</h3>
							<p><strong class="value">30000</strong> 
							</p>
						</div>
						<ul>
							<li>1GB Disk Space</li>
							<li>10 Email Account</li>
							<li>Script Installer</li>
							<li>1 GB Storage</li>
							<li>10 GB Bandwidth</li>
							<li>24/7 Tech Support</li>
						</ul>
						<a class="btn btn-transparent" href="#form">Заказать</a>
						</div>
				</article>
			</div>       
		</div>   	
	</section> -->

	<!-- Finish section Pricing 
	==============================-->

	<!-- Strat section feedback 
	==============================-->

	<section id="feedback">
		<div class="container">
				<div class="row">
					<div class="col-lg-12 section-header text-center">
		              <h4><span>Клиенты</span> говорят</h4>
		              <p>Сдесь мы хотим показать, что думают о нас наши клиенты</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-lg-12">
		              <div class="feedback-slider">
		                <div class="feedback-slider-item text-center">
		                  <div class="feedback-box">
		                    <img class="img-circle center-block feedback-img" src="template/img/feedback/1.jpg" alt="Mike">
		                    <div class="feedback-shadow">
		                      <p>“Всем хай! Недавно наткнулась в сети на этот сайт и решила попробовать освежить свою жизнь, из-за плотного графика в работе у меня не было времени искать компанию для проведения вечера. Связалась с менеджером, он подыскал мне мужчину за моими вкусами, организовал место встречи, и всё было на высшем уровни. Рекомендую ваш подход!”</p>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <p>***</p>
		                    </div>
		                  </div>
		                </div>
		                <div class="feedback-slider-item text-center">
		                  <div class="feedback-box">
		                    <img class="img-circle center-block feedback-img" src="template/img/feedback/2.jpg" alt="Mike">
		                    <div class="feedback-shadow">
		                      <p>“Всем здаров. Подруга порекомендовала сайт, типо подбирают тебе партнёра и устраивают красивый вечер. Решил попробовать, как девушки у меня нету и хотел какого-то романтического отношения. Девушка встретилась хорошая, общительная. Провели прекрасный вечер. Ребята, спасибо вам, остался доволен!”</p>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <p>***</p>
		                    </div>
		                  </div>
		                </div>
		                <div class="feedback-slider-item text-center">
		                  <div class="feedback-box">
		                    <img class="img-circle center-block feedback-img" src="template/img/feedback/3.jpg" alt="Mike">
		                    <div class="feedback-shadow">
		                      <p>“Хороший сервис. Спасибо за вашу работу. Я давно не чувствовала себя счастливой. Ещё раз спасибо!”</p>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <p>***</p>
		                    </div>
		                  </div>
		                </div>
		                <div class="feedback-slider-item text-center">
		                  <div class="feedback-box">
		                    <img class="img-circle center-block feedback-img" src="template/img/feedback/4.jpg" alt="Mike">
		                    <div class="feedback-shadow">
		                      <p>“Моё мнение было, что это какой-то развод. И я думала, что тут такого. Но пообщавшись с вашим менеджером меня заинтересовала ваша идея. Я очень был рад, что к вам обратился. Вы сэкономили моё время. Всем рекомендую.”</p>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <p>***</p>
		                    </div>
		                  </div>
		                </div>
		                <div class="feedback-slider-item text-center">
		                  <div class="feedback-box">
		                    <img class="img-circle center-block feedback-img" src="template/img/feedback/5.jpg" alt="Mike">
		                    <div class="feedback-shadow">
		                      <p>“У меня не большая фирма. Хотела сделать персоналу корпоративные подарки. Вы меня очень выручили!”</p>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <p>***</p>
		                    </div>
		                  </div>
		                </div>
		                <div class="feedback-slider-item text-center">
		                  <div class="feedback-box">
		                    <img class="img-circle center-block feedback-img" src="template/img/feedback/6.jpg" alt="Mike">
		                    <div class="feedback-shadow">
		                      <p>“Ребята молодцы!”</p>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <p>***</p>
		                    </div>
		                  </div>
		                </div>
	              </div>
	            </div>
			</div>
		</div>
	</section>

	<!-- Finish section feedback 
	==============================-->

	<!-- Start section Form 
	==============================-->

	
	<!--form-->
	<!-- <section id="form">
		<div class="container">
			
		</div>
	</section> --><!--/form-->

	<!-- Finish section Form 
	==============================-->

	<!-- Start section Contact Us 
	==============================-->
	
	<section id="contact-us">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2><span class="color">Служба поддержки</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<p>Если у Вас остались вопросы, или у Вас есть интересное предложения и Вы хотите его обсудить, напишите нам, и мы откликнимся.</p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>г. Тюмень, Россия</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Телефон: +79 2248 862 06</span>
							</div>

							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: admin@grizzlyoffical.ru</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
					<!-- Contact Form -->
					<?php
						include ROOT.'/views/layouts/support_html.php';
					?>
					<?php
						include ROOT.'/views/layouts/support.php';
					?>
					<!-- Contact End -->
					

					</div>
				</div> <!-- end row -->
			</div> <!-- end container -->		
		</section> <!-- end section -->
		<?php
			include ROOT.'/views/layouts/footer.php';
		?>

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
				// event.preventDefault();
				//stop if nav animation is running 
				if( !isLateralNavAnimating ) {
					// if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
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
        // event.preventDefault(); 
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