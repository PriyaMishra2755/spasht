<?php

$con = mysql_connect("localhost:3307","root","munna2755") or die(mysql_error());
 mysql_select_db('vtc') or die(mysql_error());
  $regex="/^[789][0-9]{9}$/";
  $b=$_POST['emailid'];
if( !filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL) )
	{ header('location: emailid_invalid.php');}
	

else if(!preg_match($regex,$_POST['number']))
	{ header('location: contact_invalid.php');}
	 
else{ 
 $sql = "SELECT * FROM consumers1 WHERE emailid='$b'";
  $result= mysql_query($sql);
  $priya=mysql_num_rows($result);
 
  if($priya>0)
 
   header('location: emailid_registered.php');
  
  else 
  {
  $a=$_POST['name'];

$c=$_POST['password'];
$d=$_POST['number'];
$e=$_POST['address'];
$f=$_POST['city'];
  $sql="INSERT INTO consumers1 VALUES('$a','$b','$c','$d','$e','$f');";
   if(mysql_query($sql))
  header('location: menu.php');
   else echo mysql_error();}}
  ?>
<div style="width:250px;height:150px;float:right;
background-color:grey;m