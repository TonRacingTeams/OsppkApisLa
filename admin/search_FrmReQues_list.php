<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 200%">
                    <thead>
                    <tr>
                    <th>ລຳດັບ</th>
                    <th>ລະຫັດ</th>
                    <th>ເລກທີທວງສຳນວນ</th>
                    <th>ວັນເດືອນປີ</th>
                    <th>ອີງຕາມ</th>
                    <th>ລະຫວ່າງ</th>
                  </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
               
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and Cri_ReQues.Item_Date between '$start' and '$end'";}

                $i=1;
                $sql = "select *from Cri_ReQues where 1=1 $btw";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody> 

                    <tr>
                    <td align='center'><?PHP echo $result["Item_Cnt"]; ?></td>
                    <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                    <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                    <?php
                    $date=$result["Item_Date"];
                    ?>
                    <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                    <td><?PHP echo $result["Refer_To"]; ?></td>
                    <td><?PHP echo $result["Cases"]; ?></td>
                    </tr>

                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
