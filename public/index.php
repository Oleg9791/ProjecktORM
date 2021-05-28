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
if (!empty($_POST)) {
    $table->ins($_POST);
    header("Location: ?");
}
$map = $table->get();
//print_r($table);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<table class="table table-success table-striped">

    <?php

    echo "<th>fio</th><th>zp</th><th>delete</th><th>edit</th>";
    foreach ($map as $value) {
        echo "<tr><td>$value[fio]</td><td>$value[zp]</td><td><a href='delete.php?nomer=$value[nomer]'>❌</a></td><td><a href='update.php?nomer=$value[nomer]'>✏️</a></td></tr>";
    }
    ?>
</table>

<form action="?" method="post">
    <textarea class="form-control" name="fio">
    </textarea>
    <input class="form-control" type="text" name="zp">
    <input class="form-control" type="submit" value="OK">
</form>

</body>
</html>