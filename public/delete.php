<?php
include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook",
    "table" => "ved"
];
$table = new W1020\Table($config);
$table->del($_GET['nomer']);
header("Location: index.php");