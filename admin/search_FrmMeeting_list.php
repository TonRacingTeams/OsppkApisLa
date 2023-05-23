<html>



<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table  class='table table-bordered' style="width: 236%">
                    <thead>
                    <tr align='center'>
                    <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດ</th>
                <th>ຊື່ນັກໂທດ</th>
                <th>ນາມສະກຸນ</th>
                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>


                <th>ກ່ອນຖືກ(ອາຊີບ)</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ຂໍ້ຫາການກະທຳຜິດ</th>
                <th>ວັນເດືອນປີຖືກຈັບຕົວ</th>


                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ຈຳນວນປີ</th>
                <th>ຈັກເດືອນ</th>
                <th>ປະເພດດັດສ້າງ</th>


                <th>ທາງແພ່ງ(ສະກຸນເງີນ)</th>
                <th>ຈຳນວນລວມ</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ວັນເດືອນປີໝົດໂທດ</th>




                <th>ຄ່າປັບໄໝ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຈຳນວນຜ່ອນ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ໝາຍເຫດ</th>
                
                    </tr>
                </thead>


                <!-- ປ່ອຍຕົວຕາມມາດຕາ 105 -->
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $ConvietID=$_POST['ConvietID'];

          
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Conviet_105.Kok_Dtouch between '$start' and '$end'";}


                if($ConvietID==""){$b="";}
                else{ $b="and (KHT_Conviet_105.ConvietID like N'%$ConvietID%' or KHT_Conviet_105.ConvietID like N'$ConvietID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Conviet_105 WHERE 1=1 $btw $b";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>
                    <tbody id="users">
                <tr>


                <td>
                        <a href="#?ConvietID=<?PHP echo $result["ConvietID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmMeeting_List.php?ConvietID=<?php echo $result['ConvietID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




                        <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["ConvietID"]; ?></td>


                <td align='center'><?PHP echo $result["Kok_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_surname"]; ?></td>




                <td align='center'><?PHP echo $result["Kok_timemake"]; ?></td>
                <td align='center'><?PHP echo $result["kok_sex"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_National"]; ?></td>
                <td align='center'><?PHP echo $result["befor_job"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Village"]; ?></td>
                <td align='center'><?PHP echo $result["befor_District"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Province"]; ?></td>
                
                <td align='center'><?PHP echo $result["Kok_punish"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>


                <?php
                $date=$result["Kok_Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Con_count"]; ?></td>
                <td align='center'><?PHP echo $result["Con_year"]; ?></td>
                <td align='center'><?PHP echo $result["Con_month"]; ?></td>
                <td align='center'><?PHP echo $result["Con_Datefor"]; ?></td>

                <td align='center'><?PHP echo $result["rates"]; ?></td>
                <td align='center'><?PHP echo $result["Total"]; ?></td>
                <td align='center'><?PHP echo $result["Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Beleft"]; ?></td>

                <?php
                $date=$result["Brithday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                <td align='center'><?PHP echo $result["Kok_Total"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Beleft"]; ?></td>
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
