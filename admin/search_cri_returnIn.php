<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align='center'>

                        <th>ແກ້ໄຂ</th>
                        <th>ລົບ</th>
                        <th>ລ/ດ</th>
                        <th>ລະຫັດຜູ້ໃຊ້</th>
                        <th>ຊື່ຜູ້ໃຊ້</th>
                        <th>ສິດໃຊ້ໂປຣແກຣມ</th>
                        <th>ລະຫັດເຂດ</th>
                        <th>ຊື່ເຂດ</th>
                        <th>ລະຫັດແຂວງ</th>
                        <th>ຊື່ແຂວງ</th>

                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';

                // $start=$_POST['start'];
                // $end=$_POST['end'];
                $Usr_id=$_POST['Usr_id'];
                $Khet_ID=$_POST['Khet_ID'];
                $Prov_ID=$_POST['Prov_ID'];
                
                // if($start=="" or $end==""){$btw="";}
                // else{ $btw="and Cri_ReturnIn.Item_Date_sam between '$start' and '$end'";}


                if($Usr_id==""){$b="";}
                else{ $b="and (AP_KHT_Users.Usr_id like N'%$Usr_id%' or AP_KHT_Users.Usr_id like N'$Usr_id%')";}

                if($Khet_ID==""){$d="";}
                else{ $d="and (AP_KHT_Users.Khet_ID like N'%$Khet_ID%' or AP_KHT_Users.Khet_ID like N'$Khet_ID%')";}

                if($Prov_ID==""){$e="";}
                else{ $e="and (AP_KHT_Users.Prov_ID like N'%$Prov_ID%' or AP_KHT_Users.Prov_ID like N'$Prov_ID%')";}


                $i=1;
                $sql = "select * from  AP_KHT_Users WHERE 1=1 $b $d $e";
                $query = sqlsrv_query( $conn, $sql );


                // echo "select * from  AP_KHT_Users  $b $d $e";

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>

                    <tr align='center'>
                          
                    <td>
                          <a href="pages/update_returnin.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                          
                          </td>
                          <td>
                          <a href="pages/?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                          </td>

                        <td><?PHP echo $i; ?></td>
                        <td><?PHP echo $result["Usr_id"]; ?></td>
                        <td><?PHP echo $result["Usr_nm"]; ?></td>
                        <td><?PHP echo $result["permision"]; ?></td>
                        <td><?PHP echo $result["Khet_ID"]; ?></td>
                        <td><?PHP echo $result["Khet_Name"]; ?></td>
                        <td><?PHP echo $result["Prov_ID"]; ?></td>
                        <td><?PHP echo $result["Prov_Name"]; ?></td>
                     


                        </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
