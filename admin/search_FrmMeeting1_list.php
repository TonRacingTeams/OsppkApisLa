<html>



<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table  class='table table-bordered' style="width: 363%">
                    <thead>
                    <tr align='center'>
                    <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                <th>ລະຫັດ</th>
                <th>ສະບັບເລກທີ</th>
                
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                
                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ສັນຊາດ</th>
                <th>ເພດ</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ວັນເດືອນປີຖືກຈັບຕົວ</th>
                <th>ຂໍ້ຫາການເຮັດຜິດ</th>
                <th>ລາຍລະອຽດການເຮັດຜິດ</th>
                <th>ສານຕັດສີນລົງໂທດ</th>
                <th>ລົງວັນທີ</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ (ຈຳນວນຄັ້ງ)</th>
                <th>ຈຳນວນປີ</th>
                <th>ຈຳນວນເດືອນ</th>
                <th>ປະຕິບັດໂທດແລ້ວຈັກປີ</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄພຍະໂທດປີ</th>


                <th>ຄ່າປັບໄໝ(ສະກຸນເງີນ)</th>
                <th>ຈຳນວນລວມ</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ຈຳນວນຜ່ອນ</th>
                <th>ເປີເຊັນຜ່ອນຄ່າປັບໄໝ</th>
                <th>ໝາຍເຫດ</th>

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


                <td>
                        <a href="#?narcotic_numberID=<?PHP echo $result["narcotic_numberID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmMeeting1_List.php?narcotic_numberID=<?php echo $result['narcotic_numberID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>





                        <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["narcotic_numberID"]; ?></td>
                <td align='center'><?PHP echo $result["nemeral"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_name"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_lat"]; ?></td>





                <td align='center'><?PHP echo $result["narcotic_false"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_sex"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_first_job_to_bearrested"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_Village"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_ProvinceBorn"]; ?></td>

                <?php
                $date=$result["narcotic_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["narcotic_charge"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_to_judge"]; ?></td>
                
                <?php
                $date=$result["install"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["items_time"]; ?></td>
                <td align='center'><?PHP echo $result["items_year"]; ?></td>
                <td align='center'><?PHP echo $result["items_Month"]; ?></td>
                <td align='center'><?PHP echo $result["to_act_year"]; ?></td>
                <td align='center'><?PHP echo $result["penalty_yet"]; ?></td>
                <td align='center'><?PHP echo $result["Type_penalty"]; ?></td>
                <td align='center'><?PHP echo $result["ApaiyaTol"]; ?></td>
                

                <td align='center'><?PHP echo $result["rates"]; ?></td>
                <td align='center'><?PHP echo $result["total"]; ?></td>
                <td align='center'><?PHP echo $result["paid"]; ?></td>
                <td align='center'><?PHP echo $result["yat"]; ?></td>
                <td align='center'><?PHP echo $result["in_debt"]; ?></td>
                <td align='center'><?PHP echo $result["to_reduce_sentence"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>





              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
