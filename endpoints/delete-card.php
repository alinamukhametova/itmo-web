<?php
include("../config/bd.php");

$id = $_POST["id"];

$link = $mysqli->prepare("DELETE FROM card WHERE id = ?");
$link->bind_param("d", $id);

$link->execute();

print json_encode($id);
die();

