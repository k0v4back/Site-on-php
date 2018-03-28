<?php
						if(isset($_COOKIE['logged_user'])){
					   		$logo = $_SERVER['SERVER_NAME'];
					   		header("Location: http://$logo/login");
					   }else{
						if(isset($_POST['send'])){
							$username = $_POST['username'];
							// $login = $_POST['login'];
							$email = $_POST['email'];
							$password = $_POST['password'];
							$phone = $_POST['tell'];
							$date = $_POST['date'];
							$country = $_POST['country'];
							$who = $_POST['who'];
							$sex = $_POST['sex'];
							$relations = $_POST['relations'];
							//$image = $_POST['image'];

							// echo $username.'<br>';
							// echo $email.'<br>';
							// echo $password.'<br>';
							// echo $phone.'<br>';
							// echo $date.'<br>';
							// echo $country.'<br>';
							// echo $who.'<br>';
							// echo $sex.'<br>';
							// echo $relations.'<br>';

							// $date = $_POST;
						    
						      $errors = array();
						      // $login = $date['login'];
						      // $email = $date['email'];
						      // $password = $date['password'];

						    $сhecklogin = R::find('users', 'login = ?', array($username));
						    if($сhecklogin == array()){ 
						    }else{
						      $errors[] = 'Такой ник уже существует';
						      ?>
						      <script> alert('Такой ник уже существует');</script> 
						      <?php
						    }

						    $сheckemail = R::find('users', 'email = ?', array($email));
						    if($сheckemail == array()){ 
						    }else{
						      $errors[] = 'Такой email уже существует';
						      ?>
						      <script> alert('Такой email уже существует');</script> 
						      <?php
						    }

						    $сheckpassword = R::find('users', 'password = ?', array($password));
						    if(iconv_strlen($password) < 6){  
						      $errors[] = 'Пароль короче 6 символов';
						      ?>
						      <script> alert('Пароль короче 6 символов');</script> 
						      <?php
						    }else{

						    }







						      if(empty($errors)){
						        $user = R::dispense('users');
						        $user->login = $username;
						        // $user->login = $login;
						        $user->email = $email;
						        $user->password = password_hash($password, PASSWORD_DEFAULT);
						        $user->phone = $phone;
						        $user->date = $date;
						        $user->country = $country;
						        $user->who = $who;
						        $user->sex = $sex;
						        $user->city = $_POST['city'];
						        $user->about = $_POST['about'];
						        $user->relations = $relations;
						      R::store($user);
						      $logo = $_SERVER['SERVER_NAME'];
						      header("Location: http://$logo/login");
						      // echo '<div  align="center" style="padding-top:20px"><a href="http://newsportal/vhod" style="color:green"><font size="3">Нажмите для входа на сайт</font></a></div>';
						      exit();
						      }else{
						        ?>
						      <script> alert('Возникла ошибка при регистрации!');</script> 
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



	<!-- Finish section feedback 
	==============================-->

	<!-- Start section Form 
	==============================-->

	<section id="form" style="padding-bottom: 200px;"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-sm-8 col-sm-offset-2">
					<div class="signup-form"><!-- sign up form -->
						<h5>Регистрация</h5>
						<form method="post" action="/register">
							<input type="hidden" name="whatever" value="Главная форма">
							<input type="text"  id="username" name="username" placeholder="ФИО" value="<?php if(isset($_POST['send'])) echo $username; ?>" requireds />
							<input type="email" name="email" placeholder="Email Address" value="<?php if(isset($_POST['send'])) echo $email; ?>" requireds/>
							<input type="password" id="password" name="password" placeholder="Пароль" requireds/>
							<input type="tel" id="phone" name="tell" placeholder="Телефон" value="<?php if(isset($_POST['send'])) echo $phone; ?>" requireds>
							<p>
								<label for="date">Дата рождения: </label><a style="color:red">*</a>
								<input type="date" name="date" placeholder="Дата рождения" value="<?php if(isset($_POST['send'])) echo $date; ?>" requireds>
							</p>
							<div class="country">
								<p>Страна:<a style="color:red">*</a></p>
								<div id="location">
									<select name="country" requireds>
										<option value="russia">Россия</option>
										<option value="ukraine">Украина</option>
									</select>

								</div>
							</div>
							<input type="city" name="city" placeholder="Ваш город" requireds>
							<div class="who">
								<p>Кто вы:<a style="color:red">*</a></p>
								<div id="who">
									<select name="who" requireds>
										<option value="user">Пользователь</option>
										<option value="partner">Партнёр</option>
									</select>
								</div>
							</div>
							<div class="sex">
								<p>Пол:<a style="color:red">*</a></p>
								<div id="sex">
									<select name="sex" requireds>
										<option value="man">Мужчина</option>
										<option value="woman">Женщина</option>
									</select>
								</div>
							</div>
							<div class="relations">
								<p>Отношения:<a style="color:red">*</a></p>
								<div id="relations">
									<select name="relations" name="relations" requireds>
										<option value="alone">Одинокий(-ая)</option>
										<option value="meet">Встречаюсь</option>
										<option value="married">Женат</option>
									</select>
								</div>
							</div>
							<br>
							<!-- <p>Загрузите ваше фото</p>
								<input type="file" name="upload_file" style="background: none">
								<input name="image" type="file" multiple style="background: none"><br>

 -->




								


							<br>
							<p>О себе:<a style="color:red">*</a></p>
							<textarea placeholder="Опишите себя, свои предпочтения" name="about" cols="50" rows="5" requireds></textarea>
							<button type="submit" name="send" class="btn">Зарегестрироваться</button>
							<button type="reset" value="Clear Form" class="btn">Очистить форму</button>
							<button type="submit" name="sign" class="btn">Вход<a href="/login" ></a></button>
						</form>

						



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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

</body>
</html>