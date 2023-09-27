<?php 
    $host = "localhost";
    $user = "momo";
    $password = "123456";
    $database = "pdo_posts";

    $dsn = "mysql:host=".$host.";dbname=".$database;

    //Create PDO instance
    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    //PDO QUERY
    $stmt = $pdo->query("SELECT * FROM post");

    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     echo $row['title']."<br>";
    // }
    // while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    //     echo $row->title."<br>";
    // }

    //Prepared Statements(prepare & execute)

    //UNSAFE
    $sql = "SELECT * FROM post WHERE author = '$author'";


?>