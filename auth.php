<?php 
	$login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
include 'connect.php';
$password=md5($pass."zff;548sf");

	//$mysql=new mysqli("127.0.0.1','root','','messenger");

	$result=$connect->query("SELECT * FROM `user` WHERE `password`='$password' AND `mail`= '$login' OR `phone_number`= '$login' ");

	$user=$result->fetch_assoc();
	if ($user==0) {
		echo "Користувача не найдено";
		exit();
	}

	setcookie('user', $user['mail'], time()+3600, "/");

	$connect->close();

	header('Location: chat.php');
