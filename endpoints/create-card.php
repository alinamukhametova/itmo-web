<?php
include("../config/bd.php");

$name = $_POST["name"];
$cost = $_POST["cost"];
$picture_url = $_POST["picture_url"];

$set = $mysqli->prepare("INSERT INTO card (name, cost, picture_url) VALUES(?, ?, ?)");
$set->bind_param("sds", $name, $cost, $picture_url);
$set->execute();
$id = mysqli_insert_id($mysqli);

header("Location: /itmo-web/index.php?id=" . $id);
die();
