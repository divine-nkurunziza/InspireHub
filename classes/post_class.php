<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class Post extends db_connection {
    public function create($title, $type ,$body){
        // sql query
        $sql = "INSERT INTO `posts`(`title`,`type`, `body`) VALUES ('$title','$type','$body')";

        // run query
        return $this->db_query($sql);
    }

    public function getPosts(){
        //sql query
        $sql = "SELECT * FROM `posts`";

        //run query
        return $this->db_query($sql);
    }

    public function getSinglePost($id){
        // sql query
        $sql = "SELECT * FROM `posts` WHERE `id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function update($id, $title, $type, $body){
        // sql query
        $sql = "UPDATE `posts` SET `title`='$title',`type` = '$type',`body`='$body' WHERE `id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function delete($id){
        // sql query
        $sql = "DELETE FROM `posts` WHERE `id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    
}

?>