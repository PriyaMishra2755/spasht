
<form action="show_my_name.php" method="get">
<input type="text" name="name" value="<script>alert('XSS found');</script>" style="width: 250px;"/>
<input type="submit" value="Show My Name"/>
</form>

<form action="show_my_name.php" method="get">
<input type="text" name="name" value="<h1>hello;</h1>" style="width: 250px;"/>
<input type="submit" value="Show My Name"/>
</form>

<form action="show_my_name.php" method="get">
<input type="text" name="name" value="This is normal name" 
style="width: 250px;"/>
<input type="submit" value="Show My Name"/>
</form>