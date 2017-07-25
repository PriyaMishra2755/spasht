<?php 
session_start();
if(isset($_SESSION['views']))
header('location: requests.php');
else
header('location: loginpage.php');?>