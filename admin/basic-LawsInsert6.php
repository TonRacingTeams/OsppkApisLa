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
				var Rec_No=$("#Rec_No").val();
        var Group_ID=$("#Group_ID").val();


        //  alert('hellow');
				$.post("search_lawslnsert6.php",{
					Rec_No:Rec_No,
          Group_ID:Group_ID
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

input[type=text] {
 box-sizing: border-box;
 border: 1px solid #ff8c1a;
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
            <h5><B>ຄຳຖະແຫລງຄະດີແພ່ງທີ່ໄອຍະການປະຊາຊົນເປັນໂຈດ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ຄຳຖະແຫລງຄະດີແພ່ງທີ່ໄອຍະການປະຊາຊົນເປັນໂຈດ</B></li>
            
            </ol>
          </div>


          
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              
            <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                <div class="col-lg-3">

<lable>ຄົ້ນຫາຂໍ້ມູນ</lable>

<input type="text" class="form-control" id="Rec_No"  placeholder="ປ້ອນລຳດັບ"  name="Rec_No">
</div>


<div class="col-lg-3">

<lable>ຄົ້ນຫາຂໍ້ມູນ</lable>

<input type="text" class="form-control" id="Group_ID"  placeholder="ປ້ອນລະຫັດໝວດ"  name="Group_ID">
</div>


                <div class="col-lg-3"><br>
                <button class="btn btn-primary" id="search" type="button"><i class="fas fa-search fa-sm"></i> </button>
                </div>
                </div>
                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                <thead>
                <tr align='center'>
                <th>ລຳດັບ</th>
                <th>ລະຫັດໝວດ</th>
                
                <th>ລະຫັດມາດຕາ</th>
                
                <th>ມາດຕາ</th>
                <th>ກ່ຽວກັບມາດຕາ</th>
                <th>ຈຳນວນຂໍ້ຂັດແຍ່ງ</th>
              
               
                </tr>
                </thead>
                   
                <?php
                 include 'server/connect.php';  
                 $sql = "SELECT * FROM KHT_Rpt_NoDisagreeSumByLaws_Civll";
                 $query = sqlsrv_query( $conn, $sql );
  
               
                 while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                 { 
                ?>

                <tbody id="users">
                <tr>
              
                <td><?PHP echo $result["Rec_No"]; ?></td>
                <td><?PHP echo $result["Group_ID"]; ?></td>
                
                
                <td><?PHP echo $result["Group_No"]; ?></td>
                
                <td><?PHP echo $result["Law_No"]; ?></td>
                
                <td><?PHP echo $result["Quantity"]; ?></td>
              
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
        
        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>ພັດທະນາໂດຍ:ບໍລິສັດ ເອພີໄອເອັສ ຈຳກັດ &copy; <script> document.write(new Date().getFullYear()); </script>
           
            </span>
          </div>
        </div>
      </footer>



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