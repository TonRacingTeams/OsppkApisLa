<!DOCTYPE html>
<html lang="en">

<head>

<?php

include 'head.php';


?>



<script>
		$(function(){

  //    alert(start);
			$("#search").click(function(){

				var start=$("#start").val();
				var end=$("#end").val();
        var Item_No=$("#Item_No").val();
        var Doc_No=$("#Doc_No").val();
     //   alert(start);
				$.post("search_cancel.php",{
			  	start:start,
					end:end,
          Item_No:Item_No,
          Doc_No:Doc_No
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
            <h5><B>ຂໍ້ມູນສຳນັກງານ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ຂໍ້ມູນສຳນັກງານ</B></li>
            
            </ol>
          </div>


          
          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-3">
                   <lable><B>ຂໍ້ມູນແຕ່ວັນທີປີ</B></lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>

                    <input type="date" class="form-control " id="start"   name="start" 
                    value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                    <div class="col-lg-3">
                   <lable><B>ຫາວັນທີເດືອນປີ</B></lable>

                   <?php
                     @$end=$_POST['end'];

                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >	
                 
                  </div>

                   <div class="col-lg-2">
                   <lable><B>ເລກທີຂາເຂົ້າ</B></lable>
                    <input type="text" class="form-control " id="Item_No"   name="Item_No" >	
                  </div>

                  <div class="col-lg-2">
                   <lable><B>ເລກທີສຳນວນ</B></lable>
                    <input type="text" class="form-control " id="Doc_No"   name="Doc_No">	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmCancelIn_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                   
                   
                  </div>
                  </div>


                </div><br>

                </div>
                
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 250%">
                <thead>
                <tr>
                <th>ເລກນັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ເລກທີຂາເຂົ້າ</th>
                <th>ວັນທີເດືອນປີ</th>
                <th>ເລກທີສຳນວນ</th>
                <th>ວ.ດ.ປ ລົງສຳນວນ</th>
                <th>ສະຖານການກະທຳຜິດ</th>
                <th>ໂຈດທາງອາຍາ</th>
                <th>ໂຈດທາງແພ່ງ</th>
                <th>ຈຳເລີຍ</th>
                <th>ພະແນກຮັບຜິດຊອຍ</th>
                <th>ພະນັກງານຮັບຜິດຊອບ</th>
                <th>ແກ້ໄຂຂໍ້ມູນ</th>
                <th>ລົບຂໍ້ມູນ</th>
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $i=0;  
              
             
              
                @$start=$_POST['start'];
              
                $sql = " SELECT * FROM KHT_Office WHERE 1=1";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr>  
                <td><?php echo $result["Office_ID"];?></td>          
                <td><?PHP echo $result["Office_Name"]; ?></td>
                <td><?PHP echo $result["Office_NameE"]; ?></td>

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






                <td align='center'>
                <a href="pages/from_update_cancel.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                </td>
                <td align='center'>
                <a href="pages/delete_canecl.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>
              </tr>
                </tbody>
                <?php
              
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