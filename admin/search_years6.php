<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 115%">
                    <thead>
                    <tr align="center">
                      
                    <th>ເລກນັບ</th>
                        <th>ລາຍການຂໍ້ມູນ</th>
                        <th>ປີ</th>
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
                        <th>ໝາຍເຫດ</th>
                        
               
                </tr>
                </thead>

                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                // $select1=$_POST['select1'];
                // $select2=$_POST['select2'];
                // $select3=$_POST['select3'];
                // $M1=$_POST['M1'];


                if($start==""){$btw="";}
                else{ $btw="and Khet_Rpt.Year_Data = '$start'";}

          //       start:start,
          // radio:radio,
          // radios:radios,
          // louie:louie

                // if($select1==""){$a="";}
                // else{ $a="and (Khet_Rpt.select1 like N'%$select1%' or Khet_Rpt.select1 like N'$select1%')";}

                // if($select2==""){$b="";}
                // else{ $b="and (Khet_Rpt.select2 like N'%$select2%' or Khet_Rpt.select2 like N'$select2%')";}

                // if($select3==""){$c="";}
                // else{ $c="and (Khet_Rpt.select3 like N'%$select3%' or Khet_Rpt.select3 like N'$select3%')";}


                // if($M1==""){$b="";}
                // else{ $b="and (Khet_Rpt.M1 like N'%$M1%' or Khet_Rpt.M1 like N'$M1%')";}



                $i=1;
                $sql = "SELECT * FROM Khet_Rpt WHERE 1=1 $btw " ;
                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr> 
                  
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <td><?PHP echo $result["Description"]; ?></td>
                        <!-- insurt ປີຢ່າງດຽວ -->
                        <?php
                        $dates=$result["Year_Data"];
                        ?>
                        <td align='center'><?PHP echo $result["Year_Data"];?></td>
                        
                  
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
                        <td align='center'><?PHP echo $result["Khet_No"]; ?></td>
                        

               

                </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>


	</body>
</html>