<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'head.php';
?>



<script>
		$(function(){

     // alert(start);
			$("#search").click(function(){

				// var start=$("#start").val();
				// var end=$("#end").val();
        var Law_ID=$("#Law_ID").val();
        var Law_Name=$("#Law_Name").val();


     //   alert(start);
				$.post("search_frmtouIn2.php",{
					// start:start,
					// end:end,
          
          Law_ID:Law_ID,
          Law_Name:Law_Name
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
  


        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ຂໍ້ຂັດແຍ່ງ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຂໍ້ຂັດແຍ່ງ</li>
            
            </ol>
          </div>

          
          


          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <!-- <div class="col-lg-3">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable> -->

                    <!-- <?php
                     @$start=$_POST['start'];
                    ?> -->

                    <!-- <input type="date" class="form-control " id="start"   name="start" 
                    value="<?php  echo date('Y-m-01');?>" > 
                   </div> -->

                    <!-- <div class="col-lg-3">
                   <lable>ຫາວັນທີເດືອນປີ</lable> -->

                   <!-- <?php
                     @$end=$_POST['end'];
                    ?> -->
                  <!-- <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >	
                 
                  </div> -->

                  <div class="col-lg-2">
                   <lable>ລະຫັດມາດຕາ</lable>
                    <input type="text" class="form-control " id="Law_ID"   name="Law_ID">	
                  </div>


                  <div class="col-lg-5">
                   <lable>ມາດຕາ</lable>
                    <input type="text" class="form-control " id="Law_Name"   name="Law_Name">	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmTouIn_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                   
                  </div>
                  </div>


                </div><br>
                </div>


                <div id='show' class="table-responsive p-10">
                  <table class='table table-bordered' style="width: 100%">
                    <thead>
                      <tr align='center'>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດມາດຕາ</th>
                        <th>ມາດຕາ</th>
                        <th>ເນື້ອໃນ</th>
                        <th>ເລືອກ</th>
                        
                       
                      </tr>
                    </thead>
                   
                 

                <?php
                include 'server/connect.php';
                $i=0;        
               
              
              
                $sql = "SELECT * FROM KHT_Laws";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>





                    <tbody id="users">
                    <tr>
                      <td><?PHP echo $i; ?></td>  
                      <td><?PHP echo $result["Law_ID"]; ?></td>
                      <td><?PHP echo $result["Law_Name"]; ?></td>
                      <td><?PHP echo $result["Item_Name"]; ?></td>
                      <td><?PHP echo $result["Choose"]; ?></td>
                      
                     
                    
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
       
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>ພັດທະນາໂດຍ:ບໍລິສັດ ເອພີໄອເອັສ ຈຳກັດ &copy; <script> document.write(new Date().getFullYear()); </script>
           
            </span>
          </div>
        </div>
      </footer>
        <!-- Footer -->
        </div>
        </div>
    
    <!-- Scroll to top -->
   <?php
   include 'head.php';
   ?>
  
  
  </body>
  
  </html>