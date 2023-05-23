<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>
             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 563%">
                    <thead>
                    <tr align="center">

                <th>ໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດບົດສະຫຼູບ</th>
                <th>ວັນເດືອນປີສົ່ງບົດສະຫຼູບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ກ່ຽວເລື່ອງ</th>
                <th>ໂຈດ</th>
                <th>ຈຳເລີຍ</th>
                <th>ບຸກຄົນທີສາມ</th>
                <th>ຜູ້ຂຽນບົດສະຫຼຸບ</th>
                <th>ຜົນການຕັດສີນຂອງສານ</th>
                
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Case_ID=$_POST['Case_ID'];

                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_CanMeetingPh_Case2.Item_Date between '$start' and '$end'";}


                if($Item_ID==""){$b="";}
                else{ $b="and (KHT_CanMeetingPh_Case2.Item_ID like N'%$Item_ID%' or KHT_CanMeetingPh_Case2.Item_ID like N'$Item_ID%')";}


                if($Case_ID==""){$d="";}
                else{ $d="and (KHT_CanMeetingPh_Case2.Case_ID like N'%$Case_ID%' or KHT_CanMeetingPh_Case2.Case_ID like N'$Case_ID%')";}




                $i=1;
                // $sql = "SELECT  KHT_CanMeetingPh2.item_Cnt, KHT_CanMeetingPh2.Item_ID, KHT_CanMeetingPh2.Item_Date, KHT_CanMeetingPh2.Case_Cnt, KHT_CanMeetingPh2.Cnt, KHT_CanMeetingPh_Case2.Case_ID, 
                // KHT_CanMeetingPh_Case2.Request_Civil, KHT_CanMeetingPh_Case2.Related_Pers, KHT_CanMeetingPh_Case2.Respond_Civil, KHT_CanMeetingPh_Case2.Problem,
                // KHT_CanMeetingPh_Case2.Solv_Name, KHT_CanMeetingPh_Case2.Pers_Name, KHT_CanMeetingPh_Case2.Cnt
                
                // FROM KHT_CanMeetingPh2
                // INNER JOIN KHT_CanMeetingPh_Case2
                // ON KHT_CanMeetingPh2.Item_ID=KHT_CanMeetingPh_Case2.Item_ID WHERE 1=1 $btw $b $d " ;



                $sql = "SELECT * FROM KHT_CanMeetingPh_Case2 WHERE 1=1 $btw $b $d";

                $query = sqlsrv_query( $conn, $sql);
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

<tbody id="users">
                <tr>  
                <td align='center'>
           
           <a href="cv/<?PHP echo $result["Item_ID"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
      
           </td>

           <td align='center'>
      
           <a href="pages/Update_FrmRptCrm_Yearly.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
           
           </td>
           <td align='center'>
           <a href="pages/Delete_FrmRptCrm_Yearly.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
           </td>




           <td align='center'><?PHP echo $i; ?></td>
           <td align='center'><?PHP echo $result["Item_ID"]; ?></td>



           <?php
           $date=$result["Item_Date"];
           ?>
           <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


           <td align='center'><?PHP echo $result["Case_ID"]; ?></td>

           <td align='center'><?PHP echo $result["Problem"]; ?></td>
           
           <td align='center'><?PHP echo $result["Request_Civil"]; ?></td>
           
           <td align='center'><?PHP echo $result["Respond_Civil"]; ?></td>
           <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
           <td align='center'><?PHP echo $result["Pers_Name"]; ?></td>
           <td align='center'><?PHP echo $result["Solv_Name"]; ?></td>
           
                

                </tr>
                </tbody>
                    <?php
                  }
                  ?>

                  <br>

                </table>
                </div>
	</body>
</html>
