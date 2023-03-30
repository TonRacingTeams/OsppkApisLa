<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                    <thead>
                    <tr align='center'>
               
                <th>ໂຫຼດຂໍ້ມູນ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ວັນທີ</th>
                <th>ຖືກຫາວ່າ</th>
                <th>ໂຈດທາງອາຍາ</th>
                <th>ໂຈດທາງແພ່ງ</th>
                <th>ບຸກຄົນທີສາມ</th>
                <th>ຈຳເລີຍ</th>
                <th>ຜົນການຕັດສິນຂອງສານ </th>
                <th>ຜູ້ຖະແຫຼງຕໍ່ສານ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Case_ID=$_POST['Case_ID'];
            
            

                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_CanMeetingAY_Case.Item_Date between '$start' and '$end'";}



                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_CanMeetingAY_Case.Item_ID like N'%$Item_ID%' or KHT_CanMeetingAY_Case.Item_ID like N'$Item_ID%')";}


                if($Case_ID==""){$d="";}
                else{ $d="and (KHT_CanMeetingAY_Case.Case_ID like N'%$Case_ID%' or KHT_CanMeetingAY_Case.Case_ID like N'$Case_ID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_CanMeetingAY_Case WHERE 1=1 $btw $b $d";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>


                <td align='center'>
           
                <a href="cv/<?PHP echo $result["File_Name"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
           
                </td>

                <td align='center'>
           
                <a href="pages/Update_Law_file.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_files.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>


            
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                <td align='center'><?PHP echo $result["Case_ID"]; ?></td>


                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Problem"]; ?></td>
                <td align='center'><?PHP echo $result["Request_Crim"]; ?></td>
                <td align='center'><?PHP echo $result["Request_Civil"]; ?></td>

                <td align='center'><?PHP echo $result["Respond_Civil"]; ?></td>
                <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                <td align='center'><?PHP echo $result["Solv_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Pers_Name"]; ?></td>


                
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
