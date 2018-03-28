<?php


if(empty($_SESSION['code'])){
	header("Location: /reset");
}




	if(isset($_POST['save'])){
	$email = $_SESSION['email'];
	$finde = R::findOne('users', 'email = ?', array("$email"));
	$finde2 = R::load('users', $finde->id);
	// $user->password = password_hash($password, PASSWORD_DEFAULT);
	$finde2->password = password_hash($_POST['code'], PASSWORD_DEFAULT);
	R::store($finde2);
	unset($_SESSION['code']);
	unset($_SESSION['email']);
	header("Location: /");
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

						
						<br>
						<br>
						<br>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-lg-offset-3">
						<form action="/newpassword" method="post">
							
							<h5>Ваш новый пароль</h5>
							<input type="password" name="code" placeholder="Пароль" required/>
							<button type="submit" name="save" class="btn">Сохранить</button>
							<?php

							

							      
							?>
							
							
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