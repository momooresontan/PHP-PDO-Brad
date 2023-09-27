<?php 
    $host = "localhost";
    $user = "momo";
    $password = "123456";
    $database = "pdo_posts";

    $dsn = "mysql:host=".$host.";dbname=".$database;

    //Create PDO instance
    $pdo = new PDO($dsn, $user, $password);

    //PDO QUERY
    $stmt = $pdo->query("SELECT * FROM post");
?>