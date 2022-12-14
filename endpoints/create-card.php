<?php
header('Content-Type: application/json; charset=utf-8');
include("../config/bd.php");

$name = $_POST["name"];
$cost = $_POST["cost"];
$picture_url = $_POST["picture_url"];

if(empty($name)){
    echo json_encode(array('error' => "Укажите название товара"), JSON_UNESCAPED_UNICODE);
    die();
}

if($cost <= 0){
    echo json_encode(array('error' => "Цена указана некорректно"), JSON_UNESCAPED_UNICODE);
    die();
}

$set = $mysqli->prepare("INSERT INTO card (name, cost, picture_url) VALUES(?, ?, ?)");
$set->bind_param("sds", $name, $cost, $picture_url);
$set->execute();
$id = mysqli_insert_id($mysqli);

print json_encode($id);
die();
