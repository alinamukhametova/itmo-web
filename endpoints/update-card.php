<?php
header('Content-Type: application/json; charset=utf-8');
include("../config/bd.php");

$id = $_POST["id"];
$name = $_POST["name"];
$cost = $_POST["cost"];
$picture_url = $_POST["picture_url"];

if(empty($id)){
    print json_encode(array('error' => "id is empty"), JSON_UNESCAPED_UNICODE);
    die();
}

if(empty($name)){
    echo json_encode(array('error' => "Укажите название товара"), JSON_UNESCAPED_UNICODE);
    die();
}

if($cost <= 0){
    echo json_encode(array('error' => "Цена указана некорректно"), JSON_UNESCAPED_UNICODE);
    die();
}


$set = $mysqli->prepare("UPDATE card SET name = ?, cost = ?, picture_url = ? WHERE id = ?");
$set->bind_param("sdss", $name, $cost, $picture_url,$id);

$set->execute();

print json_encode($id);

die();
