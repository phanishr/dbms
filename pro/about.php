<?php
session_start();
$conn = mysqli_connect($_SESSION["sn"],$_SESSION["un"],$_SESSION["pd"],$_SESSION["dbn"]);
if (!$conn) 
		die("Connection failed: " . mysqli_connect_error());
?>
<!DOCTYPE html>
<html>
<head>
<title> about</title>
<style>
body{
	background-image:url("4.jpg");
	background-repeat:no-repeat;
	background-position:centre;
	background-size:cover;
	}
h1{
	color:white;
	text-align:center;
	font-size:60px;
	font-family:courier;
	}
ul{
	color:black;
	font-family:courier;
	font-size:21px;
	}
</style>
</head>
<body>
<h1> 
ABOUT US
</h1>
<p><b>
<ul>
<li>Indian Railways (IR) is India's national railway system operated by the Ministry of Railways.</li>
<li>It manages the fourth-largest railway network in the world by size, with 121,407 kilometres (75,439 mi) of total track over a 67,368-kilometre (41,861 mi) route.</li>
<li>Forty nine percent of the routes are electrified with 25 KV AC electric traction while thirty three percent of them are double or multi-tracked.</li>
<li>IR runs more than 20,000 passenger trains daily, on both long-distance and suburban routes, from 7,349 stations across India.</li>
<li>The trains have a five-digit numbering system. </li>
<li>Mail or express trains, the most common types, run at an average speed of 50.6 kilometres per hour (31.4 mph).</li>
<li>In the freight segment, IR runs more than 9,200 trains daily.</li>
<li>The average speed of freight trains is around 24 kilometres per hour (15 mph).</li>
<li>As of March 2017, IR's rolling stock consisted of 277,987 freight wagons, 70,937 passenger coaches and 11,452 locomotives.</li>
<li>IR owns locomotive and coach-production facilities at several locations in India.</li>
<li>The world's eighth-largest employer, it had 1.308 million employees as of March 2017.</li>
<li>In the year ending March 2018, IR carried 8.26 billion passengers and transported 1.16 billion tonnes of freight.</li>
<li>In the fiscal year 2017-18, IR is projected to have revenue of ₹1.874 trillion (US$26 billion), consisting of ₹1.175 trillion (US$16 billion) in freight revenue 
	and ₹501.25 billion (US$7.0 billion) in passenger revenue, with an operating ratio of 96.0 percent.</li></b>
</p>

</body>
</html>
