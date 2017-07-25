<form action="new  7.php" method="post"> 

Name:<input type="text" name="names" required/><br>
<input type="submit" value="Sign Up!"/>
</form>

 if($count>0)
  echo"email id is already registered";
  else if($count==0&&filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL)&&(preg_match($regex,$_POST['number'])))
  {
  $a=$_POST['name'];

$c=$_POST['password'];
$d=$_POST['number'];
$e=$_POST['address'];
$f=$_POST['city'];
  $sql="INSERT INTO consumers1 VALUES($a,$b,$c,$d,$e,$f);";
   if(mysql_query($sql))
  header('location: menu.php');
   else echo mysql_error();}
  ?>