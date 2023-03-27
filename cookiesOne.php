<?php

define("one_week", 60 * 60 * 24 * 7); //this creates a constant value of 7 days represented
//in seconds


//these declare the variables that will get the information from the input boxes as named
$username = $_POST['name'];
$userage = $_POST['age'];
$usergender = $_POST['gender'];

//each of these sets a cookie that will gather information from each of the input fields
//and the cookie will last one week from the time that it is sent
setcookie("name", $username, time() + one_week);
setcookie("age", $userage, time() + one_week);
setcookie("gender", $usergender, time() + one_week);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>The Cookie Results</title>
<meta charset="utf-8">

<link rel="stylesheet"
	href="cookies.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


	
</head>
<body>
<header>
<h1>All About Cookies</h1>
</header>
<div id="output">
<h2>Here are the results of the cookies that were put on your hard drive!</h2>
<p><strong>Who you are: 
<?php echo ($username) //this prints to the screen the name that the user entered in
//the name field
?></p>

<p>Your age: 
<?php echo ($userage)//this prints to the screen the age that the user entered
?></p>

<p>And your gender: 
<?php echo ($usergender)//this prints to the screen the gender that the user entered
?></strong></p>

</div>



</body>
</html>