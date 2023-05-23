<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 1436%">
                    <thead>

                    <tr align='center'>
                    <th>ແກ້ໄຂ</th>
                      <th>ລົບ</th>
                        <th>ລ/ດ</th>
                        <th>ລະຫັດເອກະສານ</th>
                        <th>ເລກທີຄຳສັ່ງ</th>
                        <th>ວັນທີ</th>
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
                else{ $btw="and KHT_Order_Patua.date between '$start' and '$end'";}


                if($Order_ID==""){$d="";}
                else{ $d="and (KHT_Order_Patua.Order_ID like N'%$Order_ID%' or KHT_Order_Patua.Order_ID like N'$Order_ID%')";}

              

                if($Order_No==""){$b="";}
                else{ $b="and (KHT_Order_Patua.Order_No like N'%$Order_No%' or KHT_Order_Patua.Order_No like N'$Order_No%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Order_Patua  WHERE 1=1 $btw $d $b";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody id="users">
                        <tr>

                        <td>
                        <a href="#?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmJangtob4_List.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>


                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Order_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <?php
                        $date=$result["date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td><?PHP echo $result["Reference"]; ?></td>
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
