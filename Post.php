<?php
include_once (dirname(__FILE__)).'../controllers/post_controller.php';

if(isset($_GET['id'])){
    $post = getSinglePost($_GET['id']);
    if(empty($post)){
      header("location: ../index.php");
    }
}else{
    
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inspire Hub - Home </title>
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./get_ready_to_write.php">Get ready to write!</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./index.php">Join the Community</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<br><br>
<section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Your stories are here!</h2>
                </div>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5"></h5>
            
            <h4><label form="name" class="form-label">Title: </label></h4>
            <p style="mt-5"><?= $post['title'] ?></p>

            <h4> <label class="form-label" for="typeOfWriting">Writing Type: </label></h4>
             <p style="mt-5"><?= $post['type'] ?></p>

            <h4><label for="body" class="form-label">Body:</label></h4>
            <p style="mt-5"><?= $post['body'] ?></p>
            <a href="./functions/post_delete.php?id=<?= $post['id'] ?>" class="btn btn-danger btn-custom" onclick = "return confirm(' Are you sure you want to go ahead with DELETE?' )"> Delete</a> 
            <a href="./post_update.php?id=<?= $post['id'] ?>" class="btn btn-secondary btn-custom"> Update</a> 
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
