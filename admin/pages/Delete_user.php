<!DOCTYPE html>
<html lang="en">
<head>
<?php
include '../head.php';
?>
</head>
<body>
   
<?php

    $Usr_id = array($_GET["Usr_id"]);

	include '../server/connect.php';
	$sql = "DELETE FROM IT_Users_CRM WHERE Usr_id = ? ";
	

	$stmt = sqlsrv_query( $conn, $sql, $Usr_id);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ລົບຂໍ້ມູນສຳເລັດ!'); location.href='../basic-FrmUser.php';</script>";
	}

	sqlsrv_close($conn);
?>


    
</body>
</html>