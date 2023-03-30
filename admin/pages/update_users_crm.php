<?php
	include '../server/connect.php'; 
    session_start();
    @$date = date('Y-m-d H:i:s');

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

	$sql = "UPDATE IT_Users_CRM SET 
				PWD = ? ,
				Person_ID = ? ,
				Sec_id = ?,
                Usr_nm = ?,
                UsrPermit = ?,
                Write_bit = ?,
                Edit_bit = ?,
                Delete_bit = ?,
                lst_updt = ?
				WHERE Usr_id = ? ";
	$params = array(
        $_POST["PWD"],
        $_POST["Person_ID"],
        $_POST["Sec_id"],
        $_POST["Usr_nm"],
        $_POST["UsrPermit"],
        $Write_bit,
        $Edit_bit,
        $Delete_bit,
        $date,
        $_POST["Usr_id"]
	);

	$stmt = sqlsrv_query( $conn, $sql, $params);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ບັນທືກຂໍ້ມູນສຳເລັດ!'); location.href='../basic-FrmUser.php';</script>";
	}

	sqlsrv_close($conn);
?>
