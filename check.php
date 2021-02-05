<?php 
	$login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	if(mb_strlen($login)<5 || mb_strlen($login)>50){
		echo "Недоступна довжина логіна";
		exit();
	}
	if(mb_strlen($name)<3 || mb_strlen($name)>50){
		echo "Недоступна довжина імені";
		exit();
	}
	if(mb_strlen($pass)<6 || mb_strlen($login)>15){
		echo "Недоступна довжина паролю (від 6 до 15 символів)";
		exit();
	}

	$pass=md5($pass."zff;548sf");

	//$mysql=new mysqli("localhost','root','','messenger");
	//$mysql->query("INSERT INTO `users`(`Id`, `Login`, `Password`, `Name`) VALUES('$login', '$pass', '$name')");

	$connect = mysqli_connect('127.0.0.1','root','', 'messenger');
	// Check connection
if (!$connect) {
  echo "Failed to connect to MySQL: ";
  exit();
}
$query = "INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')";
mysqli_query($connect, $query);

	$connect->close();

	header("Loccation: /")
 ?>