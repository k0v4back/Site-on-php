<?php 

// $login = $_COOKIE['logged_user'];
// echo $login;
include ROOT.'/views/layouts/cookie.php';
$login2 = login();
echo $login2;

$hash = sha1($_POST['notification_type'].'&'.
$_POST['operation_id'].'&'.
$_POST['amount'].'&'.
$_POST['currency'].'&'.
$_POST['datetime'].'&'.
$_POST['sender'].'&'.
$_POST['codepro'].'&'.
'Yb8qk12WMBAD7KHwbVmWZTXi'.'&'.
$_POST['label']);

if ( $_POST['sha1_hash'] != $hash or $_POST['codepro'] === true or $_POST['unaccepted'] === true ){
	exit('error');
}else{	

	$payment = R::dispense('payment');
	$payment->time = $_POST['datetime'];
	$payment->sum = $_POST['amount'];
	$payment->operation_id = $_POST['operation_id'];
	$payment->login = $_POST['label'];
	$payment->datetime = $_POST['datetime'];
	$payment->sender = $_POST['sender'];
	R::store($payment);


	$bars = R::dispense('bars');
	$bars->name = '';
	$bars->img = '';
	$bars->description = '';
	$bars->type_of_zaved = '';
	$bars->type_of_kitchen = '';
	$bars->address = '';
	$bars->advantages = '';
	$bars->phone = '';
	$bars->director = '';
	$bars->login = $_POST['label'];
	$bars->stream = '';
	R::store($bars);

}


?>


