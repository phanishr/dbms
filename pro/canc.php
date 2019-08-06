 <?php
session_start();
$conn = mysqli_connect($_SESSION["sn"],$_SESSION["un"],$_SESSION["pd"],$_SESSION["dbn"]);
if (!$conn) 
		die("Connection failed: " . mysqli_connect_error());
	$pnr = $_POST['pnr'];
$sql = "delete from reservation where pnr='$pnr'";
if(mysqli_query($conn,$sql))
		echo"successful";
	else{
		echo "error".$sql."<br>".mysqli_error($conn);
		}
		?>