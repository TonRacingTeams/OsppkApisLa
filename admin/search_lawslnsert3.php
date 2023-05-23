<html>
	<body>
    


  <?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align="center">
                      
                    
                <th>ລຳດັບ</th>
                <th>ລະຫັດໝວດ</th>
                <th>ກົດໝາຍ</th>
                <th>ຂໍ້ຂັດແຍ່ງ</th>
                <th>ຈຳນວນຄະດີ</th>
                <th>ໝາຍເຫດ</th>
                        
               
                </tr>
                </thead>

                   
                <?php
                include 'server/connect.php';
                $Rec_No=$_POST['Rec_No'];
                $Group_ID=$_POST['Group_ID'];
                

                // if($start==""){$btw="";}
                // else{ $btw="and Khet_Rpt.Year_Data = '$start'";}


                 if($Rec_No==""){$a="";}
                 else{ $a="and (KHT_Rpt_MeetingSumByLaws_Civll.Rec_No like N'%$Rec_No%' or KHT_Rpt_MeetingSumByLaws_Civll.Rec_No like N'$Rec_No%')";}


                 if($Group_ID==""){$b="";}
                 else{ $b="and (KHT_Rpt_MeetingSumByLaws_Civll.Group_ID like N'%$Group_ID%' or KHT_Rpt_MeetingSumByLaws_Civll.Group_ID like N'$Group_ID%')";}




                $i=1;
                $sql = "SELECT * FROM KHT_Rpt_MeetingSumByLaws_Civll WHERE 1=1 $a $b";
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr> 
                
                
                <td><?PHP echo $result["Rec_No"]; ?></td>
                <td><?PHP echo $result["Group_ID"]; ?></td>
                <td><?PHP echo $result["Group_No"]; ?></td>
                <td><?PHP echo $result["Law_No"]; ?></td>
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
