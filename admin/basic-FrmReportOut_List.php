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
				var aa=$("#start").val();
				var bb=$("#end").val();
        var Item_ID=$("#Item_ID").val();
        var Item_IDNew=$("#Item_IDNew").val();
        var Pers_Name=$("#Pers_Name").val();

        //  alert('hellow');
				$.post("search_frmReportOut_List.php",{
					start:aa,
					end:bb,
          Item_ID:Item_ID,
          Item_IDNew:Item_IDNew,
          Pers_Name:Pers_Name
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
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('navbar.php')?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ບັນຊີການກໍ່ອາດຊະຍາກຳ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ບັນຊີການກໍ່ອາດຊະຍາກຳ</li>
            
            </ol>
          </div>


           


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-2">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>

                    <input type="date" class="form-control " id="start"   name="start" 
                    value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                    <div class="col-lg-2">
                   <lable>ຫາວັນທີເດືອນປີ</lable>

                   <?php
                     @$end=$_POST['end'];
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >	
                 
                  </div>

                   <div class="col-lg-2">
                   <lable>ລະຫັດຄະດີ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID">	
                  </div>

                  <div class="col-lg-2">
                   <lable>ລະຫັດຜູ້ຖືກຫາ</lable>
                    <input type="text" class="form-control " id="Item_IDNew"   name="Item_IDNew">	
                  </div>


                  <div class="col-lg-3">
                   <lable>ຊື່ ແລະ ນາມສະກຸນ</lable>
                    <input type="text" class="form-control " id="Pers_Name"   name="Pers_Name">	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmReportOut_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                  </div>
                  </div>
                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 136%">
                <thead>
                <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ລະຫັດຜູ້ຖືກຫາ</th>
                <th>ວັນເດືອນປີກໍ່ອາສະຍາກຳ</th>
                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                <th>ປະເພດ ແລະ ສະຖານການກະທຳຜີດ</th>
                <th>ອາຍຸ</th>
                <th>ເພດ</th>
                <th>ອາຊີບ</th>
                <th>ຊົນເຜົ່າ</th>
                <th>ເຊື້ອຊາດ</th>
                <th>ສັນຊາດ</th>
                <th>ປະເທດ</th>
                <th>ອຸປະກອນການໃຊ້ກະທຳຜິດ</th>
                <th>ສາເຫດ</th>
                
                </tr>
                </thead>
                   
                <?php
               include 'server/connect.php';
               $i=0;        
               
               @$start=$_POST['start'];
             
               $sql = "SELECT * FROM KHT_Criminal_Pers";
             
               $query = sqlsrv_query( $conn, $sql );
               while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
               {
                 $i++; 
                ?>

                <tbody id="users">
                <tr>


                <td>
                        <a href="app/edit_FrmReportOut_List.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmReportOut_List.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                <td align='center'><?PHP echo $result["Item_IDNew"]; ?></td>
                
                
                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
                <td align='center'><?PHP echo $result["Pers_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Problem"]; ?></td>
                <td align='center'><?PHP echo $result["Age"]; ?></td>
                <td align='center'><?PHP echo $result["Gender"]; ?></td>
                <td align='center'><?PHP echo $result["Professional"]; ?></td>
                <td align='center'><?PHP echo $result["Race"]; ?></td>
                <td align='center'><?PHP echo $result["Original"]; ?></td>
                <td align='center'><?PHP echo $result["Nationallity"]; ?></td>
                <td align='center'><?PHP echo $result["Country"]; ?></td>
                <td align='center'><?PHP echo $result["Used_Tool"]; ?></td>
                <td align='center'><?PHP echo $result["Resion"]; ?></td>
                
                
                


            
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