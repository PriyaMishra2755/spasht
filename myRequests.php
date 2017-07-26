<!DOCTYPE HTML>
<html>
<head>
<title>Requests | Home</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<script>
function PayValue(x)
{
	
	window.open("http://paytm.com");
}
</script>
<style type="text/css"> body {background-image: url("bk.jpg");
background-color: #cccccc;}
th {
	
font-weight: 900;
    color: #ffffff;
    background: #ea6153;
}

table {
  margin: 0 0 0 0;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0,0,0,0.2);
  display: table;
  @media screen and (max-width: 580px);
display: block; }
	
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
    background-color: #4CAF50;
}

 </style>





<div style="padding-top:20px;padding-right:20px;float:right;">
<table>
<tr><td><a href="logout.php"><span style="float:right;padding: 5px 10px 5px 10px;border-radius:5px;font-family:candara;font-size:1.2em;">LOGOUT!</span></a ></td></tr>
<tr><td></td></tr>
</table></div>

<center><p style="clear:both;"></p>
<br><br>
<ul>
  <li><a href="requests.php">Home</a></li>
  <li><a href="raiseRequest.php">Raise a Request</a></li>
  <li><a href="myRequests.php">My Requests</a></li>
  <li><a href="myContributions.php">My Contributions</a></li>
  
  <li><a href="consumersprofile.php?id=<?php session_start(); $user = $_SESSION['user']; echo $user; ?>">My Profile</a></li>
</ul>

<div style="padding-right:50px;padding-left:50px;font-family:candara;font-size:1.2em;text-align:left font-weight: normal"">
<?php
$con = mysqli_connect("localhost:3307","root","munna2755", "vtc") or die(mysql_error());
$sql = "SELECT * FROM beneficiaries WHERE requester = '$user'";
$result=mysqli_query($con , $sql);
//$i = 0; 
?>
<p style="text-align: center; font-weight: bold"> Pending requests </p>
<table class="kids">

<?php
 while($rows=mysqli_fetch_array($result)) {
	 $a = $rows['School'];
	 $sql1 = "SELECT * FROM beneficiaries WHERE isPaid = 1 and School = '$a' ";
	 $result1= mysqli_query($con, $sql1);
  $total=mysqli_num_rows($result1);
  $sql1 = "SELECT * FROM beneficiaries WHERE billReceipt IS NOT NULL and School = '$a' ";
	 $result1= mysqli_query($con, $sql1);
  $bills=mysqli_num_rows($result1);
  $sql1 = "SELECT * FROM beneficiaries WHERE feedback IS NOT NULL and School = '$a' ";
	 $result1= mysqli_query($con, $sql1);
  $feedbacks=mysqli_num_rows($result1);
	 
	 $b = $rows['requester'];
	 $sql = "SELECT Name FROM registeredSchools WHERE PIN = '$a'";
	 $result1 =mysqli_query($con , $sql);
	 $row1 = mysqli_fetch_row($result1);
	 $sql2 = "SELECT Name, likes FROM consumers1 WHERE emailid = '$b'";
	 $result2 =mysqli_query($con , $sql2);
	 $row2 = mysqli_fetch_row($result2);
	// $i = $i + 1;
	 ?>
	 <tr>
	 <td><img src = 'images/<?php echo $rows['dp']; ?>' style = "height: 150px; width:200px;"></td>
	 <td style="padding:15px 15px 15px 20px;"> Educate <?php echo $rows['Name']; ?> (<?php echo $rows['Age']; ?>y) <br> Class <?php echo $rows['Class']; ?>
	 (<?php echo $rows['Address']; ?> )<br>
	 Aadhaar 
	 <?php
	 if($rows['aadharNum'] != null) { ?> 
		 <img src = 'tick.png' style = "width: 25px; height: 25px;">
 <?php } else { ?>
	 <img src = 'wrong.png' style = "width: 25px; height: 25px;"> <?php } ?>
	 
	  BPL 
<?php
	 if($rows['bplNum'] != null) { ?> 
		 <img src = 'tick.png' style = "width: 25px; height: 25px;">
	 <?php } else { ?>
		 <img src = 'wrong.png' style = "width: 25px; height: 25px;"> <?php } ?>
	  NCL 
	  <?php
	 if($rows['aadharNum'] != null) {  ?> 
		 <img src = 'tick.png' style = "width: 25px; height: 25px;">
	 <?php } else { ?>
		 <img src = 'wrong.png' style = "width: 25px; height: 25px;"> <?php } ?>
		 
		<br>Requested by <a href = "consumersProfile.php?id=<?php echo $user; ?>"><?php echo $row2[0]; ?> </a>(<?php echo $row2[1]; ?> <img src = 'like.png' style = "width: 20px; height: 20px;">)
	 
	 
	 </td>
	 <!--<td style="padding:0 15px 0 15px;"><table>
	 <tr><td>Aadhaar Verified</td><td> <img src = 'tick.png' style = "width: 25px; height: 25px;"></td></tr>
	 <tr><td>BPL Verified</td><td> <img src = 'tick.png' style = "width: 25px; height: 25px;"></td></tr>
	 <tr><td>NCL Verified</td><td> <img src = 'wrong.png' style = "width: 25px; height: 25px;"></td></tr>
	</table>
	 </td>-->
	 <td style = "padding 15px 15px 15px 50px; padding-left: 100px;"><?php echo $row1[0]; ?> (<?php echo $rows['Address']; ?> )<br>
	 GSTPIN <img src = 'tick.png' style = "width: 25px; height: 25px;"> <br>
	 Transparency - <span style = "color: green"><?php echo $bills ; ?></span>/<span style = "color: blue"><?php echo $total ; ?> </span> Receipts<br>
	 Feedback: <span style = "color: green"><?php echo $feedbacks ; ?></span>/<span style = "color: blue"><?php echo $total ; ?> </span>provided<br>
	 </td>
	 
	 
	 
	 
	 <td style="padding 15px 15px 15px 300px; padding-left: 150px;">Fee: Rs. <span style="font-weight: bold"> <?php echo $rows['Fee']; ?></span><br>&nbsp&nbsp&nbsp
	 <?php if($rows['isPaid'] == 0) { ?>
	 <input type=button class="w3-button w3-xlarge w3-circle w3-teal" value="Pay" onClick="PayValue('<?php echo $rows['School']; ?>')" />
 <?php } else { ?>
	 <input type=button class="w3-button w3-xlarge w3-circle w3-teal" value="Paid" /> <?php } ?>
	 </td>
	 
	 
	 
	 </tr>
 <?php } ?>
</table>
</div>
</center>
</body>
</html>