<?php
		if(isset($_POST['send'])){

			$email = $_POST['email'];


			$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
			$max=10; 
			$size=StrLen($chars)-1;  
			$password=null;  
			while($max--) 
			$password.=$chars[rand(0,$size)];


			require 'phpmailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;
			$mail->setFrom('admin@grizzlyoffical.ru', 'Ваше имя');
			$mail->addAddress("$email", 'Пользователю сайта');
			$mail->Subject  = "Код подтверждения";
			$mail->Body     = 'Код подтверждения о востановлении пароля: '. $password;
			if(!$mail->send()) {
			// echo 'Message was not sent.';
			// echo 'Mailer error: ' . $mail->ErrorInfo;
			} else {
			// echo 'Message has been sent.';
				$logo = $_SERVER['SERVER_NAME'];
				header("Location: http://$logo/vost");
				session_start();
				$_SESSION['code'] = $password;
          		$_SESSION['email'] = $email;
			}

		}

	?>


<?php

	include ROOT.'/views/layouts/header2.php';
?>

  <body>
    
    <!-- Start section Password resset 
	================================-->
	<style type="text/css">
		/* Fots files */
.opn-reg {
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
}
.opn-bold {
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
}
/* Base colors */
/* Base settigns */
body {
  font-size: 14px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  color: #626262;
  background: #f5f5f5;
}
/* Start section Password resset */
.pass_res h5 {
  text-align: center;
  font-size: 5vh;
  margin: 2%;
}
.pass_res p {
  text-align: center;
  font-size: 3vh;
  margin: 2%;
}
.pass_res form input {
  background: #f5f5f5;
  border: 2px solid #fc6744;
  color: #626262;
  display: block;
  font-size: 3vh;
  height: 6vh;
  outline: none;
  padding-left: 2%;
  width: 100%;
  margin: 2% 0px;
}
.pass_res form p {
  margin: 4% 0 2% 0;
}
.pass_res form button {
  background: #fc6744;
  border: 2px solid #706b73;
  border-radius: 0;
  color: #ffffff;
  font-size: 3vh;
  display: block;
  width: 100%;
}
.pass_res form button:hover {
  background: #00cc99;
  border: 2px solid #fc6744;
}

	</style>
	<section id="pass_res">
		<div class="container">
			<div class="pass_res">
				<div class="row">
					<div class="col-lg-12">
						<h5>Забыли пароль ?</h5>
						<p>Для того, чтобы восстановить пароль, введите Ваш Email Address и вам придёт код подтверждения.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-lg-offset-3">
						<form action="/reset" method="post">
							<!-- <input type="email" name="email" placeholder="Email Address" required/> -->
							<!-- <button type="submit" name="send" class="btn">Отправить</button> -->
							<?php


								
							
							?>
							<input type="email" name="email" placeholder="Email Address" required/>
							<button type="submit" name="send" class="btn">Отправить</button>
							<?php

							
							?>
							
							<!-- <button type="submit" name="generate" class="btn">Генерация</button>
							<button type="submit" name="save" class="btn">Сохранить</button> -->
						</form>


					
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Finish section Password resset 
	================================-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="template/js/bootstrap.min.js"></script>
  </body>
</html>