
<?php
	session_start();
	$username = $_POST['uname'];
    $password= $_POST['pwd'];
	$dbname="railways";
	$servername = "localhost";
	$_SESSION["sn"] = "localhost";
	$_SESSION["dbn"] = "railways";
	$_SESSION["un"] = $_REQUEST['uname'];
	$_SESSION["pd"] = $_REQUEST['pwd'];
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn) 
		die("Connection failed: " . mysqli_connect_error());
?> <!DOCTYPE html>
<html>
<head>
<style>
li {
	float:left;
	list-style-type: none;
	background-color:green;
	border-right: solid black;
	border: 1px solid lightgrey;
	padding:3px 60px;
	font-size:20px;
}
li:hover {
    background-color:black;
} 
li a{
	color:white;
	font-family:"Arial Unicode MS";
	letter-spacing: 3px;
}
body{background-image:url("1.jpg");
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
</style>
</head>

<ul>
	<li><a href="http://localhost/project/about.php">ABOUT</a></li>
  	<li><a href="http://localhost/project/search.php">SEARCH</a></li>
	<li><a href="http://localhost/project/reserve.php">BOOK TICKETS</a></li>
  	<li><a href="http://localhost/project/cancel.php">CANCELLATION</a></li>
  	<li><a href="http://localhost/project/logout.php">LOG OUT</a></li>
</ul>
</body>
</html>
