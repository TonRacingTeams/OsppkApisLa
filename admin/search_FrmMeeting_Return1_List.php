<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 259%">
                    <thead>


                    <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                <th>ລະຫັດ</th>
                <th>ຊື່ນັກໂທດ</th>
                <th>ນາມສະກຸນ</th>
                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ຈຳນວນຄັ້ງ</th>
                <th>ຈຳນວນປີ</th>
                <th>ຈຳນນເດືອນ</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄພຍະໂທດປີ</th>
                <th>ທາງແພ່ງ(ສະກຸນເງີນ)</th>
                <th>ຈຳນວນລວມ</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>

                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຈຳນວນຜ່ອນ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ໝາຍເຫດ</th>
                
                </tr>




                    <!-- <tr>
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
               
                </tr> -->
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $sentenceID=$_POST['sentenceID'];
                $Name=$_POST['Name'];
                $LastName=$_POST['LastName'];
                
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Sentence.Dtouch between '$start' and '$end'";}


                if($sentenceID==""){$a="";}
                else{ $a="and (KHT_Sentence.sentenceID like N'%$sentenceID%' or KHT_Sentence.sentenceID like N'$sentenceID%')";}

                if($Name==""){$b="";}
                else{ $b="and (KHT_Sentence.Name like N'%$Name%' or KHT_Sentence.Name like N'$Name%')";}

                if($sentenceID==""){$c="";}
                else{ $c="and (KHT_Sentence.LastName like N'%$LastName%' or KHT_Sentence.LastName like N'$LastName%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Sentence WHERE 1=1 $btw $a $b $c";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>


                <td>
                        <a href="#?sentenceID=<?PHP echo $result["sentenceID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmMeeting_Return1_List.php?sentenceID=<?php echo $result['sentenceID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




                <td><?PHP echo $result["Khet_ID"]; ?></td>
                <td><?PHP echo $result["sentenceID"]; ?></td>
                <td><?PHP echo $result["Name"]; ?></td>
                <td><?PHP echo $result["LastName"]; ?></td>
                <td><?PHP echo $result["Timetake"]; ?></td>
                <td><?PHP echo $result["Sex"]; ?></td>
                <td><?PHP echo $result["Nation"]; ?></td>
                <td><?PHP echo $result["Job"]; ?></td>
                <td><?PHP echo $result["Village"]; ?></td>
                <td><?PHP echo $result["District"]; ?></td>
                <td><?PHP echo $result["Province"]; ?></td>

                <?php
                $date=$result["Dtouch"];
                ?>
                <td><?PHP echo date_format($date,'d/m/Y');?></td>

                <td><?PHP echo $result["wrongdetail"]; ?></td>
                <td><?PHP echo $result["wrong"]; ?></td>
                <td><?PHP echo $result["Last_time"]; ?></td>
                <td><?PHP echo $result["N_year"]; ?></td>
                <td><?PHP echo $result["N_month"]; ?></td>
                <td><?PHP echo $result["Re_main"]; ?></td>
                <td><?PHP echo $result["Date_for"]; ?></td>
                <td><?PHP echo $result["amnesty"]; ?></td>

                <td><?PHP echo $result["rates"]; ?></td>
                <td><?PHP echo $result["Total"]; ?></td>
                <td><?PHP echo $result["Paid"]; ?></td>
                <td><?PHP echo $result["Beleft"]; ?></td>
                <td><?PHP echo $result["Total1"]; ?></td>
                <td><?PHP echo $result["Paid1"]; ?></td>
                <td><?PHP echo $result["slacken"]; ?></td>
                <td><?PHP echo $result["Beleft1"]; ?></td>
                <td><?PHP echo $result["Punish"]; ?></td>
                <td><?PHP echo $result["Remark"]; ?></td>
            
                
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
