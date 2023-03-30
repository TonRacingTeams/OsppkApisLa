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
                <th>ລະຫັດ</th>
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
                <th>ກຳນົດດັດສ້າງ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ຜູ້ຖືກດັດສ້າງ</th>
                <th>ວັນເດືອນປີໝົດກຳນົດ</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $DisID=$_POST['DisID'];
        
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Discipline.Dreform between '$start' and '$end'";}


                if($DisID==""){$b="";}
                else{ $b="and (KHT_Discipline.DisID like N'%$DisID%' or KHT_Discipline.DisID like N'$DisID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Discipline WHERE 1=1 $btw $b";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>
            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["DisID"]; ?></td>
                
                <?php
                $date=$result["Dreform"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>



                <td align='center'><?PHP echo $result["sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nationality"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>
                <td align='center'><?PHP echo $result["Addhome"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>


                <td align='center'><?PHP echo $result["Judge"]; ?></td>
                <td align='center'><?PHP echo $result["Datefor"]; ?></td>


                <td align='center'><?PHP echo $result["Wrong"]; ?></td>
                <td align='center'><?PHP echo $result["parentdeposit"]; ?></td>
                
                


                <?php
                $date=$result["Dtimeups"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>





                <td align='center'><?PHP echo $result["Reform"]; ?></td>



                <?php
                $date=$result["Dis_penMonth"];
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
