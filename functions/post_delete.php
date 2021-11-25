<?php
//including the controller files
include_once (dirname(__FILE__)).'/../controllers/post_controller.php';



    if(isset($_GET['id'])){
        //using the deletePost function
        $deletePost = deletePost($_GET['id']);
        if($deletePost){
            header("location: ../get_ready_to_write.php");
        }else{
            return false;
        }
    }
   
    
    ?>



 
   

    

