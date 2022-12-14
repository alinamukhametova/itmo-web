<?php
include("../config/bd.php");

$id = $_POST["id"];
$name = $_POST["name"];
$cost = $_POST["cost"];
$picture_url = $_POST["picture_url"];

$set = $mysqli->prepare("UPDATE card SET name = ?, cost = ?, picture_url = ? WHERE id = ?");
$set->bind_param("sdss", $name, $cost, $picture_url,$id);

$set->execute();

header("Location: /itmo-web/index.php?id=" . $id);
die();
