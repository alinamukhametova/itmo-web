<?php
header('Content-Type: application/json; charset=utf-8');
include("../config/bd.php");

if(empty($_GET["id"])){
    print json_encode(array('error' => "id is empty"), JSON_UNESCAPED_UNICODE);
    die();
}

$con = $mysqli->prepare("SELECT * FROM card WHERE id = ?");
$con->bind_param("d", $_GET["id"]);
$con->execute();
$res = $con->get_result()->fetch_assoc();

print json_encode($res,JSON_UNESCAPED_UNICODE);
die();