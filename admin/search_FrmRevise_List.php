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
                <th>ສັນຊາດ</th>
                <th>ເພດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ທາງແພ່ງ(ຈຳນວນລວມ)</th>



                <th>ທາງແພ່ງ(ຈ່າຍແລ້ວ)</th>
                <th>ທາງແພ່ງ(ຍັງເຫຼືອ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ທາງແພ່ງ(ຈ່າຍແລ້ວ)</th>

                
                <th>ທາງແພ່ງ(ຍັງເຫຼືອ)</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $PrisonerID=$_POST['PrisonerID'];
        
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_prisoner.Darrest between '$start' and '$end'";}



                if($PrisonerID==""){$b="";}
                else{ $b="and (KHT_prisoner.PrisonerID like N'%$PrisonerID%' or KHT_prisoner.PrisonerID like N'$PrisonerID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_prisoner WHERE 1=1 $btw $b ";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>
            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["PrisonerID"]; ?></td>
                
                <?php
                $date=$result["Darrest"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["Lastname"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>



                <td align='center'><?PHP echo $result["Nationality"]; ?></td>
                <td align='center'><?PHP echo $result["sex"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>
                <td align='center'><?PHP echo $result["Village"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>

                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Punish"]; ?></td>
                <td align='center'><?PHP echo $result["Reform"]; ?></td>
                <td align='center'><?PHP echo $result["Wrong"]; ?></td>
                <td align='center'><?PHP echo $result["law_paid"]; ?></td>


                <td align='center'><?PHP echo $result["law_beleft"]; ?></td>
                <td align='center'><?PHP echo $result["P_Total"]; ?></td>
                <td align='center'><?PHP echo $result["p_paid"]; ?></td>
                <td align='center'><?PHP echo $result["P_beleft"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                

                

                <?php
                $date=$result["Pri_penMonth"];
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
