<?php
header('Content-Type: application/json; charset=utf-8');
include("../config/bd.php");

$id = $_POST["id"];

if(empty($id)){
    print json_encode(array('error' => "Введите ID товара, который хотите удалить"), JSON_UNESCAPED_UNICODE);
    die();
}

$link = $mysqli->prepare("DELETE FROM card WHERE id = ?");
$link->bind_param("d", $id);

$link->execute();

print json_encode($id);
die();

