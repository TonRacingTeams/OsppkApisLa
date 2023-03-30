<?php
    include '../server/connect.php'; 
	$date = date('Y-m-d H:i:s');


	if(@$_POST["Write_bit"]==0 or @$_POST["Write_bit"]==''){
		$Write_bit='0';
	}else{
		$Write_bit='1';
	}


	if(@$_POST["Edit_bit"]==0 or @$_POST["Edit_bit"]==''){
		$Edit_bit='0';
	}else{
		$Edit_bit='1';
	}


	if(@$_POST["Delete_bit"]==0 or @$_POST["Delete_bit"]==''){
		$Delete_bit='0';
	}else{
		$Delete_bit='1';
	}


	 session_start();
	 $sql = "INSERT INTO IT_Users_CRM (Usr_id, PWD, Person_ID, Sec_id,Usr_nm,UsrPermit,Write_bit,Edit_bit,Delete_bit,lst_usr,lst_updt)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	 $params = array(
           $_POST["Usr_id"],
           $_POST["PWD"],
           $_POST["Person_ID"],
           $_POST["Sec_id"],
           $_POST["Usr_nm"],
           $_POST["UsrPermit"],
		   $Write_bit,
		   $Edit_bit,
		   $Delete_bit,
		   $Usr_name = $_SESSION['Usr_nm'],
		   $date
	
     );

	$stmt = sqlsrv_query($conn, $sql, $params);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ບັນທຶກສຳເລັດ');location.href='../basic-FrmUser.php';</script>";
	}

	sqlsrv_close($conn);
	
?>