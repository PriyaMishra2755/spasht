<?php 
session_start();
if(isset($_SESSION['views']))
header('location: menu.php');
else
header('location: loginpage.php');?>