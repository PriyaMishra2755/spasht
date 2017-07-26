<!DOCTYPE HTML>
<html>
<head>
<title>Requests | Home</title>
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





<div style="padding-top:20px;padding-right:20px;float:right;">
<table>
<tr><td><a href="logout.php"><span style="float:right;padding: 5px 10px 5px 10px;border-radius:5px;font-family:candara;font-size:1.2em;">LOGOUT!</span></a ></td></tr>
<tr><td></td></tr>
</table></div>

<center><p style="clear:both;"></p>
<ul>
  <li><a href="requests.php">Home</a></li>
  <li><a href="raiseRequest.php">Raise a Request</a></li>
  <li><a href="myRequests.php">My Requests</a></li>
  <li><a href="myContributions.php">My Contributions</a></li>
  
  <li><a href="consumersprofile.php?id=<?php session_start(); $user = $_SESSION['user']; echo $user; ?>">My Profile</a></li>
</ul>



<div style="width:700px;height:500px;float:left;
margin-left:300px;padding: 10px 20px 20px 20px;font-family:candara; font-size:1.5em;">
<p style="text-align:center "><b>Add a request</b></p>
<p style="clear:both;"></p>
<form enctype="multipart/form-data" action="addRequest.php" method="post"><table>
<tr><td><label for="file">Display Pic:</label></td><td>
<input type="file" name="file" id="file"></td>
<tr><td>Benificiary Name:</td><td><input type="text" name="name" placeholder="Your Name" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>Age:</td><td>  <input type="text" name="age" placeholder="Age" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>School:</td><td><input type="text" id = "skul" name="school" placeholder="Select School" style="border-radius:5px; height: 25px; font-size:1.0em;" required/> <input type="button" name="schoolChoice" onClick="selectSchool('skul')" value="?"></td></tr>
<tr><td>Class: </td><td><input type="text" name="class" placeholder="class" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>City:</td><td> <input type="text" name="address" placeholder="City" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>Address:   </td><td> <input type="text" name="city" placeholder="Address" style="border-radius:5px; height: 25px; font-size:1.0em;" required/></td></tr>
<tr><td>Aadhaar number: </td><td> <input maxlength="12" type="password" name="aadhar" placeholder="Aadhaar Number"  style="border-radius:5px; height: 25px; font-size:1.0em;"/></td></tr>
<tr><td>BPL number: </td><td> <input maxlength="12" type="password" name="bpl" placeholder="BPL Number"  style="border-radius:5px; height: 25px; font-size:1.0em;"/></td></tr>
<tr><td>NCL number: </td><td> <input maxlength="12" type="password" name="ncl" placeholder="NCL Number"  style="border-radius:5px; height: 25px; font-size:1.0em;"/></td></tr></table>
<br>
<input type="submit" value="Add!" style="border-style: solid; border-color: black;background:green;color:white;border-radius:5px;font-size:1.1em"/>
</form>
</div>
</center>
<script type="text/javascript">
function selectSchool(id)
{
	
    // open popup window and pass field id
    window.open("schoolChoices.php?id=" + encodeURIComponent(id), "popuppage", ",width=600,height=200");
}
function updateValue(id, value)
{
    // this gets called from the popup window and updates the field with a new value
    document.getElementById(id).value = value;
}
</script>
</body>

</html>