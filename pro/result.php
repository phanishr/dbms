
<html>
<head>
<title> result</title>
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
	font-size:55px;
	font-family:courier;
	}
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
	color:white;
	font-family:courier;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style>
</head>
<body>
<h1> YOUR SEARCH RESULT</h1>
<table style="width:100%">
  <tr>
    <th>Train number</th>
    <th>Train name</th> 
    <th>Departure time</th>
    <th>Arrival time</th>
    <th>General</th>
    <th>AC</th>
    <th>Sleeper</th>
  </tr>

  <?php
session_start();
$conn = mysqli_connect($_SESSION["sn"],$_SESSION["un"],$_SESSION["pd"],$_SESSION["dbn"]);
if (!$conn) 
		die("Connection failed: " . mysqli_connect_error());
	$from = $_POST['from'];
	$to = $_POST['to'];
$sql = "SELECT Train_id, Train_name, Source, Destination, Departure_time, Arrival_time, Day, General, AC, Sleeper FROM train WHERE Source='$from' and Destination='$to'";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
     echo"<tr>";
    echo"<td>".$row['Train_id']."</td>";
    echo"<td>".$row['Train_name']."</td>";
    echo"<td>".$row['Departure_time']."</td>";
	echo"<td>".$row['Arrival_time']."</td>";
	echo"<td>".$row['General']."</td>";
	echo"<td>".$row['AC']."</td>";
	echo"<td>".$row['Sleeper']."</td>";
  echo"</tr>";
    }

?>
</table>

</body>
</html>