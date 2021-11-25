<?php 

include_once (dirname(__FILE__)).'/./controllers/form_controller.php';
                $connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

               if ($connection->connect_error) die($connection->connect_error);

$name_error="";
$psw_error="";

if(isset($_POST['register'])){
	$name=$_POST['name'];    
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm=$_POST['confimPass'];
		
	if(($password==$confirm) && preg_match("/^[a-zA-Z-' ]*$/",$name)){

		$values="INSERT INTO user_table( Name,username,email,password) VALUES ('$name','$username','$email','$password')";

	$insert=mysqli_query($connection,$values);
	if(!$insert){
                echo mysqli_error($connection);
                 }
                 
                 else{
					header("location: ./Login_form.php");
                 } 	
	}

	else if($password!=$confirm) {
		$psw_error="!! Passwords do not match";

		
	}
	else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
		$name_error = "!! Only letters and white space allowed for name";

	}
	              
}

?>

