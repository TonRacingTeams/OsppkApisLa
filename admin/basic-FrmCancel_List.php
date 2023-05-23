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
				var Office_ID=$("#Office_ID").val();
        var Office_Name=$("#Office_Name").val();
        

        //  alert('hellow');
				$.post("search_FrmCancel_List.php",{
					Office_ID:Office_ID,
          Office_Name:Office_Name
          
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

.button1 {
  background-color: #4CAF50; 
  color: black; 
  border: 2px solid #4CAF50;
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
            <h5><B>ຂໍ້ມູນສຳນັກງານ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ຂໍ້ມູນສຳນັກງານ</B></li>
            
            </ol>
          </div>


          
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              
            <div class="card mb-0" style='border: 2px solid #057c0c; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຂໍ້ມູນ</lable>
    
                  <input type="text" class="form-control" id="Office_ID"  placeholder="ປ້ອນລະຫັດ"  name="Office_ID">
                </div>

                <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຂໍ້ມູນ</lable>
    
                  <input type="text" class="form-control" id="Office_Name"  placeholder="ປ້ອນຊື່ (ພາສາລາວ)"  name="Office_Name">
                </div>

                




                <div class="col-lg-3"><br>
                <button class="btn btn-primary" id="search" type="button"><i class="fas fa-search fa-sm"></i> </button>
                <a href="app/add_Frm_Cancel_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                
              </div>

                </div>
                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 163%">
                <thead>
                <tr align='center'>

                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                

                <th>ລະຫັດ</th>
                <th>ຊື່ສຳນັກງານ</th>
                
                <th>ທີ່ຢູ່ 1</th>
                <th>Address 1</th>
                <th>ທີ່ຢູ່ 2</th>
                <th>Address 2</th>
                <th>ໂທລະສັບ</th>
                <th>Fax</th>
                <th>ອີເມວ</th>
                <th>Website</th>
                <th>ທີ່</th>
                <th>Singned At</th>
                <th>ລົງລາຍເຊັນ</th>
                <th>Signature</th>
               
                </tr>
                </thead>
                   
                <?php
                 include 'server/connect.php';  
                 $sql = " SELECT * FROM KHT_Office";
                 $query = sqlsrv_query( $conn, $sql );
                 while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                 { 
                ?>

                <tbody id="users">
                <tr>

                <td align='center'>
           
                <a href="pages/Form_update_FrmCancel_List.php?Office_ID=<?PHP echo $result["Office_ID"];?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
              </td>
                <td align='center'>
                <a href="pages/Delete_FrmCancel_List.php?Office_ID=<?php echo $result['Office_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>
            
         
                
                <td><?PHP echo $result["Office_ID"]; ?></td>
                <td><?PHP echo $result["Office_Name"]; ?></td>
                
                
                <td><?PHP echo $result["Address1"]; ?></td>
                <td><?PHP echo $result["Address1E"]; ?></td>
                <td><?PHP echo $result["Address2"]; ?></td>
                <td><?PHP echo $result["Address2E"]; ?></td>
                <td><?PHP echo $result["Tel"]; ?></td>
                <td><?PHP echo $result["Fax"]; ?></td>
                
                <td><?PHP echo $result["E_mail"]; ?></td>
                <td><?PHP echo $result["Web_Site"]; ?></td>
                <td><?PHP echo $result["Place"]; ?></td>
                <td><?PHP echo $result["PlaceE"]; ?></td>
                <td><?PHP echo $result["Sign1"]; ?></td>
                <td><?PHP echo $result["Sign1E"]; ?></td>

                
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