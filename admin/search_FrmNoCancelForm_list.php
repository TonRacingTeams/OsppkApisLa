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
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ບ້ານ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ເມືອງ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ແຂວງ)</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ເຈັບເປັນຫຍັງ </th>
                <th>ຄ້າຍຄຸມຂັງ</th>
                <th>ໂຮງໝໍ</th>
                <th>ຢູ່ບ້ານ</th>
                <th>ໝາຍເຫດ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $TotalID=$_POST['TotalID'];
        
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Totals.Takebody between '$start' and '$end'";}


                if($TotalID==""){$b="";}
                else{ $b="and (KHT_Totals.TotalID like N'%$TotalID%' or KHT_Totals.TotalID like N'$TotalID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Totals WHERE 1=1 $btw $b ";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>
            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["TotalID"]; ?></td>
                
                <?php
                $date=$result["Takebody"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>
                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                


                <td align='center'><?PHP echo $result["Sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nation"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>

                <td align='center'><?PHP echo $result["addhome"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>
                <td align='center'><?PHP echo $result["To_wrong"]; ?></td>
                <td align='center'><?PHP echo $result["whyhurt"]; ?></td>
                <td align='center'><?PHP echo $result["camp"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                <td align='center'><?PHP echo $result["addrese"]; ?></td>
                <td align='center'><?PHP echo $result["hotpital"]; ?></td>
                
                
               
               
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
