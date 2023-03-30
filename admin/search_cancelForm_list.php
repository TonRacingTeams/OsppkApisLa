<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 250%">
                    <thead>
                    <tr align='center'>
                    <th>No</th>
                <th>ເລກນັບ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ທາງແພ່ງ(ຈຳນວນລວມ)</th>
                <th>ທາງແພ່ງ(ຈ່າຍແລ້ວ)</th>

                <th>ທາງແພ່ງ(ຍັງເຫຼືອ)</th>
                <th>ຄ່າປັບໄໝ(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໄໝ(ຈ່າຍແລ້ວ)</th>

                <th>ຄ່າປັບໄໝ(ຍັງເຫຼືອ)</th>
                <th>ເລກທີ</th>
                <th>ວັນທີໝົດໂທດ</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $releaseID=$_POST['releaseID'];
        
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_release.DTakebody between '$start' and '$end'";}


                if($releaseID==""){$b="";}
                else{ $b="and (KHT_release.releaseID like N'%$releaseID%' or KHT_release.releaseID like N'$releaseID%')";}

                $i=1;
                $sql = "SELECT * FROM KHT_release WHERE 1=1 $btw $b ";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>
            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["releaseID"]; ?></td>
                
                <?php
                $date=$result["DTakebody"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>



                <td align='center'><?PHP echo $result["Sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nationality"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>
                <td align='center'><?PHP echo $result["addhome"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>

                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Punish"]; ?></td>
                <td align='center'><?PHP echo $result["wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Law_Total"]; ?></td>
                <td align='center'><?PHP echo $result["Law_paid"]; ?></td>


                <!-- <td align='center'><?PHP echo $result["Law_Beleft"]; ?></td> -->
                <td align='center'><?PHP echo $result["Total"]; ?></td>
                <td align='center'><?PHP echo $result["Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft"]; ?></td>
                <td align='center'><?PHP echo $result["Nocount"]; ?></td>
                

                

                <?php
                $date=$result["Dday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Remark"]; ?></td>


                <?php
                $date=$result["Rel_penMonth"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
               
               
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
