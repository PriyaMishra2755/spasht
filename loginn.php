<?php
$con = mysql_connect("localhost:3307","root","munna2755") or die(mysql_error());
 mysql_select_db('vtc') or die(mysql_error());
$b=strip_tags(mysql_real_escape_string($_POST['emailid']));
$c=strip_tags(mysql_real_escape_string(md5($_POST['password'])));
$sql = "SELECT * FROM consumers1 WHERE emailid='$b'";
  $result= mysql_query($sql);
  $priya=mysql_num_rows($result);
 $row = mysql_fetch_row($result);
  if($priya==0)
	{ header('location: email_unregisterd.php');}
else if($row[2]!=$c)
	{ header('location: incorrect_password.php');}
	else 
		{ session_start(); $_SESSION['views']=1; $_SESSION['user']=$b; header('location: menu.php');}
		?>