<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html
$sql="CREATE TABLE mersons(PID INT NOT NULL ,First_Name CHAR(50),Last_Name CHAR(50),AGE INT);";

$con = mysql_connect("localhost:3307","root","munna2755") or die(mysql_error());
$sql=mysql_select_db('vtc')or die(mysql_error
