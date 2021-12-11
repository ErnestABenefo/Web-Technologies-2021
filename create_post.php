<?php
require_once (dirname(__FILE__)).'controller_post.php';

if(isset($_POST['submit'])){
    //Get form data

    $title = $_POST['title'];
    $body = $_POST['body'];

    //store in database
    newPost = create($title, $body);
    if($newPost){
        header("blog_index.php");
    }else{
        echo "something went wrong";
    }
}