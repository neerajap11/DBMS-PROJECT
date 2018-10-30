<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" href="css/style.css">

<style>

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
</style>
 </head>



<body>
  <div class="main new5" >
<br>
<br>
<br>

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="login.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">LOGIN</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="uname" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="psw" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                       <div class="form-group">
                            <input type="submit" name="login" id="submit" class="form-submit" value="login"/>
                        </div>
                    <p class="loginhere">
                        Don't have an account ? <a href="signup.php" class="loginhere-link">Signup here</a>
                    </p>
                    <p class="loginhere">
                         <a href="index.php" class="loginhere-link">GO HOME</a>
                    </p>
                    </form>

                </div>
            </div>
        </section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
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


  $sql= "SELECT * FROM USER WHERE '$id'= NITCMailId and MD5('$password')=Password";
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
    header("Location:index1.php");
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
