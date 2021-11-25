

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inspire Hub - Ready to write? </title>
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Get ready to write!</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Join the Community</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="assets/img/iNSPIRE Hub logo.png" alt="">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">Ready to write?</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <?php
                //connect to database class
                include_once (dirname(__FILE__)).'/./controllers/post_controller.php';

                $posts = getPosts();
                ?>

<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="functions/post_create.php">
        <div class="mb-3">
            <label class="form-label" for="titleOfYourPiece">Title of your Piece</label>
            <input class="form-control" id="titleOfYourPiece" type="text" name = "title" placeholder="Title of your Piece" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="titleOfYourPiece:required">Title of your Piece is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="typeOfWriting">Select the type of writing</label>
            <select class="form-select" id="typeOfWriting" aria-label="Type of writing" name = "type">
                <option value="Poem">Poem</option>
                <option value="Short Story">Short Story</option>
                <option value="Article Review">Article Review</option>
                <option value="Essay">Essay</option>
                <option value="Script">Script</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="goAheadAndPourYourHeartOut">Go ahead and pour your heart out!</label>
            <textarea class="form-control" id="goAheadAndPourYourHeartOut" type="text" name = "body" placeholder="Go ahead and pour your heart out!" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="goAheadAndPourYourHeartOut:required">Go ahead and pour your heart out! is required.</div>
        </div>
       
        </div>
        
        <div class="d-grid">
            <button class="btn btn-primary btn-lg abled" id="submitButton" type="submit" name="submit">Post</button>
        </div>
    </form>
    <div>
            <h3 class="mt-5">Find Your Posts Below :)</h3>
            <ul >
                <?php
                    foreach($posts as $key => $value){
                ?>
                        <li > <?= $value['title'] ?>  
                            <a href="./functions/post_delete.php?id=<?= $value['id'] ?>" class="btn btn-primary btn-custom" onclick = "return confirm(' Are you sure you want to go ahead with DELETE?' )"> Delete</a> 
                           
                            <a href="./post_update.php?id=<?= $value['id'] ?>" class="btn btn-primary btn-custom" onclick = "return confirm(' Are you sure you want to go ahead with UPDATE?' )"> Update</a> 
                            <a href="./post.php?id=<?= $value['id'] ?>" class="btn btn-primary btn-custom">View</a>
                        </li>
                <?php
                    }
                ?>
            </ul>
            
        </div>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 
</html>