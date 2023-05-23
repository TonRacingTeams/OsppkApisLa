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
                <!-- <th>Office Name</th> -->
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
                // $Office_NameE=$_POST['Office_NameE'];
                $Address1=$_POST['Address1'];
                $Address1E=$_POST['Address1E'];
                $Address2=$_POST['Address2'];
                $Address2E=$_POST['Address2E'];
                

                // if($start==""){$btw="";}
                // else{ $btw="and KHT_Law_files.Year_Data = '$start'";}

                if($Office_ID==""){$a="";}
                else{ $a="and (KHT_Office.Office_ID like N'%$Office_ID%' or KHT_Office.Office_ID like N'$Office_ID%')";}

                if($Office_Name==""){$b="";}
                else{ $b="and (KHT_Office.Office_Name like N'%$Office_Name%' or KHT_Office.Office_Name like N'$Office_Name%')";}
                
                // if($Office_NameE==""){$c="";}
                // else{ $c="and (KHT_Office.Office_NameE like N'%$Office_NameE%' or KHT_Office.Office_NameE like N'$Office_NameE%')";}

                if($Address1==""){$d="";}
                else{ $d="and (KHT_Office.Address1 like N'%$Address1%' or KHT_Office.Address1 like N'$Address1%')";}

                if($Address1E==""){$e="";}
                else{ $e="and (KHT_Office.Address1E like N'%$Address1E%' or KHT_Office.Address1E like N'$Address1E%')";}

                if($Address2==""){$f="";}
                else{ $f="and (KHT_Office.Address2 like N'%$Address2%' or KHT_Office.Address2 like N'$Address2%')";}

                if($Address2E==""){$g="";}
                else{ $g="and (KHT_Office.Address2E like N'%$Address2E%' or KHT_Office.Address2E like N'$Address2E%')";}

                



                $i=1;
                $sql = "SELECT * FROM KHT_Office WHERE 1=1 $a $b $e $f $g";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>


                
                        <td align='center'>
                        <a href="#?Office_ID=<?PHP echo $result["Office_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_frmrequesttrueIn.php?Office_ID=<?php echo $result['Office_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>
                
                
                <td><?PHP echo $result["Office_ID"]; ?></td>
                <td><?PHP echo $result["Office_Name"]; ?></td>
                <!-- <td><?PHP echo $result["Office_NameE"]; ?></td> -->
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















