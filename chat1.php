<?php
include 'connect.php';
$result = array();
$message = isset($_POST['message']) ? $_POST['message']: null;
$from = isset($_POST['from']) ? $_POST['from']: null;
//var_dump($message . ' | ' . $from);
if (!empty($message) && !empty($from)){
    $sql = "INSERT INTO `chat` (`message`,`from`) VALUES ('".$message."','".$from."')";
    $result['send_status'] = $connect->query($sql);
}
/*if (!empty($message) && !empty($from)){
    $sql = "INSERT INTO `chats` (`text`,`from_user_id`,`list_chat_id`) VALUES ('".$message."','".$from."')";
    $result['send_status'] = $db->query($sql);
}*/
//print message
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
/*$items = $db->query("SELECT * FROM `chat` WHERE `id`>" .$start);*/
$items = $connect->query("SELECT * FROM chats LEFT JOIN users ON users.id = from_user_id WHERE list_chat_id = 1;");
/*$items = $db->query("SELECT users.name, chats.text FROM chats LEFT JOIN users ON users.id = from_user_id WHERE list_chat_id = 1;");*/
while ($row=$items->fetch_assoc()){
    $result['items'][]=$row;
}
$connect->close();
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($result);
