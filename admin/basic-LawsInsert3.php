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
				var Law_ID=$("#Law_ID").val();
				$.post("search_lawslnsert.php",{
					Law_ID:Law_ID
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
            <h5><B>ສັງລວມການຕິດຕາມຄະດີຢູ່ຄະນະສານຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ສັງລວມການຕິດຕາມຄະດີຢູ່ຄະນະສານຄະດີແພ່ງ, ການຄ້າ, ຄອບຄົວ ແລະ ເດັກ</B></li>
            
            </ol>
          </div>


          
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              
            <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-3">

                  <lable>ຄົ້ນຫາລະຫັດ</lable>
    
                  <input type="text" class="form-control" id="Law_ID"  placeholder="ຄົ້ນຫາລະຫັດ"  name="Law_ID">
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
                <th>ລະຫັດໝວດ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດມາດຕາ</th>
                
                <th>ມາດຕາ</th>
                <th>ກ່ຽວກັບມາດຕາ</th>
                <th>ຈຳນວນຂໍ້ຂັດແຍ່ງ</th>
              
               
                </tr>
                </thead>
                   
                <?php
                 include 'server/connect.php';  
                 $sql = "SELECT * FROM KHT_Rpt_MeetingSumByLaws_Civll Order by Law_ID";
                 $query = sqlsrv_query( $conn, $sql );
  
               
                 while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                 { 
                ?>

                <tbody id="users">
                <tr>
              
                <td><?PHP echo $result["Group_ID"]; ?></td>
                <td><?PHP echo $result["Rec_No"]; ?></td>
                <td><?PHP echo $result["Law_ID"]; ?></td>
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