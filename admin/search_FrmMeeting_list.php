<html>



<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table  class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align='center'>
                    <th>No</th>
                <th>ເລກນັບ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>

                <th>ວັນເດືອນປີໝົດໂທດ</th>
                <th>ອາຍຸເລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໃໝ(ຈ່າຍແລ້ວ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນຜ່ອນ)</th>
                <th>ຄ່າປັບໃໝ(ຍັງເຫຼືອ) </th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                    </tr>
                </thead>
                   
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
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["ConvietID"]; ?></td>
                <?php
                $date=$result["Kok_Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["Kok_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_surname"]; ?></td>

                <?php
                $date=$result["Brithday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Kok_timemake"]; ?></td>
                <td align='center'><?PHP echo $result["kok_sex"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_National"]; ?></td>
                <td align='center'><?PHP echo $result["befor_job"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Village"]; ?></td>
                <td align='center'><?PHP echo $result["befor_District"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Province"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_punish"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Total"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Beleft"]; ?></td>
                

                <?php
                $date=$result["Con_penMonth"];
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
