<html>
	<body>
    
<?php
date_default_timezone_set("Asia/Bangkok");
?>


                <div id='showa' class="table-responsive p-12">
                <table class='table table-bordered' style="width: 236%">
                    <thead>
                    <tr align="center">
                    <th>ໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດລາຍການ</th>
                <th>ວັນເດືອນປີຕັດສີນ</th>
                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ສັນຊາດ</th>
                <th>ເພດ</th>
                <th>ເລກທີ</th>
                <th>ວັນທີ</th>
                
                <th>ຂໍ້ຫາການກະທຳຜີດ</th>
                <th>ສຳນວນຄະດີ</th>
                

                <th>ທາງແພ່ງ(ຈຳນວນ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>

                <th>ຄ່າປັບໄໝ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ໝາຍເຫດ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                
                $start=$_POST['start'];
                $end=$_POST['end'];
                $Item_ID=$_POST['Item_ID'];
                $Deci_No=$_POST['Deci_No'];
                $Full_Name=$_POST['Full_Name'];


                if($start=="" or $end==""){$btw="";}
                else{ $btw="and KHT_Decision_Ph.Item_Date between '$start' and '$end'";}


                if($Item_ID==""){$a="";}
                else{ $a="and (KHT_Decision_Ph.Item_ID like N'%$Item_ID%' or KHT_Decision_Ph.Item_ID like N'$Item_ID%')";}

                if($Deci_No==""){$b="";}
                else{ $b="and (KHT_Decision_Ph.Deci_No like N'%$Deci_No%' or KHT_Decision_Ph.Deci_No like N'$Deci_No%')";}

                if($Full_Name==""){$c="";}
                else{ $c="and (KHT_Decision_Ph.Full_Name like N'%$Full_Name%' or KHT_Decision_Ph.Full_Name like N'$Full_Name%')";}


                $i=1;
                $sql = "SELECT * FROM KHT_Decision_Ph WHERE 1=1 $btw $a $b $c ";
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
      
           <a href="pages/Update_FrmRptCrm_Yearly3.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
           
           </td>
           <td align='center'>
           <a href="pages/Delete_FrmRptCrm_Yearly3.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
           </td>

                        <td><?PHP echo $result["item_Cnt"]; ?></td>
                        <td><?PHP echo $result["Item_ID"]; ?></td>
                        
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td><?PHP echo $result["Full_Name"]; ?></td>
                        <?php
                        $dates=$result["Date_Birth"];
                        ?>
                        <td><?PHP echo date_format($dates,'d/m/Y');?></td>

                        <td><?PHP echo $result["Nationality"]; ?></td>
                        <td><?PHP echo $result["Gender"]; ?></td>
                        
                        
                        <td><?PHP echo $result["Deci_No"]; ?></td>


                        <?php
                        $dates=$result["Deci_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($dates,'d/m/Y');?></td>


                        <td><?PHP echo $result["Phatibus"]; ?></td>
                        <td><?PHP echo $result["Data_holding"]; ?></td>
                        

                        
                        
                        <td><?PHP echo $result["Pheng_Total"]; ?></td>
                        <td><?PHP echo $result["Pheng_Paid"]; ?></td>
                        <td><?PHP echo $result["Pheng_Remain"]; ?></td>
                        <td><?PHP echo $result["Penaty_Tatol"]; ?></td>
                        <td><?PHP echo $result["Penaty_Paid"]; ?></td>
                        <td><?PHP echo $result["Penaty_Remain"]; ?></td>
                        <td><?PHP echo $result["Remark"]; ?></td>

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
