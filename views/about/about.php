<?php
if(!isset($_COOKIE['logged_user'])){
	$logo = $_SERVER['SERVER_NAME'];
	header("Location: http://$logo/cabinet");
}else{
	if(isset($_POST['send'])){



		$login = $_COOKIE['logged_user'];
		$finde = R::findOne('users', 'login = ?', array("$login"));
		$finde2 = R::load('users', $finde->id);
		// $finde2->password = password_hash($password, PASSWORD_DEFAULT);
		// $finde2->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$finde2->email = $_POST['email'];
		$finde2->phone = $_POST['phone'];
		$finde2->date = $_POST['date'];
		$finde2->country = $_POST['country'];
		$finde2->who = $_POST['who'];
		$finde2->sex = $_POST['sex'];
		$finde2->city = $_POST['city'];
		$finde2->about = $_POST['about'];
		// $finde2->avatar = $_POST['avatar'];
		$finde2->relations = $_POST['relations'];
		R::store($finde2);
		// unset($_SESSION['code']);
		// unset($_SESSION['email']);
		// header("Location: /");

	}

// echo $_COOKIE['logged_user'];

	$login = $_COOKIE['logged_user'];
	$finde = R::findOne('users', 'login = ?', array("$login"));
	$finde2 = R::load('users', $finde->id);
	// echo '<pre>';
	// var_dump($finde2['id']);
							
}

?>




<?php

	include ROOT.'/views/layouts/header2.php';

?>
<style type="text/css">
	.opn-reg{font-family:'Open Sans',sans-serif;font-weight:400}.opn-bold{font-family:'Open Sans',sans-serif;font-weight:600}body{font-size:14px;font-family:'Open Sans',sans-serif;font-weight:400;color:#626262;background:#f5f5f5}.about_user h5{text-align:center;font-size:5vh;margin:2%}.about_user p{text-align:center;font-size:3vh;margin:2%;color:#817eff}.about_user form img{width:60%}.about_user form input{background:#f5f5f5;border:2px solid #fc6744;color:#626262;display:block;font-size:2vh;height:5vh;outline:0;padding-left:2%;width:100%;margin:2% 0}.about_user form input:focus,.about_user form input:hover{border:2px solid #0c9}.about_user form p{margin:4% 0 2%;text-align:left;font-size:2vh;color:#626262}.about_user form select{width:40%;height:3vh}.about_user form textarea{width:100%;height:10vh;font-size:2vh}.about_user form button{background:#fc6744;border:2px solid #706b73;border-radius:0;color:#fff;font-size:2vh;display:block;width:100%;margin:2% 0}.about_user form button:hover{background:#0c9;border:2px solid #fc6744}
</style>


  <body>

    <!-- Start section About User 
    ===============================-->

    <section id="about_user">
      <div class="container">
        <div class="about_user">
          <div class="row">
            <div class="col-lg-12">
              <h5>О Вас</h5>
              
            </div>
          </div>





          <div class="row">
            <div class="col-lg-6 col-sm-12">

            	<?php
				if(isset($_POST['upload'])){
					$uploaddir = 'user_images/';
				// это папка, в которую будет загружаться картинка
				$apend=$_COOKIE['logged_user'].'.jpg'; 
				// это имя, которое будет присвоенно изображению 
				$uploadfile = "$uploaddir$apend"; 
				//в переменную $uploadfile будет входить папка и имя изображения

				// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
				// И проходит ли изображение по весу. В нашем случае до 512 Кб
				if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=5120000)) 
				{ 
				// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
				  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
				   { 
				   //Здесь идет процесс загрузки изображения 
				   $size = getimagesize($uploadfile); 
				   // с помощью этой функции мы можем получить размер пикселей изображения 
				     if ($size[0] < 1501 && $size[1]<1501) 
				     { 
				     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
				     // echo "Файл загружен. Путь к файлу: <b>http:/yoursite.ru/".$uploadfile."</b>"; 
				     	
				     	
				     	$_SESSION['account'] = $_COOKIE['logged_user'];
				     } else {
				     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 1500; высота не более 1500)"; 
				     unlink($uploadfile); 
				     // удаление файла 
				     } 
				   } else {
				   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
				   } 
				} else { 
				echo "Размер файла не должен превышать 5мб";
				} 
				}

