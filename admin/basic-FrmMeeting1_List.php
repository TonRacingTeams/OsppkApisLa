<!DOCTYPE html>
<html lang="en">

<!-- ນັກໂທດຢາເສບຕິດທີ່ມີເງື່ອນໄຂສະເໜີໃຫ້ອະໄພຍະໂທດຜ່ອນໂທດ -->

<head>

<?php
include 'head.php';
?>


    <script>
		$(function(){
  //   alert (start);
			$("#search").click(function(){
				var start=$("#start").val();
				var end=$("#end").val();
        var narcotic_numberID=$("#narcotic_numberID").val();


     //   alert(start);
				$.post("search_FrmMeeting1_list.php",{
			  	start:start,
					end:end,
          narcotic_numberID:narcotic_numberID
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
            <h5>ນັກໂທດຢາເສບຕິດທີ່ມີເງື່ອນໄຂສະເໜີໃຫ້ອະໄພຍະໂທດຜ່ອນໂທດ</h5>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ນັກໂທດຢາເສບຕິດທີ່ມີເງື່ອນໄຂສະເໜີໃຫ້ອະໄພຍະໂທດຜ່ອນໂທດ</li>
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
                   <lable>ລະຫັດ</lable>
                    <input type="text" class="form-control " id="narcotic_numberID"   name="narcotic_numberID" >	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmMeeting1_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                  </div>
                  </div>
                </div><br>

                </div>
               
                
              <div id='show2' class="table-responsive p-10">
                <table  class='table table-bordered' style="width: 363%">
                <thead>
                <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                <th>ລະຫັດ</th>
                <th>ສະບັບເລກທີ</th>

                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                
                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ສັນຊາດ</th>
                <th>ເພດ</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ວັນເດືອນປີຖືກຈັບຕົວ</th>
                <th>ຂໍ້ຫາການເຮັດຜິດ</th>
                <th>ລາຍລະອຽດການເຮັດຜິດ</th>
                <th>ສານຕັດສີນລົງໂທດ</th>
                <th>ລົງວັນທີ</th>
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ຈຳນວນປີ</th>
                <th>ຈຳນວນເດືອນ</th>
                <th>ປະຕິບັດໂທດແລ້ວຈັກປີ</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄພຍະໂທດປີ</th>


                <th>ຄ່າປັບໄໝ(ສະກຸນເງີນ)</th>
                <th>ຈຳນວນລວມ</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ຈຳນວນຜ່ອນ</th>
                <th>ເປີເຊັນຜ່ອນຄ່າປັບໄໝ</th>
                <th>ໝາຍເຫດ</th>
                
               
                </tr>
                </thead>
                   
                <?php
                  include 'server/connect.php';
                  $i=0;  
                  @$start=$_POST['start'];
                  $sql = "SELECT * FROM  KHT_narcotic_slacken";
                  $query = sqlsrv_query( $conn, $sql );
                  while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="tableId">
                <tr id ="showitem">


                <td>
                        <a href="#?narcotic_numberID=<?PHP echo $result["narcotic_numberID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmMeeting1_List.php?narcotic_numberID=<?php echo $result['narcotic_numberID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["narcotic_numberID"]; ?></td>
                <td align='center'><?PHP echo $result["nemeral"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_name"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_lat"]; ?></td>





                <td align='center'><?PHP echo $result["narcotic_false"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_sex"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_first_job_to_bearrested"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_Village"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_ProvinceBorn"]; ?></td>

                <?php
                $date=$result["narcotic_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["narcotic_charge"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["narcotic_to_judge"]; ?></td>
                
                <?php
                $date=$result["install"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["items_time"]; ?></td>
                <td align='center'><?PHP echo $result["items_year"]; ?></td>
                <td align='center'><?PHP echo $result["items_Month"]; ?></td>
                <td align='center'><?PHP echo $result["to_act_year"]; ?></td>
                <td align='center'><?PHP echo $result["penalty_yet"]; ?></td>
                <td align='center'><?PHP echo $result["Type_penalty"]; ?></td>
                <td align='center'><?PHP echo $result["ApaiyaTol"]; ?></td>
                

                <td align='center'><?PHP echo $result["rates"]; ?></td>
                <td align='center'><?PHP echo $result["total"]; ?></td>
                <td align='center'><?PHP echo $result["paid"]; ?></td>
                <td align='center'><?PHP echo $result["yat"]; ?></td>
                <td align='center'><?PHP echo $result["in_debt"]; ?></td>
                <td align='center'><?PHP echo $result["to_reduce_sentence"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>




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