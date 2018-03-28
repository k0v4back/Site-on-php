
						<!-- Start php code for section Contact Us -->
						
						<?php 

					        require 'phpmailer/PHPMailerAutoload.php';

					        $mail = new PHPMailer;

					        $mail->isSMTP();


					        if(isset($_POST['send'])){
					          $from = $_POST['email'];
					          $name = $_POST['name'];
					          $message = $_POST['message'];
					          $email = $_POST['email'];
					          $subject = $_POST['subject'];


					          //Данные для подключения к smtp 
					          //ВСЕ ЭТИ ДАННЫЕ БУДУТ ПРЕДОСТАВЛЕНЫ ХОСТИНГОМ В РАЗДЕЛЕ 'ПОЧТА'
					          $mail->Host = 'grizzlyoffical.ru'; //тут надо будет прописать smtp
					          $mail->SMTPAuth = true;
					          $mail->Username = 'admin@grizzlyoffical.ru';//Логин от вышей почты (туду куда будут приходить )
					          $mail->Password = 'grizzlyoffical'; //Пароль от вышей почты
					          $mail->SMTPSecure = 'ssl';
					          $mail->Port = '465';


					          //Заголовочная инфа (от кого и т.д)
					          $mail->CharSet = 'UTF-8';
					          $mail->From = $from;
					          $mail->FromName = $name;
					          //Инфа на кому будет отправлено письмо
					          $mail->AddAddress('admin@grizzlyoffical.ru', 'Артём');//1-адрес кому будет отправлено письмо, 2-имя(не обязательно)

					          $mail->isHTML(true);//В формате txt или html


					          //Параметры письма (тема, текст)
					          $mail->Subject = $subject;
					          $mail->Body = $message.'<br>'.'Имя - '.$name;
					          $mail->AltBody = $message;//Альтернативный показ письма. НУжно для того если текст письма не показаля в html то покажется в txt

					          if( $mail->send() ){
					            ?>
       								<script> alert('Письмо успешно отправлено!');</script> 
    							<?php
					          }else{
					            ?>
       								<script> alert('Возникла ошибка, подробнее: ');</script> 
    							<?php
					            echo $mail->ErrorInfo;//выводит код ошибки(для отладки)
					          }

					        }

					      ?>

						<!-- Finish php code for section Contact Us -->