<?php


 //echo $_SESSION['code'];
if(isset($_POST['sendcode'])){
	if($_POST['code'] == $_SESSION['code']){
		$logo = $_SERVER['SERVER_NAME'];
		header("Location: http://$logo/newpassword");
	}else{
		?>
		<script>alert('Код введён неверно!');</script>
			<?php
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

						<p>Введите код подтверждения с вашего email. Если вы не получили письмо, то проверьте папку 'спам'!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-lg-offset-3">
						<form action="/vost" method="post">
							<!-- <input type="email" name="email" placeholder="Email Address" required/> -->
							<!-- <button type="submit" name="send" class="btn">Отправить</button> -->
							<h5>Код</h5>
							<?php

							
							?>
							<input name="code" placeholder="Код" required/>
							<button type="submit" name="sendcode" class="btn">Подтвердить</button>
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


	<!-- Finish section Password resset 
	================================-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php
						include ROOT.'/views/layouts/sectionpodder.php';
					?>