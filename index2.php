<?php 
session_start();

if(session_id()=='' || !isset($_SESSION['login']))
{

  header("Location:login.php");
}
?><!DOCTYPE html>
<html lang="en" class="no-js">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NEW AD</title>
	<meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
	<meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="css/organicfoodicons.css" />
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
<style>


.lef
{
margin-left:1300px;
background-color:rgba(0,0,0,0.5);
width:150px;
height:40px;
border-radius:3px;
padding:10px;
}
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
.new1
{
    border-collapse: collapse;
 
}
input
{
width:300px;
height:40px;
}
select
{
width:300px;
height:40px;
 
}
.cancelbtn {
    width: 150px;
    padding: 10px 18px;
    background-color: rgba(255,255,255,0.5);
    border-radius:10px;
}
button:hover {
    opacity: 0.8;
}
form {border: 3px solid #f1f1f1;
background-color:rgba(0,0,0,0.3);
 width:50%;
margin-left:400px;
height:500px;
z-index:5px;
padding:40px;
}
.new23
{
text-align:center;
}
table {
    border-collapse: collapse;
    width: 50%;
    background-color:black;
color:white;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:hover {background-color:#f5f5f5;}

</style>
</head>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<div class=" "></div>
			</div>
			<div class="bp-header__main">
				
	
			</div>
		</header>
		<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
						<li  ><a class="menu__link"  href="index1.php">HOME</a></li>
						
					<li class="menu__item" role="menuitem">
				</ul>
				
			</div>
		</nav>
		<div class="content new23">

<div id="background" ></div>
<div class="lef">
<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a>
</div>
 <h1 align="center">NEW AD</h1> 
 <form action="index2.php" method="POST">   
  <div class="container">
     <select name="cat" id="drpdwn">
    <option value="Book">Book</option>
    <option value="Equipment">Equipment</option>
  </select>
     <script>
     $('#drpdwn').on('change',function(){
        if( $(this).val()==="Equipment"){
        $("#author").hide()
        }
        else{
        $("#author").show()
        }
    });
  </script>
<br>
<br>
  <div class="author" id="author">
    <input type="text" placeholder="Author" name="author" class="new1" >
      </div> 
      <br>

      <div class="Name">
    <input type="text" placeholder="Name of Equipment or Book "  class="new1" name="Item" required>
      </div> 
      <br>
      <div class="cond">
    <input type="text" placeholder="Good/Bad/Medium" name="Cond"  class="new1" required>
      </div> 
      <br>
  <div class="price">
    <input type="text" placeholder="Price(in Rupees)" name="price" class="new1" required>
      </div> 
<br>
      <div class="Yearofp">
    <input type="text" placeholder="Year Of Purchase" name="yop" class="new1" required>
      </div> 
      <br>
      <br>
      
    <button type="submit" name="newad" class="form-submit cancelbtn">Post Ad</button>
    
      <br>
</form>




 </div>


<?php
function fetchdata()
{
$servername = "localhost";
$user = "root";
$pass = "qwerty123";
$dbname="DBMS_PROJECT";

$conn = new mysqli($servername,$user,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
		
$category=$_POST["cat"];
$name=$_POST["Item"];
$cond=$_POST["Cond"];
$sellerid=$_SESSION['login'];
$price=$_POST["price"];
$author=$_POST["author"];
$yop=$_POST["yop"];
if($price>0 && ($yop<2019&&$yop>2000))
{
   $sql6= "SELECT * FROM PRODUCT";
  $result = $conn->query($sql6);
$bookid=$result->num_rows;    
while($bookid!=0)
{
  $row=mysqli_fetch_assoc($result);
  $bookid=$bookid-1;
}
$bookid=$row['ProductId']+1;
//$parentsno=$_POST["parentsno"];
if($category=="Book")
{

$sql9 = "INSERT INTO BOOKS VALUES ('$name','$author','$cond','$price','$bookid','$yop')"; 
if ($conn->query($sql9) === TRUE)
{
  echo "Succesfull";
}
else
  
  echo "failed";

}
if($category=="Equipment")
{

$sql9 = "INSERT INTO Equipment VALUES ('$bookid','$name','$cond','$yop','$price')"; 
if ($conn->query($sql9) === TRUE)
{
  echo "Succesfull";
}
else

  echo "failed";

}

$sql = "INSERT INTO PRODUCT VALUES ( '$name','$category','$cond','$sellerid','$bookid','$price')"; 
if ($conn->query($sql) === TRUE)
{
	echo "Succesfull";
}
else
	echo "failed";
  //  header("Location:index1.php");
    echo '<script>window.location.href="index1.php";</script>';

$conn->close();
}
else
{
	echo 'Sorry Invalid details';
}
}
if(isset($_POST['newad']))
{
   fetchdata();
} 
?>


		</div>

	</div>
	<!-- /view -->
	<script src="js/classie.js"></script>
	<script src="js/dummydata.js"></script>
	<script src="js/main.js"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
			closeMenuCtrl.focus();
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
			openMenuCtrl.focus();
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
			}, 700);
		}
	})();
	</script>
</body>

</html>
