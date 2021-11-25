
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

        <style>
          #log{
            background-color:#e78633 ;
          }
        </style>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="brandImage" src="assets/img/Inspire hub logo final.png" alt=""></a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../Signup_form.php">Get ready to write!</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php">Join the Community</a>
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
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Welcome back to Inspire Hub!</h2>
                </div>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5" id = 'log'>Sign In</h5>

            <?php
//connect to post controller
require ('./controllers/form_controller.php');





$connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

    if ($connection->connect_error) die($connection->connect_error);
    

if(isset($_POST['signIn'])){
    // Grab form inputs
    $em= $_POST['em'];
    $psw = $_POST['psw'];

    $sql = "SELECT * FROM `user_table`where email = '$em' limit 1";

    $result = mysqli_query($connection, $sql);
    if ($result){
        if ($result && mysqli_num_rows($result)> 0){
            $data = mysqli_fetch_ASSOC($result);
            if ( $data ['password'] === $psw){

                header("Location: get_ready_to_write.php");
                die;
            } 

        }

    echo '<h6 style = "color:red;">'."Invalid email or password provided". "</h6>";
    }
    
    }
    



   
   

?>

            <form action = " " method="POST">
              <div class="form-floating mb-3">
              
                <input type="email" class="form-control" id="floatingInput" placeholder="yourname@example.com" name = 'em'>
                <label for="floatingInput">Email address</label>
                
              </div>
              <div class="form-floating mb-3">
              
                <input type="password" class="form-control" id="floatingPassword" placeholder="Type your password" name = 'psw'>
                <label for="floatingPassword">Password</label>
                
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name = 'signIn' id = 'log'>Sign
                  in </button>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Sign in with Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
