<?php
session_start();
$conn = mysqli_connect($_SESSION["sn"],$_SESSION["un"],$_SESSION["pd"],$_SESSION["dbn"]);
if (!$conn) 
		die("Connection failed: " . mysqli_connect_error());
		$sn1 = $_POST['sn1'];
		$sn2 = $_POST['sn2'];
		$sn3 = $_POST['sn3'];
		$p1name = $_POST['p1name'];
		$p2name = $_POST['p2name'];
		$p3name = $_POST['p3name'];
		$p1age = $_POST['p1age'];
		$p2age = $_POST['p2age'];
		$p3age = $_POST['p3age'];
		$s1 = $_POST['s1'];
		$s2 = $_POST['s2'];
		$s3 = $_POST['s3'];
		$pnr1 = $_POST['pnr1'];
		$pnr2 = $_POST['pnr2'];
		$pnr3 = $_POST['pnr3'];
		$tno = $_POST['tno'];
		$tname = $_POST['tname'];
		$from = $_POST['from'];
		$to = $_POST['to'];
		$date=strtotime($_POST['date']);
	$date=date('Y-m-d',$date);
$sql="INSERT INTO `reservation`(`Train_number`, `Train_name`, `Source`, `Destination`, `Date`, `S.no`, `Name`, `Age`, `Sex`, `PNR`) VALUES ('$tno','$tname','$from','$to','$date','$sn1','$p1name','$p1age','$s1','$pnr1');";
$sql.="INSERT INTO `reservation`(`Train_number`, `Train_name`, `Source`, `Destination`, `Date`, `S.no`, `Name`, `Age`, `Sex`, `PNR`) VALUES ('$tno','$tname','$from','$to','$date','$sn2','$p2name','$p2age','$s2','$pnr2');";
$sql.="INSERT INTO `reservation`(`Train_number`, `Train_name`, `Source`, `Destination`, `Date`, `S.no`, `Name`, `Age`, `Sex`, `PNR`) VALUES ('$tno','$tname','$from','$to','$date','$sn3','$p3name','$p3age','$s3','$pnr3')";
if($conn->multi_query($sql) === TRUE) {
   echo "successful";
}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
		}

?>