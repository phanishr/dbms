<?php
session_start();
$conn = mysqli_connect($_SESSION["sn"],$_SESSION["un"],$_SESSION["pd"],$_SESSION["dbn"]);
if (!$conn) 
		die("Connection failed: " . mysqli_connect_error());
?>
<html>
<head>
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
<h1>BOOK YOUR TRAIN TICKET</h1>
<form action="http://localhost/project/subm.php" method="post"><pre><b>
 Train number: <input type="number" name="tno" placeholder="Eg:15264">  Train name: <input type="text" name="tname" placeholder="Eg:Shathabdi">
 Source:       <input type="text" name="from" placeholder="Eg:Banglore">  Destination:<input type="text" name="to" placeholder="Eg:Bangarpet">
 Date:         <input type="date" name="date">
 </pre>
 <p>CUSTOMER DETAILS</p><pre>
 S.No:<input type="text" name="sn1" size="1" placeholder="   1 "> name: <input type="text" name="p1name" placeholder="Eg: Preetham adi">   age: <input type="number" name="p1age" placeholder="Eg: 20"> sex: <input type="text" name="s1" placeholder="M/F"> pnr: <input type="number" name="pnr1" placeholder="Eg:1234567898"> 
      <input type="text" name="sn2" size="1" placeholder="   2 ">       <input type="text" name="p2name" >        <input type="number" name="p2age">      <input type="text" name="s2">      <input type="text" name="pnr2">
      <input type="text" name="sn3" size="1" placeholder="   3 ">       <input type="text" name="p3name" >        <input type="number" name="p3age">      <input type="text" name="s3">      <input type="text" name="pnr3">   
 </b></pre>
  <input type="submit" value="submit"> 
  <input type="reset">
 </form>
 </body>
 </html>