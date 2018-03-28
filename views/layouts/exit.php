<?php

// unset($_COOKIE['logged_user']);
// /$_COOKIE['logged_user'] = -1;
setcookie('logged_user', '', time() - 30);
//print_r($_COOKIE['logged_user']);
header("Location: /");
// if (!isset($_COOKIE['logged_user'])) {
// 	header("Location: /");
// }

?>