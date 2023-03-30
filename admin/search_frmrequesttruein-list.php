<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 250%">
                    <thead>
                    <tr align='center'>
                    <th>ລຳດັບ</th>
                        <th>ລຳດັບ</th>
                        <th>ເລກທີເອກະສານ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີເຂົ້າ</th>
                        <th>ປະເພດຄຳຮ້ອງ</th>
                        <th>ເຈົ້າຂອງຄຳຮ້ອງ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                        <th>Cnt</th>
                        
                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_No=$_POST['Item_No'];
                $Item_ID=$_POST['Item_ID'];
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_ReQuestInPh.Item_Date between '$start' and '$end'";}


              

                if($Item_No==""){$b="";}
                else{ $b="and (KHT_ReQuestInPh.Item_No like N'%$Item_No%' or KHT_ReQuestInPh.Item_No like N'$Item_No%')";}

                if($Item_ID==""){$d="";}
                else{ $d="and (KHT_ReQuestInPh.Item_ID like N'%$Item_ID%' or KHT_ReQuestInPh.Item_ID like N'$Item_ID%')";}

               


                $i=1;
                $sql = "SELECT * FROM KHT_ReQuestInPh WHERE 1=1 $btw  $d ";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>

                    <tr>
                    <td align='center'><?PHP echo $i; ?></td>
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


                        <td><?PHP echo $result["Cnt"]; ?></td>
                        
                 
                        <td align='center'>
                        <a href="#?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_frmrequesttrueIn.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>
                    </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
