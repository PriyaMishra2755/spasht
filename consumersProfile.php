<?php 

$emailid = json_encode($_GET['id']);
//$emailid = $user;
$con = mysqli_connect("localhost:3307","root","munna2755", "vtc") or die(mysql_error());
$sql = "SELECT * FROM consumers1 WHERE emailid = $emailid";
$result=mysqli_query($con , $sql);
$row = mysqli_fetch_row($result);
$sql = "SELECT * FROM beneficiaries WHERE requester = $emailid";
$result1=mysqli_query($con , $sql);
$Requests=mysqli_num_rows($result1);
$sql = "SELECT * FROM beneficiaries WHERE requester = $emailid and isPaid = 1";
$result1=mysqli_query($con , $sql);
$Fulfilled=mysqli_num_rows($result1);
$sql = "SELECT * FROM beneficiaries WHERE Contributor = $emailid";
$result1=mysqli_query($con , $sql);
$Contributions=mysqli_num_rows($result1);

 ?>
 <!DOCTYPE HTML>
<html>
<head>
<title>Profile | Home</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<script>
function myFunction(x) {
	if(x.classList.contains("fa-thumbs-down")) {
			<?php 
	$k = $row[7] - 1;
	$sql = "UPDATE consumers1 SET likes = '$k' WHERE emailid = $emailid";
$result1=mysqli_query($con , $sql);	
	?>  } else
	{
		<?php 
	$k = $row[7] + 1;
	$sql = "UPDATE consumers1 SET likes = '$k' WHERE emailid = $emailid";
$result1=mysqli_query($con , $sql);	
	?> }
	
    x.classList.toggle("fa-thumbs-down");
}
</script>
<style>
body {background-image: url("bk.jpg");
background-color: #cccccc;}
th {
	
font-weight: 900;
    color: #ffffff;
    background: #ea6153;
}


	
	.kids tr:nth-child(odd) {
    
}

.kids tr:nth-child(even) {
    
}

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
background-color: #4CAF50;}
.fa {
    font-size: 150px;
    cursor: pointer;
    user-select: none;
}

.fa:hover {
  color: darkblue;
}
</style>
</head>
<body>

<div style="padding-top:20px;padding-right:20px;float:right;">
<table>
<tr><td><a href="logout.php"><span style="float:right;padding: 5px 10px 5px 10px;border-radius:5px;font-family:candara;font-size:1.2em;">LOGOUT!</span></a ></td></tr>
<tr><td></td></tr>
</table></div>

<p style="  clear:both;"></p>
<br><br>
<ul>
  <li><a href="requests.php">Home</a></li>
  <li><a href="raiseRequest.php">Raise a Request</a></li>
  <li><a href="myRequests.php">My Requests</a></li>
  <li><a href="myContributions.php">My Contributions</a></li>
  
  <li><a href="consumersprofile.php?id=<?php session_start(); $user = $_SESSION['user']; echo $user; ?>">My Profile</a></li>
</ul>
<div style = "padding: 15px 0 0 500px;" >
 <table><tr><td><img src = 'images/<?php echo $row[6]; ?>' style = "height: 150px; width:200px;"></td> <td style="padding: 0 0 0 50px;"><p style="font-weight: bold;">
 <?php echo $row[0]; ?> </p>
 <?php echo $row[5].", ".$row[4]; ?><br>
  <?php echo $Requests; ?> Requests (<?php echo $Fulfilled; ?> fulfilled)
  <br> <?php echo $Contributions; ?> Contributions <br>
  <?php echo $row[7]; ?> Likes
 
 
</td></tr><table>
 <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
</div>


</body>