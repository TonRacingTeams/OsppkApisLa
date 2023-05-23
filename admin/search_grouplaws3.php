<html>
	<body>
    


  <?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align="center">
                      
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>    
                <th>ເລກລະຫັດ</th>
                <th>ຊື່ກົດໝາຍ  (ພາສາລາວ)</th>
                <th>ຊື່ກົດໝາຍ (ພາສາອັງກິດ)</th>
                <th>ຊື່ file</th>
               
                </tr>
                </thead>

                
                   
                <?php
                include 'server/connect.php';
                $Law_ID=$_POST['Law_ID'];
                $Law_Name=$_POST['Law_Name'];
                $Law_NmE=$_POST['Law_NmE'];
                

                // if($start==""){$btw="";}
                // else{ $btw="and KHT_Law_files.Year_Data = '$start'";}


                if($Law_ID==""){$a="";}
                else{ $a="and (KHT_Law_files.Law_ID like N'%$Law_ID%' or KHT_Law_files.Law_ID like N'$Law_ID%')";}

                if($Law_Name==""){$b="";}
                else{ $b="and (KHT_Law_files.Law_Name like N'%$Law_Name%' or KHT_Law_files.Law_Name like N'$Law_Name%')";}

                if($Law_NmE==""){$c="";}
                else{ $c="and (KHT_Law_files.Law_NmE like N'%$Law_NmE%' or KHT_Law_files.Law_NmE like N'$Law_NmE%')";}



                $i=1;
                $sql = "SELECT * FROM KHT_Law_files WHERE 1=1 $a $b $c ";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr> 
                  
                <td><?PHP echo $result["Law_ID"]; ?></td>
                <td><?PHP echo $result["Law_Name"]; ?></td>
                
                <td><?PHP echo $result["Law_NmE"]; ?></td>
                <td><?PHP echo $result["File_Name"]; ?></td>
                        

                </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
