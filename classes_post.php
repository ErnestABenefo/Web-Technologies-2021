<?php
 require("connection.php")  

 class Posr extends Database {

    public function create($title, $body){
        $query = "INSERT INTO `posts` (`title`, `body`) VALUES ('$title`,`body`)";

        return $this->run($query);
    }

 }