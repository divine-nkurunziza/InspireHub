<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class Form extends db_connection {
    public function create($name, $username ,$email, $password){
        // sql query
        $sql = "INSERT INTO `user_table`(`name`,`username`, `email`, `password`) VALUES ('$name','$username','$email', '$password')";

        // run query
        return $this->db_query($sql);
    }

    public function foreignKey(){
        //sql query
        $sql = "SELECT * FROM `user_table` ORDER BY user_id DESC LIMIT 1";

        //run query
        return $this->db_query($sql);
    }

    public function signUp($email){
        // sql query
        $sql = "SELECT * FROM `user_table`where email = '$email' limit 1";
        echo $sql;

        // run query
        return $this->db_query($sql);
    }

    
}

?>