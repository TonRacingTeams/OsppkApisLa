<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                <tr>
                <th>ເລກນັບ</th>
                <th>ລາຍງານຂໍ້ມູນ</th>
                <th>ເດືອນ</th>
                <th>ໜາຍເຫດ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
              
                $select1=$_POST['select1'];

               
                if($select1==""){$b="";}
                else{ $b="and (Cri_Rpt_Temp.M1 like N'%$select1%' or Cri_Rpt_Temp.M1 like N'$select1%')";}



                $i=1;
                $sql = "SELECT Year_data, Rpt_ID,Description, M1 FROM Cri_Rpt_Temp WHERE 1=1 $b  ORDER BY Order_No ASC" ;
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>
                    <tr>  
                    <td><?PHP echo $result["Year_data"]; ?></td>
                    <td><?PHP echo $result["Rpt_ID"]; ?></td>
                    <td><?PHP echo $result["Description"]; ?></td> 
                    <td><?PHP echo $result["M1"]; ?></td> 
                    <td></td> 
                
                </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
