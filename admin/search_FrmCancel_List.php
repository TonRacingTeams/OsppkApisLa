<html>
	<body>
    


  <?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 163%">
                    <thead>
                    <tr align="center">
                      
                    <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                
                <th>ລະຫັດ</th>
                <th>ຊື່ສຳນັກງານ</th>
                
                <th>ທີ່ຢູ່ 1</th>
                <th>Address 1</th>
                <th>ທີ່ຢູ່ 2</th>
                <th>Address 2</th>
                <th>ໂທລະສັບ</th>
                <th>Fax</th>
                <th>ອີເມວ</th>
                <th>Website</th>
                <th>ທີ່</th>
                <th>Singned At</th>
                <th>ລົງລາຍເຊັນ</th>
                <th>Signature</th>
                        
               
                </tr>
                </thead>

                   
                <?php
                include 'server/connect.php';
                $Office_ID=$_POST['Office_ID'];
                $Office_Name=$_POST['Office_Name'];
                
                

                // if($start==""){$btw="";}
                // else{ $btw="and Khet_Rpt.Year_Data = '$start'";}


                 if($Office_ID==""){$a="";}
                 else{ $a="and (KHT_Office.Office_ID like N'%$Office_ID%' or KHT_Office.Office_ID like N'$Office_ID%')";}


                 if($Office_Name==""){$b="";}
                 else{ $b="and (KHT_Office.Office_Name like N'%$Office_Name%' or KHT_Office.Office_Name like N'$Office_Name%')";}

                




                $i=1;
                $sql = "SELECT * FROM KHT_Office WHERE 1=1 $a $b  ";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>

                <td align='center'>
           
                <a href="pages/Form_update_FrmCancel_List.php?Office_ID=<?PHP echo $result["Office_ID"];?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
              </td>
                <td align='center'>
                <a href="pages/Delete_FrmCancel_List.php?Office_ID=<?php echo $result['Office_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>
            
         
                
                <td><?PHP echo $result["Office_ID"]; ?></td>
                <td><?PHP echo $result["Office_Name"]; ?></td>
                
                
                <td><?PHP echo $result["Address1"]; ?></td>
                <td><?PHP echo $result["Address1E"]; ?></td>
                <td><?PHP echo $result["Address2"]; ?></td>
                <td><?PHP echo $result["Address2E"]; ?></td>
                <td><?PHP echo $result["Tel"]; ?></td>
                <td><?PHP echo $result["Fax"]; ?></td>
                
                <td><?PHP echo $result["E_mail"]; ?></td>
                <td><?PHP echo $result["Web_Site"]; ?></td>
                <td><?PHP echo $result["Place"]; ?></td>
                <td><?PHP echo $result["PlaceE"]; ?></td>
                <td><?PHP echo $result["Sign1"]; ?></td>
                <td><?PHP echo $result["Sign1E"]; ?></td>
                
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
