<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 140%">
                    <thead>
                    <tr align="center">
                <th>ລ/ດ</th>
                        <th>ເລກນັບ</th>
                        <th>ລາຍການຂໍ້ມູນ</th>
                        <th>ເດືອນ1</th>
                        <th>ເດືອນ2</th>
                        <th>ເດືອນ3</th>
                        <th>ເດືອນ4</th>
                        <th>ເດືອນ5</th>
                        <th>ເດືອນ6</th>
                        <th>ເດືອນ7</th>
                        <th>ເດືອນ8</th>
                        <th>ເດືອນ9</th>
                        <th>ເດືອນ10</th>
                        <th>ເດືອນ11</th>
                        <th>ເດືອນ12</th>
                        <th>ປີ</th>
                        
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];

                if($start==""){$btw="";}
                else{ $btw="and Khet_Rpt.Year_data = '$start'";}
                $i=1;
                $sql = "SELECT * FROM Khet_Rpt WHERE 1=1 $btw ORDER BY Order_No ASC" ;
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>  
                <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <td align='center'><?PHP echo $result["Description"]; ?></td>
                        <td align='center'><?PHP echo $result["M1"]; ?></td>
                        <td align='center'><?PHP echo $result["M2"]; ?></td>
                        <td align='center'><?PHP echo $result["M3"]; ?></td>
                        <td align='center'><?PHP echo $result["M4"]; ?></td>
                        <td align='center'><?PHP echo $result["M5"]; ?></td>
                        <td align='center'><?PHP echo $result["M6"]; ?></td>
                        <td align='center'><?PHP echo $result["M7"]; ?></td>
                        <td align='center'><?PHP echo $result["M8"]; ?></td>
                        <td align='center'><?PHP echo $result["M9"]; ?></td>
                        <td align='center'><?PHP echo $result["M10"]; ?></td>
                        <td align='center'><?PHP echo $result["M11"]; ?></td>
                        <td align='center'><?PHP echo $result["M12"]; ?></td>
                        <td align='center'><?PHP echo $result["Year_Data"]; ?></td>

               

                </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
