<!DOCTYPE html>
<html lang="en">
<head>
<?php
include '../head.php';
?>
</head>
<body>
   
<?php

    $Law_ID = array($_GET["Law_ID"]);

	include '../server/connect.php';
	$sql = "DELETE FROM Cri_Law_files_Other WHERE Law_ID = ? ";
	

	$stmt = sqlsrv_query( $conn, $sql, $Law_ID);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ລົບຂໍ້ມູນສຳເລັດ!'); location.href='../basic-FrmLaw_Files_Other.php';</script>";
	}

	sqlsrv_close($conn);
?>


    
</body>
</html>