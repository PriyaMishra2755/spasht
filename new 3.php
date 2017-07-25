
<?php
<form action="" method="post">
Name:<input type="text" name="name" required/><br>
E-mail:  <input type="text" name="emailid" required/><br>
Password:<input type="password" name="password" required/><br>
Contact: <input type="text" name="number" required/><br>
Address: <input type="text" name="address" required/><br>
City:    <input type="text" name="city" required/><br>
<input type="submit" value="Sign Up!"/>
</form>

if(isset($_POST['Sign Up!'])){
echo"true";?>
