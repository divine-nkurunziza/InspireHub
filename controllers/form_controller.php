<?php
//connect to post class
include_once (dirname(__FILE__)).'/../classes/form_class.php';

// Inserting a new post
function createForm ($name, $username ,$email, $password){
    // Create new post object
    $form = new Form;

    // Run query
    $runQuery = $form->create($name, $username ,$email, $password);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function Keys(){
    // Create new post object
    $form = new Form;

    // Run query
    $runQuery = $form-> foreignKey();

    if($runQuery){
        $posts = array();
        while($record = $form->db_fetch()){
            $posts[] = $record;
        }
        return $posts;
    }else{
        return false;
    }
}

function signin($email){
    // Create new post object
    $form = new Form;

    // Run query
    $runQuery = $form->signUp($email);

    if($runQuery){

        $result = $form->db_fetch();
        if(!empty($result)){
            return $result;
        }else{
        echo "fail";
        }
        
    }else{
        return false;
    }

}



?>

