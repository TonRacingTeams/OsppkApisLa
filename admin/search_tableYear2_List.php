<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 663%">
                    <thead>
                    <tr>
                    <th>ແກ້ໄຂ</th>
                        <th>ລົບ</th>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດແບບຟອມ</th>
                        <th>ເລກທີ</th>
                        <th>ວັນເດືອນປີ </th>
                        <th>ອີງຕາມ</th>
                        <th>ລະຫວ່າງ</th>
                        <th>ດ້ວຍເຫດນີ້ </th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Item_No=$_POST['Item_No'];
                
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_AppDecisionPh.Item_Date between '$start' and '$end'";}


                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_AppDecisionPh.Item_ID like N'%$Item_ID%' or KHT_AppDecisionPh.Item_ID like N'$Item_ID%')";}


                if($Item_No==""){$d="";}
                else{ $d="and (KHT_AppDecisionPh.Item_No like N'%$Item_No%' or KHT_AppDecisionPh.Item_No like N'$Item_No%')";}




                $i=1;
                $sql = "SELECT * FROM KHT_AppDecisionPh WHERE 1=1 $btw $b $d ";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                      <tr>
                     
                       
                      <td>
                        <a href="#?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_tableYear2_List.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>
                       
                      
                        <td><?PHP echo $result["Item_Cnt"]; ?></td>
                        <td><?PHP echo $result["Item_ID"]; ?></td>
                        <td><?PHP echo $result["Item_No"]; ?></td>
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td><?PHP echo date_format($date,'d/m/Y');?></td>


                        <td><?PHP echo $result["Refer_To"]; ?></td>
                        <td><?PHP echo $result["Related_Pers"]; ?></td>
                        <td><?PHP echo $result["Conclution"]; ?></td>

                       
                      
                      </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
