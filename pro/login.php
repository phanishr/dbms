<!DOCTYPE html>
<html>
<body>
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
	header("http://localhost/project/home.php");
?> 
</body>
</html>