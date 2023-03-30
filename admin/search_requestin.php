<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 250%">
                    <thead>
                    <tr align='center'>
                    <th>ລຳດັບ</th>
                        <th>ລະຫັດຄະດີ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີເຂົ້າ</th>
                        <th>ເລກທີ່ສຳນວນ</th>
                        <th>ວັນທີ່ລົງສຳນວນ</th>
                        <th>ໂຈດທາງອາຍາ</th>
                        <th>ຈຳເລີຍ</th>
                        <th>ໂຈດທາງແພ່ງ</th>



                        <th>ບຸກຄົນທີສາມ</th>
                        <th>ຖືກຫາວ່າ</th>
                        <th>ວັນທີກັກຕົວ</th>
                        <th>ວັນທີປ່ອຍຕົວພາງ</th>
                        <th>ສະຖານທີ່ກັກຂັງ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                        
                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_GET['start'];
                $end=$_GET['end'];
               $Item_No=$_GET['Item_No'];
                $Item_ID=$_GET['Item_ID'];
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_AppInAY.Item_Date between '$start' and '$end'";}


              

                if($Item_No==""){$b="";}
                else{ $b="and (KHT_AppInAY.Item_No like N'%$Item_No%' or KHT_AppInAY.Item_No like N'$Item_No%')";}

                if($Item_ID==""){$d="";}
                else{ $d="and (KHT_AppInAY.Item_ID like N'%$Item_ID%' or KHT_AppInAY.Item_ID like N'$Item_ID%')";}

               


                $i=1;
                $sql = "SELECT * FROM KHT_AppInAY Where 1=1 $btw $d";
            
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>

                    <tr>
                    <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td align='center'><?PHP echo $result["Sam_No"]; ?></td>
                        <?php
                        $dates=$result["Item_Date_sam"];
                        ?>
                        <td align='center'><?PHP echo date_format($dates,'d/m/Y');?></td>
                        <td align='center'><?PHP echo $result["Request_Crim"]; ?></td>
                        <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                        <td align='center'><?PHP echo $result["Respond_Civil"]; ?></td>
                        <td align='center'><?PHP echo $result["Request_Civil"]; ?></td>




                        <td align='center'><?PHP echo $result["Problem"]; ?></td>
                        <td align='center'><?PHP echo $result["Kung"]; ?></td>
                        <td align='center'><?PHP echo $result["Poy"]; ?></td>

                        <td align='center'><?PHP echo $result["sathan"]; ?></td>
                        <td align='center'><?PHP echo $result["Dept_Respond"]; ?></td>
                        <td align='center'><?PHP echo $result["Staff_Respond"]; ?></td>

                        
                      
                      
                    </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
