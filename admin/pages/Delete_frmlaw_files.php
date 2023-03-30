<!DOCTYPE html>
<html lang="en">
<head>
<?php
include '../head.php';
?>
</head>
<body>
   
<?php

    $Law_ID = array($_GET["Item_ID"]);

	include '../server/connect.php';
	
	$sql = "INSERT INTO KHT_CanMeetingAY SELECT * from KHT_CanMeetingAY  WHERE Item_ID= ?";
	$stmt = sqlsrv_query( $conn, $sql, $Law_ID);
	$sql2 = "DELETE from KHT_CanMeetingAY  WHERE Item_ID= ? ";
	$stmt2 = sqlsrv_query( $conn, $sql2, $Law_ID);
	if( $stmt2 === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ລົບຂໍ້ມູນສຳເລັດ!'); location.href='../basic-FrmLaw_Files.php';</script>";
	}

	sqlsrv_close($conn);
?>


    
</body>
</html>