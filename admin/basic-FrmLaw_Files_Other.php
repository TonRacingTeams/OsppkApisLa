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
				$.post("search_frmlaw_other.php",{
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
            <h2 class="h3 mb-0 text-gray-800">ຂໍ້ມູນອື່ນໆ</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຂໍ້ມູນອື່ນໆ</li>
            
            </ol>
          </div>


          
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
            
            


            <form action="app/add_frmLaw_other.php" name="frmAdd" method="POST" enctype='multipart/form-data'>
            <div class="card mb-0" style='border: 2px solid #057c0c; border-radius: 8px;'>
             <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                

              
                <div class="input-group">
                  <div class="col-lg-3">
                  <lable>ລະຫັດ</lable>
                  <input type="text" class="form-control" id="Law_IDs"  placeholder="ລະຫັດ"  name="Law_ID" required>
                  </div>

                  <div class="col-lg-3">
                  <lable>ຊື່(ພາສາລາວ)</lable>
                  <input type="text" class="form-control" id="Law_Name"  placeholder="ຊື່(ພາສາລາວ)"  name="Law_Name" required>
                  </div>

                  <div class="col-lg-3">
                  <lable>ຊື່(ພາສາອັງກິດ)</lable>
                  <input type="text" class="form-control" id="Law_NmE"  placeholder="ຊື່(ພາສາອັງກິດ)"  name="Law_NmE" required>
                  </div>

                  <div class="col-lg-3">
                  <lable>ຊື່ຟາຍເອກະສານ</lable>
                  <input type="file" class="form-control" id="File_Name"  placeholder="ຊື່ຟາຍເອກະສານ"  name="File_Name" required>
                  </div>
                  
                <div class="col-lg-3"><br>
                <button type="submit" class="btn btn-primary"  >ບັນທືກ </button>
                <a href="basic-FrmLaw_Files_Other.php" class="btn btn-danger">ຍົກເລີກ</a>
               
                </div>
                </div>
                </form>
                </div><br>

                </div><br>




             <div class="card mb-0">
             <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                


             
                <div class="input-group">
                  <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຂໍ້ມູນ</lable>
    
                  <input type="text" class="form-control" id="Law_ID"  placeholder="ລະຫັດເອກະສານ"  name="Law_ID">
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
               
                <th>ເລກລະຫັດ</th>
                <th>ຊື່ກົດໝາຍ (ພາສາລາວ)</th>
                <th>ຊື່ກົດໝາຍ (ພາສາອັງກິດ)</th>
                <th>ຊື່ file</th>
                <th>ດາວໂຫລດເອກະສານ</th>
                <th>ແກ້ໄຂຂໍ້ມູນ</th>
                <th>ລົບຂໍ້ມູນ</th>
               
                </tr>
                </thead>
                   
                <?php
                 include 'server/connect.php';  
                 $sql = "SELECT * FROM Cri_Law_files_Other";
                 $query = sqlsrv_query( $conn, $sql );
  
               
                 while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                 { 
                ?>

                <tbody id="users">
                <tr>
            
         
                <td align='center'><?PHP echo $result["Law_ID"]; ?></td>
                <td align='center'><?PHP echo $result["Law_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Law_NmE"]; ?></td>
                <td align='center'><?PHP echo $result["File_Name"]; ?></td>


                <td align='center'>
           
                <a href="cv/<?PHP echo $result["File_Name"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
            
                </td>

                <td align='center'>
            
                <a href="pages/Update_Law_other.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_other.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>




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