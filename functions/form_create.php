<?php
//connect to post controller
include_once (dirname(__FILE__)).'/../controllers/form_controller.php';


if(isset($_POST['register'])){
    // Grab form inputs
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    
    // create post if not empty
    $newForm =  createForm ($name, $username ,$email, $password);
    if($newForm){
        header("location: ../Login_form.php");
    }
}

?>