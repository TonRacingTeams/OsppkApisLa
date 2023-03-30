<?php

    include '../server/connect.php'; 
	$date = date('Y-m-d H:i:s');
	$int = 0;
	session_start();

	$sql = "INSERT INTO Cri_CancelIn(
		item_Cnt,
		Item_ID, 
		Item_No,
		Item_Date,
		Doc_name,
		Doc_No,
		Problem,
		Request_Crim,
		Request_Civil,
		Last_Update,
		Last_User,
		Doc_Date,
		Outed,
		Related_Pers,
		Respond_Civil,
		GrpName,
		OtherLaw,
		Dept_Respond,
		Staff_Respond)
	VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$params = array(

	$_POST["item_Cnt"],
	$_POST["Item_ID"],
	$_POST["Item_No"],
	$date,
	$_POST["Doc_name"],
	$_POST["Doc_No"],
	$_POST["Problem"],
	$_POST["Request_Crim"],
	$_POST["Request_Civil"],
	$_POST["Last_Update"],
	$Usr_name = $_SESSION['Usr_nm'],
	$_POST["Doc_Date"],
	$int,$_POST["Related_Pers"],
	$_POST["Respond_Civil"],
	$_POST["GrpName"],
	$_POST["OtherLaw"],
	$_POST["Dept_Respond"],
	$_POST["Staff_Respond"],
	);
   
	   $stmt = sqlsrv_query($conn, $sql, $params);
	   if( $stmt === false ) {
   //	 die( print_r( sqlsrv_errors(), true));
		echo "<script>alert('ຜິດຜາດ');location.href='add_FrmCancelIn_List.php';</script>";
	   }
	   else
	   {
		   echo "<script>alert('ບັນທຶກສຳເລັດ');location.href='../basic-cancel-list.php';</script>";
	   }

	
	 sqlsrv_close($conn);
	
?>