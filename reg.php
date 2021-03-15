<?php
session_start();

$first_name=filter_var(trim($_POST['first_name']),FILTER_SANITIZE_STRING);
$last_name=filter_var(trim($_POST['last_name']),FILTER_SANITIZE_STRING);
$phone_number=filter_var(trim($_POST['phone_number']),FILTER_SANITIZE_STRING);
$mail=filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
$password=filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$password2=filter_var(trim($_POST['password2']),FILTER_SANITIZE_STRING);

if(mb_strlen($first_name)<5 || mb_strlen($first_name)>50){
    echo "Недоступна довжина first name";
    exit();
}
if(mb_strlen($last_name)<3 || mb_strlen($last_name)>50){
    echo "Недоступна довжина last name";
    exit();
}
if(mb_strlen($phone_number)<9 || mb_strlen($phone_number)>13){
    echo "Недоступна довжина phone number (від 9 до 13 символів)";
    exit();
}
if(mb_strlen($mail)<6 || mb_strlen($mail)>30){
    echo "Недоступна довжина mail (від 6 до 30 символів)";
    exit();
}
if(mb_strlen($password)<6 || mb_strlen($password)>15){
    echo "Недоступна довжина паролю (від 6 до 15 символів)";
    exit();
}
if ($password!=$password2){array_push($errors,"Password do not match")}

$password=md5($password."zff;548sf");


$connect = mysqli_connect('127.0.0.1','root','', 'messenger');

if (!$connect) {
    echo "Failed to connect to MySQL: ";
    exit();
}
$query = "INSERT INTO `user` (`first_name`, `last_name`, `phone_number`, `mail`, `password`) VALUES ('$first_name', '$last_name', '$mail', '$phone_number', '$password')";
mysqli_query($connect, $query);

$connect->close();

header("Location: chat.php");
else{
    $_SESSION['pass2']='різні паролі';
    header('Location: register.php');
}