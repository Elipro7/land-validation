<?php
require_once('root/process.php');
$email = $_SESSION['email'];
$user_id = $_SESSION['user_id'];
$dbh->query("UPDATE users SET token = '' WHERE user_id = '$user_id'  ");
unset($_SESSION['user_id']);
session_destroy();
redirect_page(SITE_URL.'/login');


?>