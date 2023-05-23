<!DOCTYPE html>
<html lang="en">
<head>
<?php
include '../head.php';
?>
</head>
<body>
   
<?php

    $Usr_id = array($_GET["Group_ID"]);

	include '../server/connect.php';
	$sql = "DELETE FROM KHT_Rpt_SumByLaws WHERE Group_ID = ? ";
	

	$stmt = sqlsrv_query( $conn, $sql, $Usr_id);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ລົບຂໍ້ມູນສຳເລັດ!'); location.href='../basic-FrmUser2.php';</script>";
	}

	sqlsrv_close($conn);
?>


    
</body>
</html>