<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr>
                    <th>No</th>
                <th>ເລກນັບ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ອາຍຸເລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນປີ)</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນນເດືອນ)</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄພຍະໂທດປີ</th>
                <th>ທາງແພ່ງ(ຈຳນວນລວມ)</th>
                <th>ທາງແພ່ງ(ຈ່າຍແລ້ວ)</th>
                <th>ທາງແພ່ງ(ຍັງເຫຼືອ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໃໝ(ຈ່າຍແລ້ວ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນຜ່ອນ)</th>
                <th>ຄ່າປັບໃໝ(ຍັງເຫຼືອ)</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $sentenceID=$_POST['sentenceID'];
                
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Sentence.Dtouch between '$start' and '$end'";}


                if($sentenceID==""){$b="";}
                else{ $b="and (KHT_Sentence.sentenceID like N'%$sentenceID%' or KHT_Sentence.sentenceID like N'$sentenceID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Sentence WHERE 1=1 $btw $b ";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr>

                <td align='center'><?PHP echo $result["Khet_ID"]; ?></td>
                <td align='center'><?PHP echo $result["sentenceID"]; ?></td>
                <?php
                $date=$result["Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>


                <?php
                $date=$result["birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Timetake"]; ?></td>
                <td align='center'><?PHP echo $result["Sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nation"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>
                <td align='center'><?PHP echo $result["Village"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>

                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Punish"]; ?></td>
                <td align='center'><?PHP echo $result["wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Last_time"]; ?></td>
                <td align='center'><?PHP echo $result["N_year"]; ?></td>
                <td align='center'><?PHP echo $result["N_month"]; ?></td>
                
                 


                <td align='center'><?PHP echo $result["Date_for"]; ?></td>
                <td align='center'><?PHP echo $result["amnesty"]; ?></td>
                <td align='center'><?PHP echo $result["Total"]; ?></td>
                <td align='center'><?PHP echo $result["Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft"]; ?></td>
                <td align='center'><?PHP echo $result["Total1"]; ?></td>
                <td align='center'><?PHP echo $result["Paid1"]; ?></td>
                <td align='center'><?PHP echo $result["slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft1"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                



                <?php
                $date=$result["Sen_penMonth"];
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
