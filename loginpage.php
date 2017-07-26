

<!DOCTYPE HTML>
<html>
<head>
<title>Flower Store | Home</title>
</head>
<body>
<style type="text/css"> body {background-image: url("bk.jpg");
background-color: #cccccc;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #8E44AD;
	
}

li {
    float: left;
	width: 200px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

 </style>

<center>




<div style="padding-top:20px;padding-right:50px;">
<p style="clear:both;"></p>
<div style="width:600px;height:300px;float:left;
margin-left:10px;padding: 10px 0px 20px 0px;font-family:candara; font-size:1.5em;">
<p style="text-align: center "><b>SIGNUP</b></p>
<p style="clear:both;"></p>
<form action="signup.php" method="post" enctype="multipart/form-data"><table>
<tr><td><label for="file">Display Pic:</label></td><td>
<input type="file" name="dp" id="file"></td>
<tr><td>Name:</td><td><input type="text" name="name" placeholder="Your Name" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>E-mail:</td><td>  <input type="text" name="emailid" placeholder="E-mail" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" placeholder="Password" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>Contact: </td><td><input type="text" name="number" placeholder="Ten digit mobile number" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>Address:</td><td> <input type="text" name="address" placeholder="City" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>City:   </td><td> <input type="text" name="city" placeholder="Address" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>Aadhaar number: </td><td> <input maxlength="12" type="password" name="aadhar" placeholder="Aadhaar Number"  style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr></table>
                                       
<br>
<input type="submit" value="Sign Up!" style="float:right;border-style: solid; border-color: black;background:green;color:white;border-radius:5px;font-size:1.1em"/>
</form>
</div>


<div style="width:400px;height:150px;float:right;
margin-right:10px;padding: 10px 20px 20px 10px;font-family:candara; font-size:1.5em;">
<p style="text-align: center; "><b>LOGIN</b></p>
<p style="clear:both;"></p>
<form action="loginn.php" method="post"><table>
<tr><td>E-mail:</td><td><input type="text" name="emailid" placeholder="E-mail" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<br>
<tr><td>Password:</td><td><input type="password" name="password" placeholder="Password" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<br></table><br><br><br><br><table><tr>
<td>
<a href="forgot.php"><span style = "color: black;"><u>Forgot Password</u></span></a></td><td>
<input type="submit" value="Login!" style="border-style: solid; border-color: black; margin-left: 50px; background:green;color:white;border-radius:5px;font-size:1.1em"/></td></tr></table>

</form></div>

<p style="clear:both"></p>
</div></center></body></html>
