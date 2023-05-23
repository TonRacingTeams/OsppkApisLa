<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 636%">
                    <thead>
                    <tr align='center'>
                    <th>ແກ້ໄຂ</th>
                      <th>ລົບ</th>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດຄະດີ</th>
                        <th>ເລກທີຂາອອກ</th>
                        <th>ວັນເດືອນປີອອກ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ລັກສະນະການແກ້ໄຂ </th>
                        <th>ກ່ຽວເລື່ອງ</th>
                        <th>ໂຈດ</th>
                        <th>ຈຳເລີຍ</th>
                        <th>ບຸກຄົນທີສາມ</th>



                        <th>ບ່ອນສົ່ງ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອຍ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_No=$_POST['Item_No'];
                $Item_ID=$_POST['Item_ID'];
                $In_No=$_POST['In_No'];
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_AppOutPh.Item_Date between '$start' and '$end'";}


              

                if($Item_No==""){$a="";}
                else{ $a="and (KHT_AppOutPh.Item_No like N'%$Item_No%' or KHT_AppOutPh.Item_No like N'$Item_No%')";}

                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_AppOutPh.Item_ID like N'%$Item_ID%' or KHT_AppOutPh.Item_ID like N'$Item_ID%')";}


                if($In_No==""){$d="";}
                else{ $d="and (KHT_AppOutPh.In_No like N'%$In_No%' or KHT_AppOutPh.In_No like N'$In_No%')";}

               


                $i=1;
                $sql = "SELECT * FROM KHT_AppOutPh WHERE 1=1 $btw $a $b $d ";
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
                        <a href="pages/delete_frmreturnqut_list.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td align='center'><?PHP echo $result["In_No"]; ?></td>
                        <td align='center'><?PHP echo $result["Solv_Name"]; ?></td>
                        <td align='center'><?PHP echo $result["Problem"]; ?></td>
                        <td align='center'><?PHP echo $result["Request_Civil"]; ?></td>
                        <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                        <td align='center'><?PHP echo $result["Respond_Civil"]; ?></td>



                        <td align='center'><?PHP echo $result["Out_Comment"]; ?></td>
                        <td align='center'><?PHP echo $result["Dept_Respond"]; ?></td>
                        <td align='center'><?PHP echo $result["Staff_Respond"]; ?></td>
                        
                      
                     
                      </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
