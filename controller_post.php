<?php
    require_once (dirname(__FILE__)).'classes_post.php';

//Function to create new post
    function create($title, $body){
        $post = new Post;

        $runQuery = $post->create($title, $body);


        if($runQuery){
            return $runQuery;
        }else{
            return false;
        }
        
    }  