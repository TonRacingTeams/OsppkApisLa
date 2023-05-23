<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 136%">
                    <thead>

                    <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ລະຫັດຜູ້ຖືກຫາ</th>
                <th>ວັນເດືອນປີກໍ່ອາສະຍາກຳ</th>
                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                <th>ປະເພດ ແລະ ສະຖານການກະທຳຜີດ</th>
                <th>ອາຍຸ</th>
                <th>ເພດ</th>
                <th>ອາຊີບ</th>
                <th>ຊົນເຜົ່າ</th>
                <th>ເຊື້ອຊາດ</th>
                <th>ສັນຊາດ</th>
                <th>ປະເທດ</th>
                <th>ອຸປະກອນການໃຊ້ກະທຳຜິດ</th>
                <th>ສາເຫດ</th>
                
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Item_IDNew=$_POST['Item_IDNew'];
                $Pers_Name=$_POST['Pers_Name'];
              
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Criminal_Pers.Item_Date between '$start' and '$end'";}

                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_Criminal_Pers.Item_ID like N'%$Item_ID%' or KHT_Criminal_Pers.Item_ID like N'$Item_ID%')";}

                if($Item_IDNew==""){$c="";}
                else{ $c="and (KHT_Criminal_Pers.Item_IDNew like N'%$Item_IDNew%' or KHT_Criminal_Pers.Item_IDNew like N'$Item_IDNew%')";}

                if($Pers_Name==""){$d="";}
                else{ $d="and (KHT_Criminal_Pers.Pers_Name like N'%$Pers_Name%' or KHT_Criminal_Pers.Pers_Name like N'$Pers_Name%')";}

                $i=1;
                $sql = "SELECT * FROM KHT_Criminal_Pers WHERE 1=1 $btw $b $c $d";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr>


                <td>
                        <a href="#?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmReportOut_List.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທ່ານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                <td align='center'><?PHP echo $result["Item_IDNew"]; ?></td>
                
                
                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
                <td align='center'><?PHP echo $result["Pers_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Problem"]; ?></td>
                <td align='center'><?PHP echo $result["Age"]; ?></td>
                <td align='center'><?PHP echo $result["Gender"]; ?></td>
                <td align='center'><?PHP echo $result["Professional"]; ?></td>
                <td align='center'><?PHP echo $result["Race"]; ?></td>
                <td align='center'><?PHP echo $result["Original"]; ?></td>
                <td align='center'><?PHP echo $result["Nationallity"]; ?></td>
                <td align='center'><?PHP echo $result["Country"]; ?></td>
                <td align='center'><?PHP echo $result["Used_Tool"]; ?></td>
                <td align='center'><?PHP echo $result["Resion"]; ?></td>
                
                
                
                


            
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
