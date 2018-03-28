<?php
if(!isset($_COOKIE['logged_user'])){
  $logo = $_SERVER['SERVER_NAME'];
  header("Location: http://$logo/login");
}else{

  if(isset($_POST['save'])){
    // echo $_POST['name'];


    $login = $_COOKIE['logged_user'];
    $finde = R::findOne('bars', 'login = ?', array("$login"));
    $finde2 = R::load('bars', $finde->id);
    // $finde2->password = password_hash($password, PASSWORD_DEFAULT);
    // $finde2->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $finde2->name = $_POST['name'];
    // $finde2->img = $uploadfile;
    $finde2->description = $_POST['description'];
    // $finde2->category_id = $_POST['category_id'];
    $finde2->type_of_zaved = $_POST['type_of_zaved'];
    $finde2->type_of_kitchen = $_POST['type_of_kitchen'];
    $finde2->address = $_POST['address'];
    $finde2->advantages = $_POST['advantages'];
    $finde2->phone = $_POST['phone'];
    $finde2->director = $_POST['director'];
    $finde2->login = $login;
    $finde2->stream = $_POST['stream'];
    R::store($finde2);


    // $bars = R::dispense('bars');//Это переменная - поле в БД и создали таблицу user. Этот метод создаём бин(боб)
    // $bars->name = $_POST['name'];
    // $bars->img = $_POST['img'];
    // $bars->description = $_POST['description'];
    // $bars->category_id = $_POST['category_id'];
    // $bars->type_of_zaved = $_POST['type_of_zaved'];
    // $bars->type_of_kitchen = $_POST['type_of_kitchen'];
    // $bars->address = $_POST['address'];
    // $bars->advantages = $_POST['advantages'];
    // $bars->phone = $_POST['phone'];
    // $bars->director = $_POST['director'];
    // $bars->login = $_POST['login'];
    // R::store($bars);
  }



    // $login = $_COOKIE['logged_user'];
    // $finde = R::find('bars', 'login = ?', array("$login"));
    // // $finde3 = R::loadAll('bars', $finde['id']);
    // echo $finde['id'];
    // // $value['password = password_hash($password, PASSWORD_DEFAULT);
    // // $value['password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $value['name'] = $_POST['name'];
    // $value['img'] = $_POST['img'];
    // $value['type_of_zaved'] = $_POST['type_of_zaved'];
    // $value['type_of_kitchen'] = $_POST['type_of_kitchen'];
    // $value['address'] = $_POST['address'];
    // $value['advantages'] = $_POST['advantages'];
    // $value['phone'] = $_POST['phone'];
    // $value['director'] = $_POST['director'];
    // // $value['avatar'] = $_POST['avatar'];
    // R::store($finde3);
    // // unset($_SESSION['code']);
    // // unset($_SESSION['email']);
    // // header("Location: /");


    // $login = $_COOKIE['logged_user'];
    // $finde = R::find('bars', 'login = ?', array("$login"));
    // // $finde3 = R::loadAll('bars', $finde['id']);

    // foreach($finde as $value){
    //   $finde3 = R::load('bars', $value['id);
    //    $value['name'] = $_POST['name'];
    //  $value['img'] = $_POST['img'];
    //  $value['type_of_zaved'] = $_POST['type_of_zaved'];
    //  $value['type_of_kitchen'] = $_POST['type_of_kitchen'];
    //  $value['address'] = $_POST['address'];
    //  $value['advantages'] = $_POST['advantages'];
    //  $value['phone'] = $_POST['phone'];
    //  $value['director'] = $_POST['director'];
    //  // $value['avatar'] = $_POST['avatar'];
    //  R::store($finde3);
    // }


  // }
}

// $login = $_COOKIE['logged_user'];
//    $finde = R::find('bars', 'login = ?', array("$login"));
//    // $finde3 = R::loadAll('bars', $finde['id']);

//    foreach($finde as $value){
//      $finde3 = R::load('bars', $value['id);
//        $value['name'] = $_POST['name'];
//      $value['img'] = $_POST['img'];
//      $value['type_of_zaved'] = $_POST['type_of_zaved'];
//      $value['type_of_kitchen'] = $_POST['type_of_kitchen'];
//      $value['address'] = $_POST['address'];
//      $value['advantages'] = $_POST['advantages'];
//      $value['phone'] = $_POST['phone'];
//      $value['director'] = $_POST['director'];
//      // $value['avatar'] = $_POST['avatar'];
//      R::store($finde3);
//    }

?>


<?php

  include ROOT.'/views/layouts/header2.php';

?>

<style type="text/css">
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
/* Start section Payment */
.payment h3 {
  text-align: center;
  font-size: 6vh;
  color: #4eb2f7;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
  margin-bottom: 5%;
}
.payment-main-block-left,
.payment-main-block-right {
  border: 3px solid #00cc99;
  padding: 2%;
  margin-bottom: 2%;
  height: 150vh;
}
.payment-main-block-left h4,
.payment-main-block-right h4 {
  color: #4eb2f7;
  text-align: center;
  font-size: 4vh;
  margin: 4% 0;
}
.payment-main-block-left input,
.payment-main-block-right input {
  width: 60%;
  outline: none;
}
.payment-main-block-left input:hover,
.payment-main-block-right input:hover,
.payment-main-block-left input:focus,
.payment-main-block-right input:focus {
  border: 2px solid #fc6744;
}
.payment-main-block-left span,
.payment-main-block-right span {
  font-family: Open Sans;
  font-size: 3vh;
  color: #706b73;
  display: block;
  margin: 2% 0;
}
.payment-main-block-right p {
  text-align: center;
  font-size: 3vh;
  color: #706b73;
}
.payment-main-block-right li {
  list-style-type: none;
  margin: 2% 0;
}
.payment-main-block-right li a {
  color: #fc6744;
}
.payment-main-block-right li a:hover {
  text-decoration: none;
  color: #706b73;
}
.payment-main-block-right img {
  width: 30%;
  height: 35%;
}
.payment-main-block-right button {
  border-radius: 7px;
  cursor: pointer;
  border: 3px solid #4eb2f7;
  margin: 0 33%;
}
.payment-main-block-right button a {
  text-decoration: none;
}

