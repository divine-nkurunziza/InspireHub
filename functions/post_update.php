<?php
include_once (dirname(__FILE__)).'/../controllers/post_controller.php';

// check if button is clicked
if(isset($_POST['update'])){
    // Grab form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $type = $_POST['type'];
    $body = $_POST['body'];

    // update post if empty
    $updatedPost = updatePost($id, $title, $type ,$body);
    if($updatedPost){
        header("location: ../post.php?id=".$id);
    }else{
        header("location: ../view/post_update.php?id=".$id);
    }
}

