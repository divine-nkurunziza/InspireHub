
<?php
include_once (dirname(__FILE__)).'../controllers/post_controller.php';

if(isset($_GET['id'])){
    $post = getSinglePost($_GET['id']);
}else{
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inspire Hub - Update </title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="css/heading.css">
        <link rel="stylesheet" href="css/body.css">
        
       
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="brandImage" src="assets/img/Inspire hub logo final.png" alt=""></a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="get_ready_to_write.php">Get ready to write!</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Join the Community</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="assets/img/iNSPIRE Hub logo.png" alt="">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">Ready to Update?</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
    
<div class="container px-5 my-5">
    
   
    <form method="POST" action="./functions/post_update.php">
        <div class="mb-3">
        <h4> <label for="name" class="form-label">Title: </label><h4>
        <input type="text" name="title" class="form-control" id="name" value="<?= $post['title'] ?>" required>
        </div>
        <div class="mb-3">
        <h4><label class="form-label" for="typeOfWriting">Writing Type: </label></h4>
         <input type="text" name="type" class="form-control" id="name" value="<?= $post['type'] ?>" required>
        </div>
        <div class="mb-3">
        <h4> <label for="body" class="form-label">Body:</label></h4>
            <textarea class="form-control" name="body" id="" cols="30" rows="10" required> <?= $post['body'] ?> </textarea>
        </div>
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <button type="submit" class="btn btn-primary" name="update">Submit</button>
    </form>
    </div>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 
</html>