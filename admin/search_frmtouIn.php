<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align='center'>
                    <th>ລຳດັບ</th>
                        <th>ລະຫັດໝວດ</th>
                        <th>ໝວດ</th>
                        <th>ລະຫັດມາດຕາ</th>
                        <th>ມາດຕາ</th>
                        <th>ຈຳນວນ</th>
                        <th>ເລືອກ</th>
                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                // $start=$_POST['start'];
                // $end=$_POST['end'];
                $Group_ID=$_POST['Group_ID'];
                $Group_No=$_POST['Group_No'];
                $Law_ID=$_POST['Law_ID'];
                $Law_No=$_POST['Law_No'];
            
              
                
                // if($start=="" or $end==""){$btw="";}
                // else{ $btw="and Cri_TouIn.Last_Update between '$start' and '$end'";}


                if($Group_ID==""){$a="";}
                else{ $a="and (KHT_LawItem.Group_ID like N'%$Group_ID%' or KHT_LawItem.Group_ID like N'$Group_ID%')";}

                if($Group_No==""){$b="";}
                else{ $b="and (KHT_LawItem.Group_No like N'%$Group_No%' or KHT_LawItem.Group_No like N'$Group_No%')";}


                if($Law_ID==""){$c="";}
                else{ $c="and (KHT_LawItem.Law_ID like N'%$Law_ID%' or KHT_LawItem.Law_ID like N'$Law_ID%')";}

                if($Law_No==""){$d="";}
                else{ $d="and (KHT_LawItem.Law_No like N'%$Law_No%' or KHT_LawItem.Law_No like N'$Law_No%')";}

               


                $i=1;
                $sql = "SELECT * FROM KHT_LawItem WHERE 1=1 $a $b $c $d";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                    <tr>
                        <td align='center'><?PHP echo $result["Group_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Group_No"]; ?></td>
                        <td align='center'><?PHP echo $result["Law_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Law_No"]; ?></td>
                        
                      <td><?PHP echo $result["Law_Name"]; ?></td>
                      <td><?PHP echo $result["Cnt"]; ?></td>
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
