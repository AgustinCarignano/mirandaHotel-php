<?php

$dsn = "mysql:host=localhost;port=3306;dbname=MirandaHotel;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("select * from rooms");

$statement->execute();

$roomsDB = $statement->fetchAll();

var_dump($roomsDB);
die();
