<?php 

  $con = mysqli_connect("localhost:3307","root","munna2755", "vtc") or die(mysql_error());
 //mysqli_select_db('vtc') or die(mysql_error());

 $regex="/^[789][0-9]{9}$/";
  $d=strip_tags(mysqli_real_escape_string($con, $_POST['name']));
  $b=strip_tags(mysqli_real_escape_string($con, $_POST['age']));
  $a=strip_tags(mysqli_real_escape_string($con, $_POST['school']));

$c=strip_tags(mysqli_real_escape_string($con, $_POST['class']));

$e=strip_tags(mysqli_real_escape_string($con, $_POST['address']));
$f=strip_tags(mysqli_real_escape_string($con, $_POST['city']));
$g=strip_tags(mysqli_real_escape_string($con, $_POST['aadhar']));
$h=strip_tags(mysqli_real_escape_string($con, $_POST['bpl']));
$i=strip_tags(mysqli_real_escape_string($con, $_POST['ncl']));
session_start();
$g = $_SESSION['user'];
$sql = "SELECT MonthlyFee FROM registeredSchools WHERE PIN = '$a'";
$result=mysqli_query($con , $sql);
$row = mysqli_fetch_row($result);
$target_Path = "images/";
$filename=$_FILES['file']['name'];
$target_Path = $target_Path.basename( $_FILES['file']['name'] );
if (!move_uploaded_file( $_FILES['file']['tmp_name'], $target_Path ))
	echo "pic not uploaded";
$sql = "INSERT INTO beneficiaries (aadharNum, bplNum, nclNum, Name, Age, School, Class, Address, Fee, isPaid, requester,City, Contributor, dp) VALUES('$g', '$h', '$i', '$d','$b','$a','$c','$e','$row[0]','0', '$g','$f', NULL, '$filename');";
if(!mysqli_query($con , $sql))
	echo mysqli_error($con);
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Flower Store | Home</title>
</head>
<body>
<style type="text/css"> body {background-image: url("bk.jpg");
background-color: #cccccc;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #8E44AD;
	
}

li {
    float: left;
	width: 200px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

 </style>

<center>




<div style="padding-top:20px;padding-right:50px;">
<a href="login.php"><span style="float:right;border-radius:5px;color:black;font-family:candara;font-size:1.2em;">SIGNUP/LOGIN!</span></a ></div>
<p style="clear:both;"></p>
<br><br>
<ul>
  <li><a href="requests.php">Home</a></li>
  <li><a href="raiseRequest.php">Raise a Request</a></li>
  <li><a href="myRequests.php">My Requests</a></li>
  <li><a href="myContributions.php">My Contributions</a></li>
  
  <li><a href="consumersprofile.php?id=<?php session_start(); $user = $_SESSION['user']; echo $user; ?>">My Profile</a></li>
</ul>
<br> <br>
<div style="padding-right:50px;padding-left:50px;font-family:candara;font-size:1.2em;text-align:left font-weight: normal"">
<img src="tick.png" style="width: 100px; height: 100px;">
<p> Beneficiary Added Successfully </p>
</div>
</center>
</body>
</html>