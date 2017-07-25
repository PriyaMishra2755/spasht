<?php
$con = mysql_connect("localhost:3307","root","munna2755") or die(mysql_error());
 mysql_select_db('vtc') or die(mysql_error());
if( !filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL) )
	echo "the email entered is invalid.";
 $regex="/^[789][0-9]{9}$/";
if(!preg_match($regex,$_POST['number']))
	echo "The contact number is invalid.";
	 $b=$_POST['emailid'];
 
 $sql = "SELECT * FROM consumers1 WHERE emailid='$b'";
  $result= mysql_query($sql);
  $priya=mysql_num_rows($result);
 
  if($priya>0)
 
  echo "email id is already registered";
  
  else if(filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL)&&(preg_match($regex,$_POST['number'])))
  {
  $a=$_POST['name'];

$c=$_POST['password'];
$d=$_POST['number'];
$e=$_POST['address'];
$f=$_POST['city'];
  $sql="INSERT INTO consumers1 VALUES('$a','$b','$c','$d','$e','$f');";
   if(mysql_query($sql))
  header('location: menu.php');
   else echo mysql_error();}
  ?>
 