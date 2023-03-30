



<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'head.php';
?>

<style>
  div,span,a{
    color
  }
</style>

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
          <div class="row mb-3">
            <div class="col-xl-12 col-md-12 mb-12">
              <div class="card h-100" style='border: 1px solid #2f79ea; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-12">
                      <div class="text-xs font-weight-bold text-uppercase mb-6">
                      <h1 align='center' style="color:#1a53ff;" > 
                      <B>ຍີນດີຕອນຮັບເຂົ້າສູ່  ໂປຣແກຣມ ອົງການໄອຍາການປະຊາຊົນເຂດ</B></h1>
                      </div> 
                    </div>
                   
                  </div>
                  
                </div>
               
              </div>
            </div>
            </div>

            </div>

           

               <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-3">
         
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #cbb534; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">

                       <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Usr_id)as b from IT_Users_CRM";
                         $query = sqlsrv_query( $conn, $sql );
                         $result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>
                    <div class="text-xs font-weight-bold text-uppercase mb-1">ພະນັກງານ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$result['b'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                     
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmUser.php">
                      <i class="fas fa-users fa-2x text-info"></i></a>
                    </div>    
                  </div> 
                </div>
              </div>

              
            </div>

       


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #cacd4b; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                    <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Law_ID)as a from Cri_Law_files";
                         $query = sqlsrv_query( $conn, $sql );
                         $a = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>
                    <div class="text-xs font-weight-bold text-uppercase mb-1">ຂໍ້ມູນກ່ຽວກັບກົດໝາຍ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$a['a'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-file-archive-o"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmLaw_Files.php">
                      <i class="fas fa-file fa-2x text-info"></i></a>
                    </div> 
                  </div>
                </div>
              </div>
            </div>




            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #3afa1f; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">


                    <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Law_ID)as ab from Cri_Law_files_Labieb";
                         $query = sqlsrv_query( $conn, $sql );
                         $bs = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>


                    <div class="text-xs font-weight-bold text-uppercase mb-1">ບັນດາຂໍ້ກຳນົດ ແລະ ລະບຽບການ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$bs['ab'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmLaw_Files_Labieb.php">
                    <i class="fas fa-file fa-2x text-info"></i></a>
                    </div>  
                  </div>  
                </div>
              </div>
            </div>



           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100" style='border: 1px solid #ff80c0; border-radius: 8px;'>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">

                    

                    <?php
                         include 'server/connect.php';  
                         $sql = "select count(DISTINCT Law_ID)as bb from Cri_Law_files_Other";
                         $query = sqlsrv_query( $conn, $sql );
                         $bb= sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
                         
                         ?>


                    <div class="text-xs font-weight-bold text-uppercase mb-1">ຂໍ້ມູນອືນໆ</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$bb['bb'];?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                        <span>ລາຍການ</span>
                      </div>
                    </div>
                    <div class="col-auto">
                    <a href="basic-FrmLaw_Files_Other.php">
                      <i class="fas fa-file fa-2x text-info"></i></a>
                    </div>  
                  </div>  
                </div>
              </div>
            </div>



            </div>
            </div>


       
        <!---Container Fluid-->
      </div>
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

