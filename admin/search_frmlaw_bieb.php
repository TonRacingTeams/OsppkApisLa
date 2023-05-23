<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 595%">
                    <thead>
                    <tr align='center'>
                   

                    <th>ໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລະຫັດກອງປະຊຸມສານ</th>
                <th>ວັນເດືອນປີເຂົ້າຮ່ວມປະຊູມ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ກ່ຽວເລື່ອງ</th>
                <th>ໂຈດ</th>
                <th>ຈຳເລີຍ</th>
                <th>ບຸກຄົນທີສາມ</th>
                <th>ຜູ້ຖະແຫຼງຕໍ່ສານ</th>
                <th>ຜົນການຕັດສິນຂອງສານ </th>


                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Case_ID=$_POST['Case_ID'];
            
            

                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_CanMeetingPh_Case.Item_Date between '$start' and '$end'";}



                if($Item_ID==""){$a="";}
                else{ $a="and (KHT_CanMeetingPh_Case.Item_ID like N'%$Item_ID%' or KHT_CanMeetingPh_Case.Item_ID like N'$Item_ID%')";}

        
                if($Case_ID==""){$b="";}
                else{ $b="and (KHT_CanMeetingPh_Case.Case_ID like N'%$Case_ID%' or KHT_CanMeetingPh_Case.Case_ID like N'$Case_ID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_CanMeetingPh_Case WHERE 1=1 $btw $a $b ";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>



                <td align='center'>
           
                <a href="cv/<?PHP echo $result["Item_ID"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
           
                </td>

                <td align='center'>
           
                <a href="pages/Update_Law_file.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_files.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>



                
                
                <td><?PHP echo $result["Item_ID"]; ?></td>
                

                <?php
                $date=$result["Item_Date"];
                ?>
                <td><?PHP echo date_format($date,'d/m/Y');?></td>


                <td><?PHP echo $result["Case_ID"]; ?></td>
                <td><?PHP echo $result["Problem"]; ?></td>
                
                <td><?PHP echo $result["Request_Civil"]; ?></td>

                <td><?PHP echo $result["Respond_Civil"]; ?></td>
                <td><?PHP echo $result["Related_Pers"]; ?></td>
                
                <td><?PHP echo $result["Pers_Name"]; ?></td>
                <td><?PHP echo $result["Solv_Name"]; ?></td>


                


              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
