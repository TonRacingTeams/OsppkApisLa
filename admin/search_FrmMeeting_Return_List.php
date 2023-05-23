<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 336%">
                    <thead>
                    <tr align='center'>
                    <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                <th>ລະຫັດ</th>
                <th>ເລກທີ</th>
                <th>ລົງວັນທີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>

                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>

                <th>ກ່ອນຖືກຈັບ(ອາຊີບ)</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ </th>
                <th>ວັນເດືອນປີຖືກຈັບຕົວ</th>
                <th>ລາຍລະອຽດການກະທຳຜິດ</th>
                <th>ຂໍ້ຫາການກະທຳຜິດ</th>
                <th>ໄລຍະຜ່ອນໂທດ</th>


                <th>ໄດ້ຮັບຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ຈຳນວນປີ</th>
                <th>ຈຳນວນເດືອນ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ປະຕິບັດໂທດແລ້ວຈັກປີ</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄພຍະໂທດປີ</th>


                <th>ທາງແພ່ງ(ສະກຸນເງີນ)</th>
                <th>ຈຳນວນລວມ</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                

                <th>ຄ່າປັບໄໝ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ຈຳນວນຜ່ອນ</th>
                <th>ໝາຍເຫດ</th>
                
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $slacken_nameID=$_POST['slacken_nameID'];
                $nemeral=$_POST['nemeral'];
                
            
              
                


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_slacken.install between '$start' and '$end'";}


                if($slacken_nameID==""){$a="";}
                else{ $a="and (KHT_slacken.slacken_nameID like N'%$slacken_nameID%' or KHT_slacken.slacken_nameID like N'$slacken_nameID%')";}


                if($nemeral==""){$b="";}
                else{ $b="and (KHT_slacken.nemeral like N'%$nemeral%' or KHT_slacken.nemeral like N'$nemeral%')";}


                $i=1;
                $sql = "SELECT * FROM  KHT_slacken WHERE 1=1 $btw $a $b ";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>


<!-- ອະໄພຍະໂທດປ່ອຍຕົວເນື່ອງໃນໂອກາດວັນຊາດທີ 2 ທັນວາ -->




<tbody id="users">
                <tr>


                <td>
                        <a href="#?slacken_nameID=<?PHP echo $result["slacken_nameID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmMeeting_Return_List.php?slacken_nameID=<?php echo $result['slacken_nameID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




                        <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["slacken_nameID"]; ?></td>
                <td align='center'><?PHP echo $result["nemeral"]; ?></td>
                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["slacken_name"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Lat"]; ?></td>




                <td align='center'><?PHP echo $result["action_false"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_sex"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_NationNm"]; ?></td>


                <td align='center'><?PHP echo $result["slacken_first_job_to_bearrested"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Village"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_ProvinceBorn"]; ?></td>
                <?php
                $date=$result["slacken_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_charge"]; ?></td>
                <td align='center'><?PHP echo $result["comment"]; ?></td>



                <td align='center'><?PHP echo $result["items_time"]; ?></td>
                <td align='center'><?PHP echo $result["items_year"]; ?></td>
                <td align='center'><?PHP echo $result["items_Month"]; ?></td>


                <td align='center'><?PHP echo $result["slacken_to_judge"]; ?></td>
                <td align='center'><?PHP echo $result["to_act_year"]; ?></td>
                <td align='center'><?PHP echo $result["penalty_yet"]; ?></td>


                <td align='center'><?PHP echo $result["Type_penalty"]; ?></td>
                <td align='center'><?PHP echo $result["ApaiyaTol"]; ?></td>



                <td align='center'><?PHP echo $result["rates"]; ?></td>
                <td align='center'><?PHP echo $result["Cltotal"]; ?></td>
                <td align='center'><?PHP echo $result["Clpaid"]; ?></td>
                <td align='center'><?PHP echo $result["Clin_debt"]; ?></td>


                <td align='center'><?PHP echo $result["total"]; ?></td>
                <td align='center'><?PHP echo $result["paid"]; ?></td>
                <td align='center'><?PHP echo $result["yat"]; ?></td>
                <td align='center'><?PHP echo $result["in_debt"]; ?></td>
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
