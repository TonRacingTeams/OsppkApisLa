<html>
	<body>
    
<?php

date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 136%">
                    <thead>
                    <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ວັນເດືອນປີຖືກຈັບຕົວ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>



                <th>ກ່ອນຖືກຈັບ(ອາຊີບ) </th>
                <th>ກ່ອນຖືກຈັບ(ບ້ານ)</th>
                <th>ກ່ອນຖືກຈັບ(ເມືອງ)</th>
                <th>ກ່ອນຖືກຈັບ(ແຂວງ)</th>
                <th>ຂໍ້ຫາການກະທຳຜິດ</th>
                        </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $numberID=$_POST['numberID'];
                $Alleged_Name=$_POST['Alleged_Name'];
                $Alleged_latname=$_POST['Alleged_latname'];
        
                
                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_alleged.Alleged_day_to_be_arrested between '$start' and '$end'";}


                if($numberID==""){$a="";}
                else{ $a="and (KHT_alleged.numberID like N'%$numberID%' or KHT_alleged.numberID like N'$numberID%')";}

                if($Alleged_Name==""){$b="";}
                else{ $b="and (KHT_alleged.Alleged_Name like N'%$Alleged_Name%' or KHT_alleged.Alleged_Name like N'$Alleged_Name%')";}

                if($Alleged_latname==""){$c="";}
                else{ $c="and (KHT_alleged.Alleged_latname like N'%$Alleged_latname%' or KHT_alleged.Alleged_latname like N'$Alleged_latname%')";}

                

                $i=1;
                $sql = "SELECT * FROM  KHT_alleged WHERE 1=1 $btw $a $b $c";
                $query = sqlsrv_query( $conn, $sql );


          

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody id="users">
                <tr>


                <td>
                        <a href="#?numberID=<?PHP echo $result["numberID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmNoAGaint_List.php?numberID=<?php echo $result['numberID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["numberID"]; ?></td>


                <?php
                $date=$result["Alleged_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                

                <td align='center'><?PHP echo $result["Alleged_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_latname"]; ?></td>


                <?php
                $date=$result["Alleged_BO"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
              
                <td align='center'><?PHP echo $result["Alleged_Sex"]; ?></td>
  
                <td align='center'><?PHP echo $result["Alleged_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_first_job_to_bearrested"]; ?></td>


                <td align='center'><?PHP echo $result["Alleged_Village"]; ?></td>
  
                <td align='center'><?PHP echo $result["Alleged_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_ProvinceBorn"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_charge"]; ?></td>
               
               
              </tr>
                </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
