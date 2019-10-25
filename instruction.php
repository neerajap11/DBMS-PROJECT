<?php
session_start();
$_SESSION['att']=1;
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "exam";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->error_connect){
    die("connection error");
}
$sql="SELECT * FROM QUESTIONS";
$result=$conn->query($sql);
$row=mysqli_num_rows($result); 
$_SESSION['total']=$row;
$i=1;
while($i<=$_SESSION['total'])
{
	$_SESSION['qatt'][$i]=0;
	$_SESSION['mark'][$i]=0;
	$i=$i+1;
}
$_SESSION["begin"]=0;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>INSTRUCTIONS</title>
</head>
<br><br><br><br><br>
<h1 style="text-align:center;font-size:280%;font-family:Georgia, serif;"> INSTRUCTIONS</h1>
<div id="ins">
<p style="text-align:center;">
1.The student may not use his or her textbook, course notes, or receive help from a proctor or any other outside source.<br>
2.Students must complete the 10-question multiple-choice exam within the 10-minute time frame allotted for the exam.<br>
3.Each correct answer gives you 1 mark. No negative marking.<br>
4.Cheating in exam hall is strictly punishable.<br>
5.Malpractices such as trying to leave the browser midway will lead to automatic exam submission with zero marks.<br>
</p>
</div>
<br>

<form action="test.php" method="POST">
<div style="text-align:center;font-size:50px">
  
<input type="submit" name="begin" value="BEGIN" id="check">

</div>
</form>

</body>

</html>
