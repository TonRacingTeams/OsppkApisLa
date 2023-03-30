<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 250%">
                    <thead>

                    <tr align='center'>
                        <th>ລຳດັບ</th>
                        <th>ເລກທີເອກະສານ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີເຂົ້າ</th>
                        <th>ລາຍງານກ່ຽວກັບບັນຫາໃດ</th>
                        <th>ເຈົ້າຂອງບົດລາຍງານ</th>
                        <th>ພະແນກຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                    </tr>

                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Item_No=$_POST['Item_No'];
              
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and Cri_RePortIn.Item_Date between '$start' and '$end'";}


                if($Item_ID==""){$b="";}
                else{ $b="and (Cri_RePortIn.Item_ID like N'%$Item_ID%' or Cri_RePortIn.Item_ID like N'$Item_ID%')";}

                if($Item_No==""){$c="";}
                else{ $c="and (Cri_RePortIn.Item_No like N'%$Item_No%' or Cri_RePortIn.Item_No like N'$Item_No%')";}

                $i=1;
                $sql = "select *from Cri_RePortIn where 1=1 $btw $b $c";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>

                   

                    <tr>
            
                    <td align='center'><?PHP echo $result["item_Cnt"]; ?></td>
                    <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                    <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                    <?php
                    $date=$result["Item_Date"];
                    ?>
                    <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                    <td><?PHP echo $result["Request_Type"]; ?></td>
                    <td><?PHP echo $result["Request_Pers"]; ?></td>
                    <td><?PHP echo $result["Dept_Respond"]; ?></td>
                    <td><?PHP echo $result["Staff_Respond"]; ?></td>



                     </tr>

                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
