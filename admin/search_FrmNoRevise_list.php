<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 236%">
                    <thead>
                    <tr align='center'>
                    <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
            

                <th>ວັນເດືອນປີເກີດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ກຳນົດດັດສ້າງ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ຜູ້ຖືກດັດສ້າງ</th>
                <th>ວັນເດືອນປີໝົດກຳນົດ</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $DisID=$_POST['DisID'];
        
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Discipline.Dreform between '$start' and '$end'";}


                if($DisID==""){$b="";}
                else{ $b="and (KHT_Discipline.DisID like N'%$DisID%' or KHT_Discipline.DisID like N'$DisID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Discipline WHERE 1=1 $btw $b ";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>

                <td>
                        <a href="#?DisID=<?PHP echo $result["DisID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmNoRevise_List.php?DisID=<?php echo $result['DisID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>





            
                <td ><?PHP echo $i; ?></td>
                <td ><?PHP echo $result["DisID"]; ?></td>
                
                <?php
                $date=$result["Dreform"];
                ?>
                <td ><?PHP echo date_format($date,'d/m/Y');?></td>
                <td><?PHP echo $result["Name"]; ?></td>
                <td><?PHP echo $result["LastName"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td><?PHP echo date_format($date,'d/m/Y');?></td>



                <td><?PHP echo $result["sex"]; ?></td>
                <td><?PHP echo $result["Nationality"]; ?></td>
                <td><?PHP echo $result["Job"]; ?></td>
                <td><?PHP echo $result["Addhome"]; ?></td>
                <td><?PHP echo $result["District"]; ?></td>
                <td><?PHP echo $result["Province"]; ?></td>


                <td><?PHP echo $result["Judge"]; ?></td>
                <td><?PHP echo $result["Datefor"]; ?></td>


                <td><?PHP echo $result["Wrong"]; ?></td>
                <td><?PHP echo $result["parentdeposit"]; ?></td>


                <?php
                $date=$result["Dtimeups"];
                ?>
                <td><?PHP echo date_format($date,'d/m/Y');?></td>




                <td><?PHP echo $result["Reform"]; ?></td>



                <?php
                $date=$result["Dis_penMonth"];
                ?>
                <td><?PHP echo date_format($date,'d/m/Y');?></td>
               
               
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
