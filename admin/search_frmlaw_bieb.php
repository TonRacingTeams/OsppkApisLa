<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                    <thead>
                    <tr align='center'>
                   

                    <th>ອັບໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                    <th>ລຳດັບ</th>
                <th>ເລກທີກອງປະຊຸມ</th>
                <th>ວັນເດືອນປີ </th>
                <th>ຈຳນວນຜູ້ເຂົ້າຮ່ວມ</th>
                <th>ຈຳນວນຄະດີຖະແຫຼງ</th>
                <th>Cnt</th>


                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
            
            

                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_CanMeetingPh.Kok_Dtouch between '$start' and '$end'";}



                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_CanMeetingPh.Item_ID like N'%$Item_ID%' or KHT_CanMeetingPh.Item_ID like N'$Item_ID%')";}

        


                $i=1;
                $sql = "SELECT * FROM KHT_CanMeetingPh WHERE 1=1 $btw $b ";
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
           
                <a href="pages/Update_Law_labieb.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_labieb.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>


         
                <td align='center'><?PHP echo $result["item_Cnt"]; ?></td>
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>


                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
                <td align='center'><?PHP echo $result["Person_Cnt"]; ?></td>
                <td align='center'><?PHP echo $result["Case_Cnt"]; ?></td>
                <td align='center'><?PHP echo $result["Cnt"]; ?></td>


                


              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
