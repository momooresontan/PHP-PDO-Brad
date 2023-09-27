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
    //$sql = "SELECT * FROM post WHERE author = '$author'";

    //FETCH MULTIPLE POSTS
    $author = "Murray";
    $is_published = true;

    //Positional Params
    // $sql = "SELECT * FROM post WHERE author = ?";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();

    //Named Params
    $sql = "SELECT * FROM post WHERE author = :author";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["author" => $author]);
    $posts = $stmt->fetchAll();

    //var_dump($posts);
    foreach($posts as $post){
        echo $post->title."<br>";
    }
?>