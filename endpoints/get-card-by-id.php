<?php
header('Content-Type: application/json; charset=utf-8');
include("../config/bd.php");

$con = $mysqli->prepare("SELECT * FROM card WHERE id = ?");
$con->bind_param("d", $_GET["id"]);
$con->execute();
$res = $con->get_result()->fetch_assoc();

print json_encode($res,JSON_UNESCAPED_UNICODE);
die();