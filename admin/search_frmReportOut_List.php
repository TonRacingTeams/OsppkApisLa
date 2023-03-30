<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 200%">
                    <thead>

                    <tr align='center'>
                    <th>ລຳດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ວັນເດືອນປີ</th>
                <th>ຊື່ຄະດີການກໍ່ອາຊະຍາກຳ</th>
                <th>ຈຳນວນຜູ້ຖືກຫາ</th>
                <th>ເຂດ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $ProvinceCode=$_POST['ProvinceCode'];
              
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Criminal.Item_Date between '$start' and '$end'";}

                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_Criminal.Item_ID like N'%$Item_ID%' or KHT_Criminal.Item_ID like N'$Item_ID%')";}

                if($ProvinceCode==""){$c="";}
                else{ $c="and (KHT_Criminal.ProvinceCode like N'%$ProvinceCode%' or KHT_Criminal.ProvinceCode like N'$ProvinceCode%')";}

                $i=1;
                $sql = "SELECT * FROM KHT_Criminal WHERE 1=1 $btw $b $c";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr>
            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                
                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
                <td align='center'><?PHP echo $result["Problem"]; ?></td>
                <td align='center'><?PHP echo $result["Pers_Cnt"]; ?></td>
                
                <td align='center'><?PHP echo $result["ProvinceCode"]; ?></td>
                
                
                
                


            
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
