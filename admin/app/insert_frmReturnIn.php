<?php

    include '../server/connect.php'; 
	$date = date('Y-m-d H:i:s');
	$int = 0;
	session_start();

	$sql = "INSERT INTO Cri_ReturnIn(
		item_Cnt,
		Item_ID,
		Item_No,
		Item_Date,
		Item_sam,
		Item_Date_sam,
		Request_Crim,
		Request_Civil,
		Respond_Civil,
		Related_Pers,
		Problem,
		Dept_Respond,
		Staff_Respond,
		Remark,
		Last_Update,
		Last_User,
		Outed
		)
	VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$params = array(
	$_POST["item_Cnt"],
	$_POST["Item_ID"],
	$_POST["Item_No"],
	$date,
	$_POST["Item_sam"],
	$_POST["Item_Date_sam"],
	$_POST["Request_Crim"],
	$_POST["Request_Civil"],
	$_POST["Respond_Civil"],
	$_POST["Related_Pers"],
	$_POST["Problem"],
	$_POST["Dept_Respond"],
	$_POST["Staff_Respond"],
	$_POST["Remark"],
	$_POST["Last_Update"],
	$Usr_name = $_SESSION['Usr_nm'],
	$int
	);
   
	   $stmt = sqlsrv_query($conn, $sql, $params);
	   if( $stmt === false ) {
   //	 die( print_r( sqlsrv_errors(), true));
		echo "<script>alert('ຜິດຜາດ');location.href='../basic-returnin-list.php';</script>";
	   }
	   else
	   {
		   echo "<script>alert('ບັນທຶກສຳເລັດ');location.href='../basic-returnin-list.php';</script>";
	   }

	
	 sqlsrv_close($conn);
	
?>