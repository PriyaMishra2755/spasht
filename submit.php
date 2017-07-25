<?php
if(isset($_POST['Sign Up!'])){
if( !filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL) )
	echo "the email entered is invalid.";
 $regex="/^[789][0-9]{9}$/";
if(!preg_match($regex,$_POST['number']))
	echo "The contact number is invalid.";
  $sql = "SELECT * FROM consumers1 ";
  $result= mysql_query($sql);
  $count=0;
  if($result){
  $row = mysql_fetch_row($result);
   while($row){
  if($_POST['emailid']==$row[1])
  $count++;
  }}else $count=0;
  if($count>0)
  echo"email id is already registered";
  else if(filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL)&&(preg_match($regex,$_POST['number'])))
  {
  $sql="INSERT INTO consumers1 VALUES($_POST['name'],$_POST['emailid'],$_POST['password'],$_POST['number'],$_POST['address'],$_POST['city']);";
 if(mysql_query($sql))
 header('location: home.php');}}?>
  