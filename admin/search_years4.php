<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>


                <div id='showa' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 123%">
                    <thead>
                    <tr align="center">
                    <th>ແກ້ໄຂ</th>
                    <th>ລົບ</th>  
                    <th>ລ/ດ</th>
                        <th>ເລກນັບ</th>
                        <th>ລາຍການຂໍ້ມູນ</th>
                        <th>ເດືອນ1</th>
                        <th>ເດືອນ2</th>
                        <th>ເດືອນ3</th>
                        <th>ເດືອນ4</th>
                        <th>ເດືອນ5</th>
                        <th>ເດືອນ6</th>
                        <th>ເດືອນ7</th>
                        <th>ເດືອນ8</th>
                        <th>ເດືອນ9</th>
                        <th>ເດືອນ10</th>
                        <th>ເດືອນ11</th>
                        <th>ເດືອນ12</th>
                        <th>ປີ</th>
                        <th>ໝາຍເຫດ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                
                //  $start=$_POST['start'];
                //  $end=$_POST['end'];
                $Year_Data=$_POST['Year_Data'];
                


                // if($start=="" or $end==""){$btw="";}
                // else{ $btw="and Khet_Rpt.Year_Data between '$start' and '$end'";}


               if($Year_Data==""){$d="";}
               else{ $d="and (Khet_Rpt.Year_Data like N'%$Year_Data%' or Khet_Rpt.Year_Data like N'$Year_Data%')";}

                $i=1;
                $sql = "SELECT * FROM Khet_Rpt WHERE 1=1 $d ";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr> 
                  
                
                <td align='center'>
      
           <a href="pages/Update_FrmRptCrm_Yearly4.php?Rpt_ID=<?PHP echo $result["Rpt_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
           
           </td>
           <td align='center'>
           <a href="pages/Delete_FrmRptCrm_Yearly4.php?Rpt_ID=<?php echo $result['Rpt_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
           </td>


                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <!-- <td align='center'><?PHP echo $result["Rpt_ID"]; ?></td> -->
                        <td><?PHP echo $result["Description"]; ?></td>
                        <td><?PHP echo $result["M1"]; ?></td>
                        <td><?PHP echo $result["M2"]; ?></td>
                        <td><?PHP echo $result["M3"]; ?></td>
                        <td><?PHP echo $result["M4"]; ?></td>
                        <td><?PHP echo $result["M5"]; ?></td>
                        <td><?PHP echo $result["M6"]; ?></td>
                        <td><?PHP echo $result["M7"]; ?></td>
                        <td><?PHP echo $result["M8"]; ?></td>
                        <td><?PHP echo $result["M9"]; ?></td>
                        <td><?PHP echo $result["M10"]; ?></td>
                        <td><?PHP echo $result["M11"]; ?></td>
                        <td><?PHP echo $result["M12"]; ?></td>
                        <td><?PHP echo $result["Year_Data"]; ?></td>
                        <td><?PHP echo $result["Khet_No"]; ?></td>

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
