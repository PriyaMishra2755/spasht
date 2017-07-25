<?php $con = mysql_connect("localhost:3307","root","munna2755") or die(mysql_error());
$sql=mysql_select_db('vtc') or die(mysql_error());
$sql="CREATE TABLE consumerst(name CHAR(50) NOT NULL,emailid CHAR(50) NOT NULL UNIQUE PRIMARY KEY,password CHAR(50) NOT NULL,number INT(50) NOT NULL,address CHAR(100) NOT NULL,city CHAR(50) NOT NULL);";
if(mysql_query($sql))
echo"table created";


else if(filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL)&&(preg_match($regex,$_POST['number'])))
  {
  $sql="INSERT INTO consumerst VALUES($_POST['name'],$_POST['emailid'],$_POST['password'],$_POST['number'],$_POST['address'],$_POST['city']);";
 if(mysql_query($sql))
 header('location: home.php');}


?>