<?php
include 'connect.php';
/*include 'auth.php';
include 'index.php';*/

$result = array();

$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
/*$items = $connect->query("SELECT * FROM `list_chat` WHERE `id`>" .$start);*/
$items = $connect->query("SELECT * FROM list_chat LEFT JOIN users ON users.id = whom_users_id WHERE from_users_id = 1;");
/*$items = $connect->query("SELECT list_chat.id, users.last_name FROM list_chat LEFT JOIN users ON users.id = whom_users_id WHERE from_users_id = 1;");*/
/*SELECT users.name, chats.text FROM chats LEFT JOIN users ON users.id = from_user_id WHERE list_chat_id = 1;*/
while ($row=$items->fetch_assoc()){
    $result['items'][]=$row;
}

$connect->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);