<!DOCTYPE html>
<html lang="en">
<head>
<?php
include '../head.php';
?>
</head>
<body>
   
<?php

    $Item_ID = array($_GET["Item_ID"]);

	include '../server/connect.php';
	$sql = "DELETE FROM Cri_ReQuestTrueIn WHERE Item_ID = ? ";
	

	$stmt = sqlsrv_query( $conn, $sql, $Item_ID);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ລົບຂໍ້ມູນສຳເລັດ!'); location.href='../basic-frmrequesttrueIn_List.php';</script>";
	}

	sqlsrv_close($conn);
?>


    
</body>
</html>