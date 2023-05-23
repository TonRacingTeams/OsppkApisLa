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
                <th>ລະຫັດຄະດີ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                




                <th>ວັນເດືອນປີເກີດ</th>
                <th>ສັນຊາດ</th>
                <th>ເພດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ທາງແພ່ງ(ຈຳນວນລວມ)</th>



                <th>ທາງແພ່ງ(ຈ່າຍແລ້ວ)</th>
                <th>ທາງແພ່ງ(ຍັງເຫຼືອ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ທາງແພ່ງ(ຈ່າຍແລ້ວ)</th>

                
                <th>ທາງແພ່ງ(ຍັງເຫຼືອ)</th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $PrisonerID=$_POST['PrisonerID'];
        
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_prisoner.Darrest between '$start' and '$end'";}



                if($PrisonerID==""){$b="";}
                else{ $b="and (KHT_prisoner.PrisonerID like N'%$PrisonerID%' or KHT_prisoner.PrisonerID like N'$PrisonerID%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_prisoner WHERE 1=1 $btw $b ";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>
            
                <td>
                        <a href="#?PrisonerID=<?PHP echo $result["PrisonerID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmRevise_List.php?PrisonerID=<?php echo $result['PrisonerID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




            
                <td ><?PHP echo $i; ?></td>
                <td ><?PHP echo $result["PrisonerID"]; ?></td>
                
                <?php
                $date=$result["Darrest"];
                ?>
                <td ><?PHP echo date_format($date,'d/m/Y');?></td>


                <td ><?PHP echo $result["Name"]; ?></td>
                <td ><?PHP echo $result["Lastname"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td ><?PHP echo date_format($date,'d/m/Y');?></td>



                <td ><?PHP echo $result["Nationality"]; ?></td>
                <td ><?PHP echo $result["sex"]; ?></td>
                <td ><?PHP echo $result["Job"]; ?></td>
                <td ><?PHP echo $result["Village"]; ?></td>
                <td ><?PHP echo $result["District"]; ?></td>
                <td ><?PHP echo $result["Province"]; ?></td>

                <td ><?PHP echo $result["wrongdetail"]; ?></td>
                <td ><?PHP echo $result["Punish"]; ?></td>
                <td ><?PHP echo $result["Reform"]; ?></td>
                <td ><?PHP echo $result["Wrong"]; ?></td>
                <td ><?PHP echo $result["law_paid"]; ?></td>


                <td ><?PHP echo $result["law_beleft"]; ?></td>
                <td ><?PHP echo $result["P_Total"]; ?></td>
                <td ><?PHP echo $result["p_paid"]; ?></td>
                <td ><?PHP echo $result["P_beleft"]; ?></td>
                <td ><?PHP echo $result["Remark"]; ?></td>
               
               
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
