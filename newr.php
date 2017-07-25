

<form action="" method="post">
Name:<input type="text" name="name" required/><br>
E-mail:  <input type="text" name="emailid" required/><br>
Password:<input type="password" name="password" required/><br>
Contact: <input type="text" name="number" required/><br>
Address: <input type="text" name="address" required/><br>
City:    <input type="text" name="city" required/><br>
<input type="submit" value="Sign Up!"/>
</form>
<?php
if (isset($_POST['submit'])){
$con = mysql_connect("localhost:307","root","munna2755") or die(mysql_error());
 mysql_select_db('vtc') or die(mysql_error());
echo "nfguhiu";}?>
