<?php 
	$login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$pass=md5($pass."zff;548sf");

	$mysql=new mysqli("127.0.0.1','root','root','register");
	
	$result=$mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `pass`='$pass'");

	$user=$result->fetch_assoc();
	if (count($user)==0) {
		echo "Користувача не найдено";
		exit();
	}

	setcookie('user', $user['name'], time()+3600, "/");

	$mysql->close();

	header("Loccation: /")
 ?>