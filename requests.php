<!DOCTYPE HTML>
<html>
<head>
<title>Requests | Home</title>
</head>
<body>
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
    background-color: #148F77;
}

.kids tr:nth-child(even) {
    background-color: #148F77;
}
.kids td
{
	min-height: 100px; 
	min-width:100px;  
	text-align:center;
	
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
  <li><a href="#contact">My Requests</a></li>
  <li><a href="#contact">My Contributions</a></li>
  <li><a href="#contact">About us</a></li>
  <li><a href="#contact">My Profile</a></li>
</ul>

<div style="padding-right:50px;padding-left:50px;font-family:candara;font-size:1.2em;text-align:left font-weight: normal"">
<?php
$con = mysqli_connect("localhost:3307","root","munna2755", "vtc") or die(mysql_error());
$sql = "SELECT * FROM beneficiaries WHERE isPaid = 0";
$result=mysqli_query($con , $sql);
$i = 0; 
?>
<p style="text-align: center; font-weight: bold"> Pending requests </p>
<table class="kids">
<tr> 
                        <th>kid</th>                       
                        <th>&nbsp;</th>  
                        <th>Name</th> 
						<th>Fee</th >
						<th>Age</th>
                        <th>School</th> 
                        <th>Class</th> 
                        <th>Address</th> 
						<th>requester</th>
                    </tr> 
<?php
 while($rows=mysqli_fetch_array($result)) {
	 $i = $i + 1;
	 ?>
	 <tr>
	 <td><img src = '<?php echo $GLOBALS['i']; ?>.jpg' style = "height: 150px; width:200px;"></td>
	 <td>Pay</td>
	 <td><?php echo $rows['Name']; ?></td>
	 <td><?php echo $rows['Fee']; ?></td>
	 <td><?php echo $rows['Age']; ?></td>
	 <td><?php echo $rows['School']; ?></td>
	 <td><?php echo $rows['Class']; ?></td>
	 <td><?php echo $rows['Address']; ?></td>
	 <td><?php echo $rows['requester']; ?></td>
	 </tr>
 <?php } ?>
</table>
</div>
</center>
</body>
</html>