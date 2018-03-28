<?php
function login()
{
	// $login = $_COOKIE['logged_user'];
 //    return $login;





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

				return $uploadfile;





}
echo login();

?>