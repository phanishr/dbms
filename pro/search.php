<?php
session_start();
$conn = mysqli_connect($_SESSION["sn"],$_SESSION["un"],$_SESSION["pd"],$_SESSION["dbn"]);
if (!$conn) 
		die("Connection failed: " . mysqli_connect_error());
?>
<!DOCTYPE html>
<html>
<head>
<title>search</title>
<style>
body{
	background-image:url("4.jpg");
	background-repeat:no-repeat;
	background-position:centre;
	background-size:cover
	}
	h1{
	color:white;
	text-align:center;
	font-size:60px;
	font-family:courier;
	}
form{
	font-size:20px;
	}
</style>
</head>
<body>
<h1>FIND YOUR TRAIN</h1>
<center>
<form action="http://localhost/project/result.php" method="post"><pre>
    SOURCE        <input type="text" name="from" placeholder="Eg:Bangalore"> 


 DESTINATION     <input type="text" name="to" placeholder="Eg:Bangarpet">
 


	<input type="submit" value="submit">       <input type="reset">
</pre></b>

</form>
</center>
</body>
</html>

