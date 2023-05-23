<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align='center'>
                    
                    <th>ລຳດັບ</th>
                        <th>ລະຫັດມາດຕາ</th>
                        <th>ມາດຕາ</th>
                        <th>ເນື້ອໃນ</th>
                        <th>ເລືອກ</th>
                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                // $start=$_POST['start'];
                // $end=$_POST['end'];
                
                $Law_ID=$_POST['Law_ID'];
                $Law_Name=$_POST['Law_Name'];
                
            
              
                
                // if($start=="" or $end==""){$btw="";}
                // else{ $btw="and Cri_TouIn.Last_Update between '$start' and '$end'";}


                if($Law_ID==""){$a="";}
                else{ $a="and (KHT_Laws.Law_ID like N'%$Law_ID%' or KHT_Laws.Law_ID like N'$Law_ID%')";}


                if($Law_Name==""){$b="";}
                else{ $b="and (KHT_Laws.Law_Name like N'%$Law_Name%' or KHT_Laws.Law_Name like N'$Law_Name%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Laws WHERE 1=1 $a $b";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                    <tr>
                      <td><?PHP echo $i; ?></td>  
                      <td><?PHP echo $result["Law_ID"]; ?></td>
                      <td><?PHP echo $result["Law_Name"]; ?></td>
                      <td><?PHP echo $result["Item_Name"]; ?></td>
                      <td><?PHP echo $result["Choose"]; ?></td>
                      
                     
                    
                    </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
