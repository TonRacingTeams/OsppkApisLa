<!DOCTYPE html>
<html lang="en">

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
        var ConvietID=$("#ConvietID").val();


     //   alert(start);
				$.post("search_FrmMeeting_list.php",{
			  	start:start,
					end:end,
          ConvietID:ConvietID
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
            <h5>ປ່ອຍຕົວຕາມມາດຕາ 105</h5>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ປ່ອຍຕົວຕາມມາດຕາ 105</li>
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
                    <input type="text" class="form-control " id="ConvietID"   name="ConvietID" >	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>
                </div><br>

                </div>
                
              <div id='show' class="table-responsive p-10">
                <table  class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>No</th>
                <th>ເລກນັບ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>

                <th>ວັນເດືອນປີໝົດໂທດ</th>
                <th>ອາຍຸເລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ອາຊີບ</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໃໝ(ຈ່າຍແລ້ວ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນຜ່ອນ)</th>
                <th>ຄ່າປັບໃໝ(ຍັງເຫຼືອ) </th>
                <th>ໝາຍເຫດ</th>
                <th>ວັນທີ່ຖືກໂອນ</th>
                
               
                </tr>
                </thead>
                   
                <?php
                  include 'server/connect.php';
                  $i=0;  
                  @$start=$_POST['start'];
                  $sql = " SELECT * FROM KHT_Conviet_105 WHERE 1=1";
                  $query = sqlsrv_query( $conn, $sql );
                  while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 

                  $i++;
                ?>

                <tbody id="users">
                <tr>
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["ConvietID"]; ?></td>
                <?php
                $date=$result["Kok_Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                <td align='center'><?PHP echo $result["Kok_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_surname"]; ?></td>

                <?php
                $date=$result["Brithday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Kok_timemake"]; ?></td>
                <td align='center'><?PHP echo $result["kok_sex"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_National"]; ?></td>
                <td align='center'><?PHP echo $result["befor_job"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Village"]; ?></td>
                <td align='center'><?PHP echo $result["befor_District"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Province"]; ?></td>
                <td align='center'><?PHP echo $result["wrongdetail"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_punish"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Total"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Beleft"]; ?></td>
                

                <?php
                $date=$result["Con_penMonth"];
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
			  
                                    <!-- ຕາຕະລາງທີ02 -->
			  
          <div class="mid" id='show_data'>
            <div class="col-lg-10">
              <div id='show1' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                <thead>
                <tr align='center'>
                <th>No</th>
                <th>ເລກນັບ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                
                <th>ອາຍຸເລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ບ້ານ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ເມືອງ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ແຂວງ)</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໃໝ(ຈ່າຍແລ້ວ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນຜ່ອນ)</th>
                <th>ຄ່າປັບໃໝ(ຍັງເຫຼືອ) </th>
                <th>ໝາຍເຫດ</th>
                
               
                </tr>
                </thead>





                 <?php
                 include 'server/connect.php';
                 $i=0;  
                 @$start=$_POST['start'];
                  $sql = "SELECT * FROM KHT_Conviet_105";
                 $query = sqlsrv_query( $conn, $sql );
                 while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
               { 
                ?>




                <tbody id="usersf">
                <tr id="demo">





                <tbody id="tableId">
                <tr id ="showitem"> 
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["ConvietID"]; ?></td>
                

                <td align='center'><?PHP echo $result["Kok_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_surname"]; ?></td>


                <td align='center'><?PHP echo $result["Kok_timemake"]; ?></td>
                <td align='center'><?PHP echo $result["kok_sex"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_National"]; ?></td>
                <td align='center'><?PHP echo $result["befor_job"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Village"]; ?></td>
                <td align='center'><?PHP echo $result["befor_District"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Province"]; ?></td>


                <?php
                $date=$result["Kok_Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                
                <td align='center'><?PHP echo $result["Kok_wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_punish"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Total"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Beleft"]; ?></td>
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
			
			            <!-------------------------------------- ຕາຕະລາງທີ02 ---------------------------------------------------------------------------------->
			
			
			<br><br>
			
              <!---------------------------------- ຕາຕະລາງທີ03 ---------------------------------------------------------------------------------->

		       <div class="row" id='show_data'>
              <div class="col-lg-10">
              <div id='show2' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                <thead>
                <tr align='center'>
                <th>No</th>
                <th>ເລກນັບ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                
                <th>ອາຍຸເລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ບ້ານ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ເມືອງ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ແຂວງ)</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຄ່າປັບໃໝ(ຈ່າຍແລ້ວ)</th>
                <th>ຄ່າປັບໃໝ(ຈຳນວນຜ່ອນ)</th>
                <th>ຄ່າປັບໃໝ(ຍັງເຫຼືອ) </th>
                <th>ໝາຍເຫດ</th>
                
               
                </tr>
                </thead>





                <?php
                 include 'server/connect.php';
                 $i=0;  
                 @$start=$_POST['start'];
                  $sql = "SELECT * FROM KHT_Conviet_105";
                 $query = sqlsrv_query( $conn, $sql );
                 while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
               { 
               ?>




                <tbody id="shows">
                <tr id="demo">





                 <tbody id="tableId">
                <tr id ="showitem"> 
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["ConvietID"]; ?></td>
                

                <td align='center'><?PHP echo $result["Kok_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_surname"]; ?></td>


                <td align='center'><?PHP echo $result["Kok_timemake"]; ?></td>
                <td align='center'><?PHP echo $result["kok_sex"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_National"]; ?></td>
                <td align='center'><?PHP echo $result["befor_job"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Village"]; ?></td>
                <td align='center'><?PHP echo $result["befor_District"]; ?></td>
                <td align='center'><?PHP echo $result["befor_Province"]; ?></td> 


                 <?php
                $date=$result["Kok_Dtouch"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>

                
                <td align='center'><?PHP echo $result["Kok_wrong"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_punish"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Total"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Paid"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Slacken"]; ?></td>
                <td align='center'><?PHP echo $result["Kok_Beleft"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                </tr>
                </thead>
                   
                
                
                </tr>
                </tbody>



                <?PHP
            
               } 
               ?>



               
                </table>
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