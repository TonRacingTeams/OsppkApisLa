<html>



<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table  class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align='center'>
                    <th>ລ/ດ</th>
                <th>ເລກນັບ</th>
                <th>ວັນທີຖືກຈັບ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ສັນຊາດ</th>
                <th>ເພດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການເຮັດຜິດ</th>
                <th>ສານຕັດສີນລົງໂທດ</th>
                <th>ຄ່າປັບໃໝ່(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໃໝ່(ຈ່າຍແລ້ວ)</th>
                <th>ຄ່າປັບໃໝ່(ຜ່ອນ)</th>
                <th>ຄ່າປັບໃໝ່(ຍັງເຫຼືອ)</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $narcotic_numberID=$_POST['narcotic_numberID'];

          
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_narcotic_slacken.narcotic_day_to_be_arrested between '$start' and '$end'";}


                if($narcotic_numberID==""){$b="";}
                else{ $b="and (KHT_narcotic_slacken.narcotic_numberID like N'%$narcotic_numberID%' or KHT_narcotic_slacken.narcotic_numberID like N'$narcotic_numberID%')";}


                $i=1;
                $sql = "SELECT *FROM  KHT_narcotic_slacken WHERE 1=1 $btw $b";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>
                    <tbody id="tableId">
                <tr id ="showitem">
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["narcotic_numberID"]; ?></td>
                <?php
                $date=$result["narcotic_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["narcotic_name"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_lat"]; ?></td>


                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["narcotic_false"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_sex"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_first_job_to_bearrested"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_Village"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_ProvinceBorn"]; ?></td>
                
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_charge"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_to_judge"]; ?></td>
                <td align='center'><?PHP echo $result["total"]; ?></td>
                <td align='center'><?PHP echo $result["paid"]; ?></td>
                <td align='center'><?PHP echo $result["in_debt"]; ?></td>
                <td align='center'><?PHP echo $result["yat"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>



                <?php
                $date=$result["Nar_penmoth"];
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
