<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                    <thead>
                    <tr align='center'>
                    <th>ເລກລະຫັດ</th>
                    <th>ຊື່ກົດໝາຍ (ພາສາລາວ)</th>
                    <th>ຊື່ກົດໝາຍ (ພາສາອັງກິດ)</th>
                    <th>ຊື່ file</th>
                    <th>ດາວໂຫລດເອກະສານ</th>
                    <th>ແກ້ໄຂຂໍ້ມູນ</th>
                    <th>ລົບຂໍ້ມູນ</th>
               
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $Law_ID=$_POST['Law_ID'];
            
            

                if($Law_ID==""){$Law_ID="";}
                else{ $Law_ID="and (Cri_Law_files_Other.Law_ID like N'%$Law_ID%' or Cri_Law_files_Other.Law_ID like N'$Law_ID%')";}

        


                $i=1;
                $sql = "select *from Cri_Law_files_Other where 1=1 $Law_ID";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>
                    <tr>
                    <td align='center'><?PHP echo $result["Law_ID"]; ?></td>
                    <td align='center'><?PHP echo $result["Law_Name"]; ?></td>
                    <td align='center'><?PHP echo $result["Law_NmE"]; ?></td>
                    <td align='center'><?PHP echo $result["File_Name"]; ?></td>

                    <td align='center'>
           
                    <a href="cv/<?PHP echo $result["File_Name"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
                
                    </td>

                    <td align='center'>
                
                    <a href="pages/Update_Law_file.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                    
                    </td>
                    <td align='center'>
                    <a href="pages/Delete_frmlaw_files.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
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
