<?php
include 'connect.php';
$result = array();

$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
/*$search=filter_var(trim($_POST['search']),FILTER_SANITIZE_STRING);*/
$search = isset($_POST['search']) ? $_POST['search']: null;
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
//$result=$connect->query("SELECT * FROM `user` WHERE `first_name`= '$search' OR `last_name`= '$search' OR `phone_number`= '$search' OR `mail`= '$search'");
/*$result=$connect->query("SELECT * FROM `user` WHERE `first_name` LIKE '%$search%'");*/
/*$result = $connect->query("SELECT * FROM users LIKE '%$search%'; ");*/

$items = $connect->query("SELECT * FROM users WHERE first_name LIKE %$search% /*WHERE from_users_id = 1*/;");
/*$user=$result->fetch_assoc();*/
/*$items = $connect->query("SELECT * FROM users LIKE '%$search%'");*/ /*$items = $connect->query("SELECT * FROM `user` WHERE `id`>" .$start);*/
/*if ($user==null) {
    echo "Користувача не найдено";
    exit();
} else{
    echo $user["last_name"]."  ".$user["first_name"]."  ".$user["mail"]."<br>";
}*/
while ($row=$items->fetch_assoc()){
    $result['items'][]=$row;
}
//print message
/*$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $connect->query("SELECT * FROM `user` WHERE `id`>" .$start);
while ($row=$items->fetch_assoc()){
    $result['items'][]=$row;
}*/
/*
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $connect->query("SELECT * FROM `user` WHERE `last_name` = '$user'");
while ($row=$items->fetch_assoc()){

    echo $row["last_name"]."  ".$row["first_name"]."  ".$row["mail"]."<br>";
}*/
$connect->close();
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($result);
//header('Location: search_users.php');

/*if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
        echo $row["last_name"]."  ".$row["first_name"]."  ".$row["mail"]."<br>";
    }
} else {
    echo "0 records";
}*/



