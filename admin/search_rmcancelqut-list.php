<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 440%">
                    <thead>
                    <tr align='center'>
                        <th>ລ/ດ</th>
                        <th>ລະຫັດຄະດີ</th>
                        <th>ເລກທີຂາອອກ</th>
                        <th>ວັນເດືອນປີອອກ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ລັກສະນະການແກ້ໄຂ</th>
                        <th>ໂຈດທາງອາຍາ </th>
                        <th>ຈຳເລີຍ </th>
                        <th>ໂຈດທາງແພ່ງ</th>
                        <th>ບຸກຄົນທ້ສາມ</th>



                        <th>ຖືກຫາວ່າ</th>
                        <th>ວັນທີກັກຕົວ</th>
                        <th>ວັນທີປ່ອຍຕົວພາງ </th>
                        <th>ສະຖານທີ່ກັກຂັງ </th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>

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
                
                
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_AppOutAY.Item_Date between '$start' and '$end'";}


                if($Item_ID==""){$d="";}
                else{ $d="and (KHT_AppOutAY.Item_ID like N'%$Item_ID%' or KHT_AppOutAY.Item_ID like N'$Item_ID%')";}

                if($Item_No==""){$b="";}
                else{ $b="and (KHT_AppOutAY.Item_No like N'%$Item_No%' or KHT_AppOutAY.Item_No like N'$Item_No%')";}


                if($In_No==""){$b="";}
                else{ $b="and (KHT_AppOutAY.In_No like N'%$In_No%' or KHT_AppOutAY.In_No like N'$In_No%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_AppOutAY WHERE 1=1 $btw  $d ";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody id="users">

                    <tr>
                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                        
                       
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        
                        
                        <td align='center'><?PHP echo $result["In_No"]; ?></td>
                        <td><?PHP echo $result["Solv_Name"]; ?></td>
                        <td><?PHP echo $result["Request_Crim"]; ?></td>
                        <td><?PHP echo $result["Related_Pers"]; ?></td>  


                        <td><?PHP echo $result["Request_Civil"]; ?></td>
                        <td><?PHP echo $result["Respond_Civil"]; ?></td> 



                        <td><?PHP echo $result["Problem"]; ?></td>
                        <td><?PHP echo $result["Kung"]; ?></td> 
                        <td><?PHP echo $result["Poy"]; ?></td>
                        <td><?PHP echo $result["sathan"]; ?></td> 
                        <td><?PHP echo $result["Dept_Respond"]; ?></td>
                        <td><?PHP echo $result["Staff_Respond"]; ?></td> 
                        <td><?PHP echo $result["Cnt"]; ?></td>
                        


                        <td align='center'>
           
                        <a href="#?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        
                        </td>
                        <td align='center'>
                        <a href="pages/delete_rmcancelqut.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
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
