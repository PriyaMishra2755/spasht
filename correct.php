<?php
$con = mysql_connect("localhost:3307","root","munna2755") or die(mysql_error());
 mysql_select_db('vtc') or die(mysql_error());
 $sql="INSERT INTO consumers1 VALUES($_POST['name'],$_POST['emailid'],$_POST['password'],$_POST['number'],$_POST['address'],$_POST['city']);";
 
  header('location: menu.php');
 ?>
 
 

  