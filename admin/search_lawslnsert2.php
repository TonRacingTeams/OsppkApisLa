<html>
	<body>
    


  <?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 136%">
                    <thead>
                    <tr align="center">
                      
                    
                <th>ລະຫັດໝວດ</th>
                <th>ໝວດ</th>
                <th>ລາຍກການກຳທຳຜິດ</th>
                <th>ລະຫັດມາດຕາ</th>
                <th>ມາດຕາ</th>
                <th>ກ່ຽວກັບມາດຕາ</th>
                <th>ໝາຍເຫດ</th>
                        
               
                </tr>
                </thead>

                   
                <?php
                include 'server/connect.php';
                $Group_ID=$_POST['Group_ID'];
                $Group_No=$_POST['Group_No'];
                $Law_No=$_POST['Law_No'];
                

                // if($start==""){$btw="";}
                // else{ $btw="and Khet_Rpt.Year_Data = '$start'";}


                 if($Group_ID==""){$a="";}
                 else{ $a="and (KHT_Rpt_Meeting_SumByLaw.Group_ID like N'%$Group_ID%' or KHT_Rpt_Meeting_SumByLaw.Group_ID like N'$Group_ID%')";}


                 if($Group_No==""){$b="";}
                 else{ $b="and (KHT_Rpt_Meeting_SumByLaw.Group_No like N'%$Group_No%' or KHT_Rpt_Meeting_SumByLaw.Group_No like N'$Group_No%')";}

                 if($Law_No==""){$c="";}
                 else{ $c="and (KHT_Rpt_Meeting_SumByLaw.Law_No like N'%$Law_No%' or KHT_Rpt_Meeting_SumByLaw.Law_No like N'$Law_No%')";}




                $i=1;
                $sql = "SELECT * FROM KHT_Rpt_Meeting_SumByLaw WHERE 1=1 $a $b $c ";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>

                
            
         
                
                <td><?PHP echo $result["Group_ID"]; ?></td>
                <td><?PHP echo $result["Group_No"]; ?></td>
                <td><?PHP echo $result["Group_name"]; ?></td>
                
                <td><?PHP echo $result["Law_No"]; ?></td>
                <td><?PHP echo $result["Law_Name"]; ?></td>
                <td><?PHP echo $result["Quantity"]; ?></td>
                
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
