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
    $author = "MoMo";
    $is_published = true;
    $id = 1;

    //Positional Params
    // $sql = "SELECT * FROM post WHERE author = ?";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();

    //Named Params
    // $sql = "SELECT * FROM post WHERE author = :author && is_published = :is_published";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(["author" => $author, "is_published" => $is_published]);
    // $posts = $stmt->fetchAll();

    //var_dump($posts);
    // foreach($posts as $post){
    //     echo $post->title."<br>";
    // }

    // FETCH SINGLE POST
    $sql = "SELECT * FROM post WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id" => $id]);
    $post = $stmt->fetch();

    echo $post->body."<br>";
?>