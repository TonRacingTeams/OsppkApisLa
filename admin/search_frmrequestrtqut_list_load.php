<html>
	<body>
    

             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 250%">
                    <thead>
                    <tr align='center'>
                    <th>ລ/ດ</th>
                        <th>ລະຫັດເອກະສານ</th>
                        <th>ເລກທີຄຳສັ່ງ</th>
                        <th>ວັນທີ </th>
                        <th>ບ່ອນອີງ</th>
                        <th>ເນື້ອໃນຄຳສັ່ງ</th>
                       

                      </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Order_ID=$_POST['Order_ID'];
                $Order_No=$_POST['Order_No'];
               
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Orders_Pang.date between '$start' and '$end'";}


              

                if($Order_No==""){$b="";}
                else{ $b="and (KHT_Orders_Pang.Order_No like N'%$Order_No%' or KHT_Orders_Pang.Order_No like N'$Order_No%')";}

                if($Order_ID==""){$d="";}
                else{ $d="and (KHT_Orders_Pang.Order_ID like N'%$Order_ID%' or KHT_Orders_Pang.Order_ID like N'$Order_ID%')";}

               


                $i=1;
                $sql = " SELECT * FROM KHT_Orders_Pang WHERE 1=1 $btw $d ";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                        <tr>
                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Order_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <?php
                        $date=$result["date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td align='center'><?PHP echo $result["Reference"]; ?></td>
                        <td><?PHP echo $result["Description"]; ?></td>
                        
                    
                    </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
