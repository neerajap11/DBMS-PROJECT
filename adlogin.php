<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
.loginhere{
	margin-top:0px;
	background-color:black;
	color:white;
	width:100%;
	height:60px;
	font-size:30px;
	padding-left:1500px;
}
.loginhere-link{
	color:white;
	font-size: 30px;
}
</style>
<body>
	<p class="loginhere">
                        HOME ? <a href="index.php" class="loginhere-link">HOME</a>
                    </p>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<h5>PC: Naveen Babu</h5>
					<img src="images/blah.jpg" alt="IMG">

				</div>


				<form class="login100-form validate-form" action="adlogin.php" method="POST" id="signup-form">
                                        <br><br><br>
					<span class="login100-form-title">
						ADMIN LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="uname" placeholder="Email-Id">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="psw" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<?php

function logins(){
$servername = "localhost";
$user = "root";
$pass = "qwerty123";
$dbname="DBMS_PROJECT";

$conn = new mysqli($servername,$user,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id=$_POST["uname"];
$password=$_POST["psw"];


  $sql= "SELECT * FROM ADMIN WHERE '$id'= username and '$password'=password";
      $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        
    while($row=$result->fetch_assoc()) 
        {

      
        //$s1="UPDATE Security SET gate='$gate' WHERE '$id'=SecurityID";
        //if($conn->query($s1) === TRUE) ;
          ;   
        //else;
          
          }
    $_SESSION['login']=$_POST['uname'];

    header("Location:admindel.php");
    }
    else
          echo '<script> alert("auth failed. Try again")</script>';
      
$conn->close();
}
if(isset($_POST['login']))
{
   logins();

} 
?>

</body>
</html>
