<!DOCTYPE html>
<html lang="en">

<head>

<?php
include 'head.php';
?>


<script>
		$(function(){
    //  alert('hellow');
			$("#search").click(function(){
				var aa=$("#start").val();
				var bb=$("#end").val();
        var slacken_nameID=$("#slacken_nameID").val();

        //  alert('hellow');
				$.post("search_cancel.php",{
					start:aa,
					end:bb,
          slacken_nameID:slacken_nameID
				},
				function(output){
					$("#show").html(output).slideDown();
				});
			});
		});
	</script>

<style>
thead
{
background-color:#3366ff;
color:white;
}

input[type=date] {
 box-sizing: border-box;
 border: 1px solid #ff8c1a;
 border-radius: 8px;
}

input[type=text] {
 box-sizing: border-box;
 border: 1px solid #2764f1;
 border-radius: 8px;
}
</style>



</head>
<body id="page-top">
    <div id="wrapper">
    <!-- Sidebar -->
    <?php include('header.php')?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('navbar.php')?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ອະໄພຍະໂທດປ່ອຍຕົວເນື່ອງໃນໂອກາດວັນຊາດທີ 2 ທັນວາ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ອະໄພຍະໂທດປ່ອຍຕົວເນື່ອງໃນໂອກາດວັນຊາດທີ 2 ທັນວາ</li>
            
            </ol>
          </div>


            
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-3">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>
                    <input type="date" class="form-control " id="start"   name="start" value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                   <div class="col-lg-3">
                   <lable>ຫາວັນທີເດືອນປີ</lable>
                   <?php
                     @$end=$_POST['end'];   
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >
                  </div>


                  <div class="col-lg-2">
                   <lable>ເລກນັບ</lable>
                    <input type="text" class="form-control " id="slacken_nameID"   name="slacken_nameID" >	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>

                </div><br>

                </div>
                


                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 200%">
                <thead>
                <tr align='center'>
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

                $i=0; 
                include 'server/connect.php';
                $stmt = "SELECT * FROM  KHT_slacken WHERE 1=1";
                $query  = sqlsrv_query($conn,$stmt);

                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>

                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["slacken_nameID"]; ?></td>
                <?php
                $date=$result["slacken_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["slacken_name"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Lat"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["action_false"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_sex"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_first_job_to_bearrested"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Village"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_ProvinceBorn"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                
                <td align='center'><?PHP echo $result["slacken_to_judge"]; ?></td>
                <td align='center'><?PHP echo $result["items_time"]; ?></td>
                <td align='center'><?PHP echo $result["items_year"]; ?></td>
                <td align='center'><?PHP echo $result["items_Month"]; ?></td>
                <td align='center'><?PHP echo $result["to_act_year"]; ?></td>
                <td align='center'><?PHP echo $result["penalty_yet"]; ?></td>


                <td align='center'><?PHP echo $result["Type_penalty"]; ?></td>
                <td align='center'><?PHP echo $result["ApaiyaTol"]; ?></td>
                <td align='center'><?PHP echo $result["Cltotal"]; ?></td>
                <td align='center'><?PHP echo $result["Clpaid"]; ?></td>
                <td align='center'><?PHP echo $result["Clin_debt"]; ?></td>
                <td align='center'><?PHP echo $result["total"]; ?></td>
                <td align='center'><?PHP echo $result["paid"]; ?></td>
                <td align='center'><?PHP echo $result["in_debt"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_charge"]; ?></td>
                <?php
                $date=$result["slac_penMonth"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
            
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>

              </div>
			  
			  
			  
        <div class="mid" id='show_data'>
			          <div class="col-lg-12">
                <div id='show1' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                <thead>
                <tr align='center'>
                <th>ລະຫັດ</th>
                <th>ໝວດທີ</th>
                <th>ມາດຕາການກະທຳຜິດ</th>
                <th>ເນື້ອໃນ</th>
                
               
                </tr>
                </thead>
                   
                <?php


$i=0; 
include 'server/connect.php';
$stmt = "SELECT * FROM  KHT_slacken WHERE 1=1";
$query  = sqlsrv_query($conn,$stmt);


                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["slacken_nameID"]; ?></td>
                <?php
                $date=$result["slacken_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["slacken_name"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Lat"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["action_false"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_sex"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_first_job_to_bearrested"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Village"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_ProvinceBorn"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                
                <td align='center'><?PHP echo $result["slacken_to_judge"]; ?></td>
                <td align='center'><?PHP echo $result["items_time"]; ?></td>
                <td align='center'><?PHP echo $result["items_year"]; ?></td>
                <td align='center'><?PHP echo $result["items_Month"]; ?></td>
                <td align='center'><?PHP echo $result["to_act_year"]; ?></td>
                <td align='center'><?PHP echo $result["penalty_yet"]; ?></td>


                <td align='center'><?PHP echo $result["Type_penalty"]; ?></td>
                <td align='center'><?PHP echo $result["ApaiyaTol"]; ?></td>
                <td align='center'><?PHP echo $result["Cltotal"]; ?></td>
                <td align='center'><?PHP echo $result["Clpaid"]; ?></td>
                <td align='center'><?PHP echo $result["Clin_debt"]; ?></td>
                <td align='center'><?PHP echo $result["total"]; ?></td>
                <td align='center'><?PHP echo $result["paid"]; ?></td>
                <td align='center'><?PHP echo $result["in_debt"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_charge"]; ?></td>
                <?php
                $date=$result["slac_penMonth"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>
              </div>
            </div>
			
			
			
			
			<br><br>
			
	  		 <div class="row" id='show_data'>
            <!-- Datatables -->
            <div class="col-lg-10">
             
            
              <div id='show2' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                <thead>
                <tr align='center'>
                <th>ລະດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ຖືກຫາວ່າ</th>
                <th>ໂຈດທາງອາຍາ</th>
                <th>ໂຈດທາງແພ່ງ</th>
                <th>ຜູ້ຮັບຜິດຊອບທາງແພ່ງ</th>
                <th>ຈຳເລີຍ</th>
                <th>ຄຳອະພີພາກສາຂອງສານ</th>
                <th>Cnt</th>
                </tr>
                </thead>
                   
                <?php
                $i=0; 
                include 'server/connect.php';
                $stmt = "SELECT * FROM  KHT_slacken WHERE 1=1";
                $query  = sqlsrv_query($conn,$stmt);
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["slacken_nameID"]; ?></td>
                <?php
                $date=$result["slacken_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["slacken_name"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Lat"]; ?></td>

                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["action_false"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_sex"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_first_job_to_bearrested"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_Village"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_ProvinceBorn"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                
                <td align='center'><?PHP echo $result["slacken_to_judge"]; ?></td>
                <td align='center'><?PHP echo $result["items_time"]; ?></td>
                <td align='center'><?PHP echo $result["items_year"]; ?></td>
                <td align='center'><?PHP echo $result["items_Month"]; ?></td>
                <td align='center'><?PHP echo $result["to_act_year"]; ?></td>
                <td align='center'><?PHP echo $result["penalty_yet"]; ?></td>


                <td align='center'><?PHP echo $result["Type_penalty"]; ?></td>
                <td align='center'><?PHP echo $result["ApaiyaTol"]; ?></td>
                <td align='center'><?PHP echo $result["Cltotal"]; ?></td>
                <td align='center'><?PHP echo $result["Clpaid"]; ?></td>
                <td align='center'><?PHP echo $result["Clin_debt"]; ?></td>
                <td align='center'><?PHP echo $result["total"]; ?></td>
                <td align='center'><?PHP echo $result["paid"]; ?></td>
                <td align='center'><?PHP echo $result["in_debt"]; ?></td>
                <td align='center'><?PHP echo $result["slacken_charge"]; ?></td>
                <?php
                $date=$result["slac_penMonth"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
                </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
              </div>

              
			  
            </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
			
          </div>
     
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <!-- Footer -->
   </div>
  </div>

  <!-- Scroll to top -->
 <?php
 include 'head.php';
 ?>


</body>

</html>