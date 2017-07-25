
 <!DOCTYPE HTML>
<html>
<head>
<title>Flower Store | Thank You</title>
</head>
<body>
<style type="text/css"> body {background-color:#17375d;}
<!--

a {text-decoration: none; }

--> </style>

<center>
<div style="width:1000px;">
<div style="background-color:white;margin-top:50px;
margin-bottom:100px;
margin-left:50px;
margin-right:50px;padding: 30px 20px 20px 20px;">
<div style="padding-top:20px;padding-right:20px;float:right;">
<table>
<tr><td><a href="logout.php"><span style="float:right;padding: 5px 10px 5px 10px;background-color:#cd15a6;border-radius:5px;color:white;font-family:candara;font-size:1.2em;">LOGOUT!</span></a ></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td><a href="settings.php"><span style="float:right;padding: 5px 5px 5px 5px;background-color:#cd15a6;border-radius:5px;color:white;font-family:candara;font-size:1.2em;">SETTINGS!</span></a ></td></tr></table></div>
<img src="title.png" style="float:left;">
<p style="clear:both;"></p>
<hr color="#cd15a6"><br><br><br>
<table>
<tr><td style="font-family:georgia;font-size:1.5em;">YOUR ORDER</td></tr><tr><td valign="top"><hr style="margin-top: 0px;" color="#cd15a6"></td></tr></table>
<p style="font-family:candara;font-size:1.2em;">Please confirm that you wish to order the following items.</p>
<?php
$total=0;
if(empty($_POST['add'])) header('location: menu.php');
else{
echo "<table>";
echo "<tr>"; echo "<th style='font-size:1.1em;padding-right:5px; border-bottom:1pt solid #cccccc;'>"."Item Number"."</th>"; echo "<th  style='font-size: 1.1em; border-left:1pt solid#cccccc; border-bottom: 1pt solid #cccccc;padding-left: 20px; padding-right:10px;'>"."Cost"."</th>"; echo "</tr>"; 
    foreach($_POST['add'] as $check) {
	switch($check){
	case 1:$c=500;break;
	case 2:$c=600;break;
	case 3:$c=700;break;
	case 4:$c=200;break;
	case 5:$c=100;break;
	case 6:$c=100;break;
	case 7:$c=1000;break;
	case 8:$c=750;break;
	case 9:$c=870;break;
	case 10:$c=1100;break;
	case 11:$c=250;break;
	case 12:$c=320;}
	$total=$total+$c;
           echo "<tr>"; echo "<td>"."#".$check."</td>"; echo "<td style='font-family:candara;font-size:1.2em;border-left: 1pt solid #cccccc; padding-left:10px;'>"."Rs ".$c."</td>"; echo "</tr>";
			}
			echo "<tr>"; echo "<td style='border-top: 1pt solid #cccccc;'>"."Total"."</td>"; echo "<td style='font-family:candara;border-top: 1pt solid #cccccc;font-size:1.2em;border-left: 1pt solid #cccccc; padding-left:10px;'>"."Rs ".$total."</td>"; echo "</tr>";
			echo "</table>";}?><br><br>
			<a href="confirm.php"><span style="padding: 5px 20px 5px 20px;background-color:#cd15a6;border-radius:5px;color:white;font-family:candara;font-size:1.0em;"><span style="text-decoration: none;">Confirm!</span></span></a >
			<br><br>
			<hr>
 

  