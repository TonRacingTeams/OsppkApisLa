<!-- <?php
    include '../server/connect.php'; 

	if(is_array($_FILES)){
		if(is_uploaded_file($_FILES['File_Name']['tmp_name']) == ""){
		}else{
			$joe = $_FILES['File_Name']['tmp_name'];
			$namecv = $_FILES['File_Name']['name'];
			$data = "../cv/".$_FILES['File_Name']['name'];
			if(move_uploaded_file($joe,$data)){



	
	 $sql = "INSERT INTO KHT_CanMeetingAY ( Item_ID, Item_Date, Person_Cnt, Case_Cnt)
     VALUES (?, ?, ?, ?, ?, ?)";
	 $params = array(
           
           $_POST["Item_ID"],
           $_POST["Item_Date"],
		   $_POST["Person_Cnt"],
           $_POST["Case_Cnt"],
		   $namecv
          
     );

	$stmt = sqlsrv_query($conn, $sql, $params);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "<script>alert('ບັນທຶກສຳເລັດ');location.href='../basic-FrmLaw_Files.php';</script>";
	}
}
}
}

	sqlsrv_close($conn);
	
?> -->
