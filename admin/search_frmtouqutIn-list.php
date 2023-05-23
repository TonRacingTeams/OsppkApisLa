<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 236%">
                    <thead>
                    <tr align='center'>
                    
                    <th>ແກ້ໄຂ</th>
                      <th>ລົບ</th>
                        <th>ລຳດັບ</th>
                        <th>ເລກທີເອກະສານ</th>
                        <th>ເລກທີຂາອອກ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ລະຫັດຄະດີຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີອອກ</th>
                        <th>ປະເພດຄຳຮ້ອງ</th>
                        <th>ເຈົ້າຂອງຄຳຮ້ອງ</th>
                        <th>ລັກສະນະການແກ້ໄຂ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                        <th>ບ່ອນສົ່ງ</th>
                        <th>Cnt</th>
                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Item_No=$_POST['Item_No'];
                $In_No=$_POST['In_No'];
                $Referno=$_POST['Referno'];
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_ReQuestOutPh.Item_Date between '$start' and '$end'";}


                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_ReQuestOutPh.Item_ID like N'%$Item_ID%' or KHT_ReQuestOutPh.Item_ID like N'$Item_ID%')";}

                if($Item_No==""){$a="";}
                else{ $a="and (KHT_ReQuestOutPh.Item_No like N'%$Item_No%' or KHT_ReQuestOutPh.Item_No like N'$Item_No%')";}

                if($In_No==""){$c="";}
                else{ $c="and (KHT_ReQuestOutPh.In_No like N'%$In_No%' or KHT_ReQuestOutPh.In_No like N'$In_No%')";}

                if($Referno==""){$d="";}
                else{ $d="and (KHT_ReQuestOutPh.Referno like N'%$Referno%' or KHT_ReQuestOutPh.Referno like N'$Referno%')";}
               


                $i=1;
                $sql = "SELECT * FROM KHT_ReQuestOutPh WHERE 1=1 $btw $a $b $c $d ";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                        <tr>


                        <td align='center'>
                        <a href="#?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_frmtouqutIn-list.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




                        <td align='center'><?PHP echo $result["item_Cnt"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                        <td><?PHP echo $result["Item_No"]; ?></td>
                        <td><?PHP echo $result["In_No"]; ?></td>
                        <td><?PHP echo $result["Referno"]; ?></td>
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        
                        
                        <td><?PHP echo $result["Request_Type"]; ?></td>
                        <td><?PHP echo $result["Request_Pers"]; ?></td>
                        <td><?PHP echo $result["Solv_Name"]; ?></td>
                        <td><?PHP echo $result["Dept_Respond"]; ?></td>
                        <td><?PHP echo $result["Staff_Respond"]; ?></td>
                        <td><?PHP echo $result["Send_To"]; ?></td>
                        <td><?PHP echo $result["Cnt"]; ?></td>

                        
                  
                     
                    
                    </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