</style>


<div class="container">
      <div class="payment">
        <div class="row">
          <?php


          ?>
          <!-- <h3>У вас доступно 2 заведения</h3> -->
        </div>
        <div class="payment-main">
          <div class="row">
            
                
                  <?php 
                  $login = $_COOKIE['logged_user'];
                        $result = R::find('bars', 'login = ?', array("$login"));
                        foreach($result as $key => $value){
                      ?>
                  <div class="col-lg-6 col-sm-12">
              <div class="payment-main-block-left">
                <h4>Добавление заведения</h4>

                <span>Картинка</span>
                   







                    <?php
                      if(isset($_POST['upload'])){
                        $uploaddir = 'template/img/institutions/';
                      // это папка, в которую будет загружаться картинка
                      $apend= $value['id'].'.jpg'; 
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
                           if ($size[0] < 5001 && $size[1]<5001) 
                           { 
                           // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
                           // echo "Файл загружен. Путь к файлу: <b>http:/yoursite.ru/".$uploadfile."</b>"; 
                            echo '<a style="color:green;">Фото успешно загружено!<a>';


                            // $login = $_COOKIE['logged_user'];
                            // $finde = R::findOne('bars', 'login = ?', array("$login"));
                            // $finde2 = R::load('bars', $finde->id);
                            // // $finde2->password = password_hash($password, PASSWORD_DEFAULT);
                            // // $finde2->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                            // $finde2->name = $_POST['name'];
                            // // $finde2->img = $uploadfile;
                            // $finde2->description = $_POST['description'];
                            // // $finde2->category_id = $_POST['category_id'];
                            // $finde2->type_of_zaved = $_POST['type_of_zaved'];
                            // $finde2->type_of_kitchen = $_POST['type_of_kitchen'];
                            // $finde2->address = $_POST['address'];
                            // $finde2->advantages = $_POST['advantages'];
                            // $finde2->phone = $_POST['phone'];
                            // $finde2->director = $_POST['director'];
                            // $finde2->login = $login;
                            // $finde2->stream = $_POST['stream'];
                            // R::store($finde2);
                            
                            
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
            $id = $value['id'];
                            $finde = R::findOne('bars', 'id = ?', array("$id"));
                            $finde2 = R::load('bars', $finde->id);
                            // $finde2->password = password_hash($password, PASSWORD_DEFAULT);
                            // $finde2->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                            
                            $finde2->img = $apend;
                            R::store($finde2);
          }
          ?>
        
        <form name="upload" action="/add" method="POST" ENCTYPE="multipart/form-data"> 
        Выберите фото для загрузки: 
        <input type="file" name="userfile">
        <button type="submit" name="upload" value="Загрузить">Загрузить </button>

                  <form method="post" action="/add">
                  
                    <span>Название заведения</span>
                    <input type="text" name="name" value="<?php if(isset($_COOKIE['logged_user'])) echo $value['name']; ?>" required/>
                  <!-- <h4>Картинка</h4> -->
                    







                    <span>Описание</span>
                    <textarea type="text" name="description" value="" style="width:350px; height: 100px;" required /><?php if(isset($_COOKIE['logged_user'])) echo $value['description']; ?></textarea>
                    <span>Вид заведения</span>
                    <input type="text" name="type_of_zaved" value="<?php if(isset($_COOKIE['logged_user'])) echo $value['type_of_zaved']; ?>" required />
                    <span>Тип кухни</span>
                    <input type="text" name="type_of_kitchen" value="<?php if(isset($_COOKIE['logged_user'])) echo $value['type_of_kitchen']; ?>" required />
                    <span>Адрес</span>
                    <input type="text" name="address" value="<?php if(isset($_COOKIE['logged_user'])) echo $value['address']; ?>" required />
                    <span>Достоинство заведения</span>
                    <input type="text" name="advantages" value="<?php if(isset($_COOKIE['logged_user'])) echo $value['advantages']; ?>" required />
                    <span>Телефон</span>
                    <input type="text" name="phone" value="<?php if(isset($_COOKIE['logged_user'])) echo $value['phone']; ?>" required />
                    <span>Директор</span>
                    <input type="text" name="director" value="<?php if(isset($_COOKIE['logged_user'])) echo $value['director']; ?>" required />
                    <br>
                    <span>Это поле для кода от стрима</span>
                    <textarea type="text" name="stream" value="" style="width:300px; height: 100px;" required /><?php if(isset($_COOKIE['logged_user'])) echo $value['stream']; ?></textarea>
                    <br>
                    <!-- <button type="submit" name="send" class="btn">Сохранить</button> -->
                    <button type="submit" name="save" value="Сохранить">Сохранить </button>
                </form>
                </div>
            </div>


                  <?php
              //  // }


              }


                  ?>
                  
              
            
          </div>
        </div>
      </div>      
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




<?php
  // include ROOT.'/views/layouts/sectionpodder.php';
?>