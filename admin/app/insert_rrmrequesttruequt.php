<?php

    include '../server/connect.php'; 
	$date = date('Y-m-d H:i:s');
	$int = 0;
	session_start();

	$sql = "INSERT INTO KHT_Order_No_Open(
		Order_ID,
		Order_No
		-- Item_No,
		-- Description
		
		)
	VALUES (?,?,?,?)";
	$params = array(
	$_POST["Order_ID"],
	$_POST["Order_No"],
	$date,
	$_POST["Description"]
	
	// $_POST["Item_sam"],
	// $_POST["Item_Date_sam"],
	// $_POST["Request_Crim"],
	// $_POST["Request_Civil"],
	// $_POST["Respond_Civil"],
	// $_POST["Related_Pers"],
	// $_POST["Problem"],
	// $_POST["Dept_Respond"],
	// $_POST["Staff_Respond"],
	// $_POST["Remark"],
	// $_POST["Last_Update"],
	// $Usr_name = $_SESSION['Usr_nm'],
	// $int
	);
   
	   $stmt = sqlsrv_query($conn, $sql, $params);
	   if( $stmt === false ) {
   //	 die( print_r( sqlsrv_errors(), true));
		echo "<script>alert('ຜິດຜາດ');location.href='../basic-rrmrequesttruequt-list-load.php';</script>";
	   }
	   else
	   {
		   echo "<script>alert('ບັນທຶກສຳເລັດ');location.href='../basic-rrmrequesttruequt-list-load.php';</script>";
	   }

	
	 sqlsrv_close($conn);
	
?>