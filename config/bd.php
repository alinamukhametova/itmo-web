<?php
ini_set('display_errors', '1');

$mysqli = new mysqli("localhost", "root", "", "lab");

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    die();
}
