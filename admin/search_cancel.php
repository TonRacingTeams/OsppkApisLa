<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr>
                    <th>ລ/ດ</th>
                <th>ເລກນັບ</th>
                <th>ວັນທີຖືກຈັບ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ </th>
                <th>ຂໍ້ຫາການເຮັດຜິດ</th>
                <th>ຄຳຕັດສິນ</th>
                <th>ໄດ້ຮັບຜ່ອນໂທດ(ຈຳນວນລວມ)</th>
                <th>ໄດ້ຮັບຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ໄດ້ຮັບຜ່ອນໂທດ(ຈຳນວນປີ)</th>
                <th>ໄດ້ຮັບຜ່ອນໂທດ(ຈຳນວນເດືອນ)</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄຟຍະໂທດ</th>
                <th>ທາງແພ່ງ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $slacken_nameID=$_POST['slacken_nameID'];
                
            
              
              


                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_slacken.slacken_day_to_be_arrested between '$start' and '$end'";}


                if($slacken_nameID==""){$b="";}
                else{ $b="and (KHT_slacken.slacken_nameID like N'%$slacken_nameID%' or KHT_slacken.slacken_nameID like N'$slacken_nameID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Office WHERE 1=1 $btw $b ";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>  
                <td><?php echo $result["Office_ID"];?></td>          
                <td><?PHP echo $result["Office_Name"]; ?></td>
                <td><?PHP echo $result["Office_NameE"]; ?></td>

                <td><?PHP echo $result["Address1"]; ?></td>
                <td><?PHP echo $result["Address1E"]; ?></td>
                <td><?PHP echo $result["Address2"]; ?></td>
                <td><?PHP echo $result["Address2E"]; ?></td>
                <td><?PHP echo $result["Tel"]; ?></td>
                <td><?PHP echo $result["Fax"]; ?></td>

                <td><?PHP echo $result["E_mail"]; ?></td>
                <td><?PHP echo $result["Web_Site"]; ?></td>
                <td><?PHP echo $result["Place"]; ?></td>
                <td><?PHP echo $result["PlaceE"]; ?></td>
                <td><?PHP echo $result["Sign1"]; ?></td>
                <td><?PHP echo $result["Sign1E"]; ?></td>






                <td align='center'>
                <a href="pages/from_update_cancel.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                </td>
                <td align='center'>
                <a href="pages/delete_canecl.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
