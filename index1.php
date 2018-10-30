<?php 
session_start();

if(session_id()=='' || !isset($_SESSION['login']))
{

  header("Location:login.php");
}
?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Advertisements</title>
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
.lef
{
margin-left:1300px;
background-color:rgba(0,0,0,0.5);
width:150px;
height:40px;
border-radius:3px;
padding:10px;
}
table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width: 70%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

.column1 {
  width: 260px;
  padding-left: 40px;
}

.column2 {
  width: 160px;
}

.column3 {
  width: 245px;
}

.column4 {
  width: 110px;
  text-align: right;
}

.column5 {
  width: 170px;
  text-align: right;
}

.column6 {
  width: 222px;
  text-align: right;
  padding-right: 62px;
}


@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 24px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: OpenSans-Regular;
    font-size: 14px;
    color: #999999;
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }


  .column4,
  .column5,
  .column6 {
    text-align: left;
  }

  .column4,
  .column5,
  .column6,
  .column1,
  .column2,
  .column3 {
    width: 100%;
  }

  tbody tr {
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .container-table100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}
.blah
{
margin-left:300px;
text-align:center;
font-family: Arial;
}
</style>
</head>

<body>
  <!-- Main container -->
  <div class="blah">
<h1>Hi
 <?php
 $con=mysqli_connect("localhost","root","qwerty123");
  if(!$con)
  {
    die("connection failed".mysqli_error($con));
  }
  mysqli_select_db($con,"DBMS_PROJECT"); 
$id=$_SESSION['login'];

$r="SELECT * FROM USER WHERE '$id'= NITCMailId";
$q=mysqli_query($con,$r);

$row=mysqli_fetch_array($q);


echo $row["Name"];
 ?>
 </h1>
</div>

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
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">SELL</a></li>
					<li  ><a class="menu__link"  href="changep.php">CHANGE PASSWORD</a></li>
          <li class="menu__item" role="menuitem">
				</ul>
				
				<!-- Submenu 2 -->
				<ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Fruits">
					<li class="menu__item" role="menuitem"><a class="menu__link" href="index2.php">NEW-AD</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" href="index3.php">DELETE AD</a></li>
				</ul>
			</div>
		</nav>
<div class="blah">
<div class="lef">
<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a>
</div>
</div>
		<div class="content new25">

<h1 align=center>BOOKS</h1>	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">		
<?php

  $con=mysqli_connect("localhost","root","qwerty123");
  if(!$con)
  {
    die("connection failed".mysqli_error($con));
  }
  mysqli_select_db($con,"DBMS_PROJECT");
  $sql7=$_SESSION['login'];
  $qry="select * from `BOOKS` ";
  $res=mysqli_query($con,$qry);
  
    echo "<table align='center'>";
    echo "<tr><th>ProductName</th><th>Condition</th><th>Price</th><th>Year Of Purchase</th><th>Author(s)</th><th>Seller MOB.No</th><th>Seller Mail Id</th></tr>";
    
    while($rr=mysqli_fetch_array($res))
    {
    echo "<tr><td>";
    echo $rr['name'];
    echo "</td><td>";
    echo $rr['condition_aka_state'];
    echo "</td><td>";
    echo $rr['price'];
    echo "</td><td>";
    echo $rr['yearofpurchase'];
    echo "</td><td>";
    echo $rr['author'];
    echo "</td>";
     $x=$rr['bookid'];
   $sql= "SELECT * FROM PRODUCT WHERE '$x'=ProductId";
    $res1=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res1);
$r=$row['SellerId'];
$sql= "SELECT * FROM USER WHERE NITCMailId = '$r'";
  $res2=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res2);
echo "<td>";
echo $row['PhoneNo'];
echo "</td><td>";
echo $row['NITCMailId'];
    echo "</td></tr>";
    }
    echo "</table>";
    $qry="select * from `Equipment` ";
  $res=mysqli_query($con,$qry);
  echo "<h1 align=center>EQUIPMENTS</h1>";
    echo "<table align='center'>";
    echo "<tr><th>ProductName</th><th>Condition</th><th>Price</th><th>Year of purchase</th><th>Seller MOB.No</th><th>Seller Mail Id</th></tr>";
    
    while($rr=mysqli_fetch_array($res))
    {
    echo "<tr><td>";
    echo $rr['Name'];
    echo "</td><td>";
    echo $rr['condition_aka_state'];
    echo "</td><td>";
    echo $rr['Price'];
    echo "</td><td>";
    echo $rr['Year Of Purchase'];
    echo "</td>";
     $x=$rr['Equipment_id'];
   $sql= "SELECT * FROM PRODUCT WHERE '$x'=ProductId";
    $res1=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res1);
$r=$row['SellerId'];
$sql= "SELECT * FROM USER WHERE NITCMailId = '$r'";
  $res2=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res2);
echo "<td>";
echo $row['PhoneNo'];
echo "</td><td>";
echo $row['NITCMailId'];
    echo "</td></tr>";
    }
    echo "</table>";
?>

			</div>
			</div>
		</div>
	</div>

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
