<?php
header('Content-Type: application/json; charset=utf-8');
include("../config/bd.php");

$result = $mysqli->query("SELECT * FROM card");

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows,JSON_UNESCAPED_UNICODE);
die();