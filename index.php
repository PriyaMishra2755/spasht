
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
<a href="login.php"><span style="float:right;border-radius:5px;color:black;font-family:candara;font-size:1.2em;">SIGNUP/LOGIN!</span></a ></div>
<p style="clear:both;"></p>
<br><br>
<ul>
  <li><a href="requests.php">Home</a></li>
  <li><a href="raiseRequest.php">Raise a Request</a></li>
  <li><a href="myRequests.php">My Requests</a></li>
  <li><a href="myContributions.php">My Contributions</a></li>
  
  <li><a href="consumersprofile.php?id=<?php session_start(); $user = $_SESSION['user']; echo $user; ?>">My Profile</a></li>
</ul>

<div style="padding-right:50px;padding-left:50px;font-family:candara;font-size:1.2em;text-align:left font-weight: normal"">
<p>Imagine who you would be if your formal education ended at middle school. Imagine being a grown person knowing only what you learned through 8th grade. Now multiply them by 150 millions. There are 775 million people in the world who are illiterate, with another 152 million children set to follow in their footsteps because they aren’t attending school. No reading, no writing, no Maths. They are so hungry to learn. When we are in any kind of problem, we know exactly whom to call but these 150 millions of children have no outlet, no voice in their societies.  It's like they know the answers but no one will call them and I know how does it feel.

Knowing that these children are counting on us and we need to be their network, we want to support them but what many are currently doing is providing funds to the NGOs etc. and then they collect all the funds to support those kids. What if we want to support some kids such that we keep in touch with those particular kids and we actually see them growing. But again we don't want to adopt them. For e.g, I don't want to adopt one for that as neither I find myself that responsible and also I believe once u start getting education, hygiene and clothes everything you've ways to manage those on your own. I just want them to help them in completing their education. At the same time, I don't want to support them through NGOs as I want to help one kid and I want to see how is he doing, what is his scores in different subjects, I want to look at his stream which he is taking interest in and want to help him in choosing the same for the future. Basically I want to take the whole responsibility of one kid (or more) but just for education for those kids whose parents can't afford to send them to schools.

So basically we're trying to build an app where if you see any child working in shops or anywhere else and not getting proper education, then you can put their profiles (pic, name, location) by logging into our app and then the interested people  can choose nearby kids profile on that app to help them getting into schools, paying their school fees and can see their overall development, hobbies etc. and can provide them a platform to pursue their passion.</p>
<hr>
</div>
</center>
</body>
</html>