?>
				
				<?php 
				if(isset($_POST['upload'])){
					$login = $_COOKIE['logged_user'];
					$finde = R::findOne('users', 'login = ?', array("$login"));
					$finde2 = R::load('users', $finde->id);
					// $finde2->password = password_hash($password, PASSWORD_DEFAULT);
					// $finde2->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
					
					$finde2->photo = $uploadfile;
					R::store($finde2);
				}
				// echo $uploadfile;
				// $_SESSION['account'] = $uploadfile; 
				// echo $_SESSION['account'];
				?>
				<?php

				if(!isset($finde2['photo'])){
					// echo "Фото нет!";
					?>
					<img width="200" height="200" src="template/img/about_user/about_user.png" alt="photo">
					<?php
				}else{
					?>
					<img width="200" height="200" src="<?php echo $finde2['photo']; ?>" alt="photo">
					<?php
				}

				?>
            	<form name="upload" action="/about" method="POST" ENCTYPE="multipart/form-data"> 
				Выберите фото для загрузки: 
				<input type="file" name="userfile">
				<button type="submit" name="upload" value="Загрузить">Загрузить </button>
				
				
				</form>
				<br>
				<br>

				



               <form enctype="multipart/form-data" method="post" action="/about">
                <input type="hidden" name="whatever" value="Главная форма">

                <!-- <img src="../template/img/avatars/about_user.png" alt="photo"><input type="file" name="img"> -->
                
                
        
           
                
                <!-- <input type="text" name="avatar"> -->
                <input type="text"  id="username" name="name" value="<?php if(isset($_COOKIE['logged_user'])) echo $finde2['login']; ?>" placeholder="ФИО" requireds/>
                <input type="email" name="email" value="<?php if(isset($_COOKIE['logged_user'])) echo $finde2['email']; ?>" placeholder="Email Address" requireds/>
                <!-- <input type="password" id="password" name="password" placeholder="Пароль" requireds/> -->
                <input type="tel" id="phone" value="<?php if(isset($_COOKIE['logged_user'])) echo $finde2['phone']; ?>" name="phone" placeholder="Телефон" requireds>
                <p>
                  <label for="date">Дата рождения: </label>
                  <input type="date" value="<?php if(isset($_COOKIE['logged_user'])) echo $finde2['date']; ?>" name="date" placeholder="Дата рождения" requireds>
                </p>
                <div class="country">
                 <p>Страна:</p>
				<div id="location">
					<select name="country" method="POST" action="/about" requireds>
						<option value="russia" >Россия</option>
						<option value="ukraine">Украина</option>
					</select>



				</div>
                </div>
                <input type="city" name="city" value="<?php if(isset($_COOKIE['logged_user'])) echo $finde2['city']; ?>" placeholder="Ваш город" requireds>
                <div class="who">
                  <p>Кто вы:</p>
					<div id="who">
						<select name="who" method="POST" action="/about" requiredss>
							<option value="user">Пользователь</option>
							<option value="partner">Партнёр</option>
						</select>
					</div>
                </div>
                <div class="sex">
                  <p>Пол:</p>
					<div id="sex">
						<select name="sex" method="POST" action="/about" requiredss>
							<option value="man">Мужчина</option>
							<option value="woman">Женщина</option>
					</select>
					</div>
                </div>
                <div class="relations">
                  <p>Отношения:</p>
					<div id="relations">
						<select name="relations" method="POST" action="/about" name="relations" requiredss>
							<option value="alone">Одинокий(-ая)</option>
							<option value="meet">Встречаюсь</option>
							<option value="married">Женат</option>
						</select>
					</div>
                </div>

                <a href="/exit" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Выход из аккаунта
        </a>
        <a href="/reset" class="btn btn-info btn-lg">
          <span ></span> Сброс пароля
        </a>
        <a href="/balance" class="btn btn-info btn-lg">
          <span ></span> Покупка рекламы
        </a>

        	<h4>История платежей</h4>
        <table class="table table-inverse" style="border: 2px solid #5BC0DE; border-radius: 50px;">
  <thead>
    <tr>
      <th>#</th>
      <th>id Покупки</th>
      <th>Дата</th>
      <th>Сумма(руб)</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->
     <?php 
     $login = $_COOKIE['logged_user'];
     // echo $login;
      // $history = R::find('payment', 'id >? AND `login` = "$login"', array(0));
     $history = R::find('payment', 'login = ?', array("$login"));
      foreach($history as $value){
      ?>
      <tr>
      <th scope="row"><?php echo $value['id']; ?></th>
      <td><?php echo $value['operation_id']; ?></td>
      
      <td><?php echo $value['time']; ?></td>
      <td><?php echo $value['sum']; ?></td>
      
    </tr>

      <?php	// echo $value->name.'<br>';
			}
			//echo $_COOKIE['logged_user'];
			?>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>	

				<a href="/add" class="btn btn-info btn-lg">
          <span ></span>	Добавить заведение
        </a>

               
                <p>Опишите себя, свои предпочтения:</p>
                <textarea placeholder="Опишите себя, свои предпочтения" name="about" requireds><?php if(isset($_COOKIE['logged_user'])) echo $finde2['about']; ?> 
                </textarea>
                <br>
                <!-- <button type="reset" class="btn">Изменить</button> -->
                <button type="submit" name="send" class="btn">Сохранить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Finish section About User 
    ===============================-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../template/js/bootstrap.min.js"></script>
    <script src="../template/js/search-account.js"></script>

<footer>
		<p class="credits">Copyright &copy;2018 Grizzly.</p>
	</footer>
  </body>
</html>