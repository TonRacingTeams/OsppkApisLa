<?php
	include '../server/connect.php'; 
    session_start();
    @$date = date('Y-m-d H:i:s');

    if(@$_POST["Writes_bits"]==0 or @$_POST["Writes_bits"]==''){
		$Writes_bits='0';
	}else{
		$Writes_bits='1';
	}

    if(@$_POST["Edits_bits"]==0 or @$_POST["Edits_bits"]==''){
		$Edits_bits='0';
	}else{
		$Edits_bits='1';
	}

    if(@$_POST["Deletes_bits"]==0 or @$_POST["Deletes_bits"]==''){
		$Deletes_bits='0';
	}else{
		$Deletes_bits='1';
	}

	$sql = "UPDATE KHT_Rpt_SumByLaws SET 
				-- Group_ID = ? ,
				Group_No = ? ,
				Group_name = ?,
                Law_No = ?,
                Law_Name = ?,
                Quantity = ?
				WHERE Group_ID = ? ";
	$params = array(
        // $_POST["Group_ID"],
        $_POST["Group_No"],
        $_POST["Group_name"],
        $_POST["Law_No"],
        $_POST["Law_Name"],
		$_POST["Quantity"],
        $Writes_bits,
        $Edits_bits,
        $Deletes_bits,
        // $date,
        $_POST["Group_No"]
	);

	$stmt = sqlsrv_query( $conn, $sql, $params);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ບັນທືກຂໍ້ມູນສຳເລັດ!'); location.href='../basic-Frm_User2.php';</script>";
	}

	sqlsrv_close($conn);
?>
