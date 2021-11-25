<?php
//connect to post controller
include_once (dirname(__FILE__)).'/../controllers/form_controller.php';
include_once (dirname(__FILE__)).'/../controllers/post_controller.php';

$query = Keys();

if(isset($_POST['submit'])){
    // Grab form inputs
    $title = $_POST['title'];
    $type = $_POST['type'];
    $body = $_POST['body'];

    $user_id = $query['user_id'];

    // create post if not empty
    $newPost = createPost($title, $type,$body, $user_id);
    if($newPost){
        header("location: ../get_ready_to_write.php");
    }
}