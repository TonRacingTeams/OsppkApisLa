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
        var Law_Name=$("#Law_Name").val();
        var Law_NmE=$("#Law_NmE").val();

        //  alert('hellow');
				$.post("search_lawslnsert7.php",{
					Law_ID:Law_ID,
          Law_Name:Law_Name,
          Law_NmE:Law_NmE
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
            <h5><B>ບັນດາຂໍ້ກຳນົດ ແລະ ລະບຽບການ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ບັນດາຂໍ້ກຳນົດ ແລະ ລະບຽບການ</B></li>
            
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
    
                  <input type="text" class="form-control" id="Law_ID"  placeholder="ປ້ອນລະຫັດ"  name="Law_ID">
                </div>


                <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຂໍ້ມູນ</lable>
    
                  <input type="text" class="form-control" id="Law_Name"  placeholder="ປ້ອນຊື່ກົດໝາຍ  (ພາສາລາວ)"  name="Law_Name">
                </div>


                <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຂໍ້ມູນ</lable>
    
                  <input type="text" class="form-control" id="Law_NmE"  placeholder="ປ້ອນຊື່ກົດໝາຍ (ພາສາອັງກິດ)"  name="Law_NmE">
                </div>

                
                  
                <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmLawsInsert7.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                    </div>
               
                </div>
                <!-- </div>
                </form>
                </div><br>

                </div><br>




             <div class="card mb-0">
             <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                


             
                



                <div class="col-lg-3"><br>
                <button class="btn btn-primary" id="search" type="button"><i class="fas fa-search fa-sm"></i> </button> -->
                
                <!-- </div>
                </div> -->
                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                <thead>
                <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ເລກລະຫັດ</th>
                <th>ຊື່ເອກະສານ (ພາສາລາວ)</th>
                <th>ຊື່ເອກະສານ (ພາສາອັງກິດ)</th>
                <th>ຊື່ file</th>
              
               
                </tr>
                </thead>
                   
                <?php
                 include 'server/connect.php';  
                 $sql = "SELECT * FROM KHT_Law_Labieb";
                 $query = sqlsrv_query( $conn, $sql );
  
               
                 while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                 { 
                ?>

                <tbody id="users">
                <tr>


                <td align='center'>
      
      <a href="pages/Update_FrmLawsInsert7.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
      
      </td>
      <td align='center'>
      <a href="pages/Delete_FrmLawsInsert7.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
      </td>
              
                
                <td><?PHP echo $result["Law_ID"]; ?></td>
                <td><?PHP echo $result["Law_Name"]; ?></td>
                <td><?PHP echo $result["Law_NmE"]; ?></td>
                <td><?PHP echo $result["File_Name"]; ?></td>
                
              
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