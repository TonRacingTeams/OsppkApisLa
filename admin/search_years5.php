<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>


                <div id='showa' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align="center">
                    <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                <th>ລະຫັດ</th>
                <th>ເລກນັບ</th>
                <th>ລາຍການຂໍ້ມູນ</th>
                <th>ຈຳນວນຍອດຂ້າງມາ</th>
                <th>ປີ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                
                //  $start=$_POST['start'];
                //  $end=$_POST['end'];
                $Year_Data=$_POST['Year_Data'];
                


                // if($start=="" or $end==""){$btw="";}
                // else{ $btw="and Khet_Open.Year_Data between '$start' and '$end'";}


               if($Year_Data==""){$d="";}
               else{ $d="and (Khet_Open.Year_Data like N'%$Year_Data%' or Khet_Open.Year_Data like N'$Year_Data%')";}

                $i=1;
                // $d = date("Y"); 
                $sql = "SELECT * FROM Khet_Open WHERE 1=1 $d ";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr> 
                  
                
                <td>
                <a href="pages/Update_FrmRptCrm_Yearly5.php?Prov_ID=<?PHP echo $result["Prov_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
           
                </td>
                <td align='center'>
                <a href="pages/Delete_FrmRptCrm_Yearly5.php?Prov_ID=<?php echo $result['Prov_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>



                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Prov_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <td><?PHP echo $result["Description"]; ?></td>
                        
                        <td align='center'><?PHP echo $result["Quantity"]; ?></td>
                        <td align='center'><?PHP echo $result["Year_Data"]; ?></td>

               

                </tr>
                </tbody>
                    <?php
                  }
                  ?>

                  <br>

                </table>
                </div>
	</body>
</html>
