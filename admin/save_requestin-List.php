 <?php

    // include '../server/connect.php'; 
	include '../head.php';
	$date = date('Y-m-d H:i:s');
	$int = 0;
	session_start();

	$sql = "UPDATE KHT_AppInAY SET
		Item_ID = ?,
		Item_No = ?,
		Item_Date = ?,
		Sam_No = ?,
		Item_Date_sam = ?,
		Request_Crim = ?,
		Related_Pers = ?,
		Respond_Civil = ?,
		Request_Civil = ?,
		Problem = ?,
		Kung = ?,
		Poy = ?,
		sathan = ?,
		Dept_Respond = ?,
		Staff_Respond = ?


        WHERE Item_No = ? AND Item_ID = ?";
        $params = array(

		$_GET["Item_ID"],
        $_GET["Item_No"],
        $_GET["Item_Date"],
		$date,
        $_GET["Sam_No"],
		$_GET["Item_Date_sam"],
		$date,
        $_GET["Request_Crim"],
        $_GET["Related_Pers"],
        $_GET["Respond_Civil"],
        $_GET["Request_Civil"],
        $_GET["Problem"],
        $_GET["Kung"],
        $_GET["Poy"],
        $_GET["sathan"],
        $_GET["Dept_Respond"],
        
        $_GET["Staff_Respond"]
	);
   
	   $stmt = sqlsrv_query($conn, $sql, $params);
	   if( $stmt === false ) {
   //	 die( print_r( sqlsrv_errors(), true));
		echo "<script>alert('ຜິດຜາດ');location.href='../basic-requetin-List.php';</script>";
	   }
	   else
	   {
		   echo "<script>alert('ບັນທຶກສຳເລັດ');location.href='../basic-requetin-List.php';</script>";
	   }

	
	 sqlsrv_close($conn);
	
?> 















