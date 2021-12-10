<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "bms");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM posts";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['posts'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['body'];

        $sql = "INSERT INTO posts(title, body) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: postindex.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['P_ID'])){
        $id = $_REQUEST['P_ID'];
        $sql = "SELECT * FROM posts WHERE P_ID = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['P_ID'];

        $sql = "DELETE FROM posts WHERE P_ID = $id";
        mysqli_query($conn, $sql);

        header("Location: postindex.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['P_ID'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['body'];

        $sql = "UPDATE posts SET title = '$title', body = '$content' WHERE P_ID = $id";
        mysqli_query($conn, $sql);

        header("Location: postindex.php");
        exit();
    }

?>
