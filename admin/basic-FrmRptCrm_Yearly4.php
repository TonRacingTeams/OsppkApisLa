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
        //   var start=$("#start").val();
				// var end=$("#end").val();
        var Year_Data=$("#Year_Data").val();
        
  //  alert('hellow');
				$.post("search_years4.php",{
					// start:start,
					// end:end,
          Year_Data:Year_Data
          
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
            <h5>ຂໍ້ມູນສະຖິຕິປະຈຳເດືອນເຂດ </h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຂໍ້ມູນສະຖິຕິປະຈຳເດືອນເຂດ </li>

           
            
            </ol>
          </div>


          
          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                <!-- <div class="col-lg-3"> -->

                <!-- <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>

                    <input type="date" class="form-control " id="start"   name="start" 
                    value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                    <div class="col-lg-3">
                   <lable>ຫາວັນທີເດືອນປີ</lable>

                   <?php
                     @$end=$_POST['end'];
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >	
                 
                  </div> -->



                  <div class="col-lg-2">
                   <lable>ປີ</lable>
                    <input type="text" class="form-control " id="Year_Data"   name="Year_Data">	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmRptCrm_Yearly4.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                    </div>
                  </div>


                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 123%">
                <thead>
                <tr align="center">
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                        <th>ເລກນັບ</th>
                        <th>ລາຍການຂໍ້ມູນ</th>
                        <th>ເດືອນ1</th>
                        <th>ເດືອນ2</th>
                        <th>ເດືອນ3</th>
                        <th>ເດືອນ4</th>
                        <th>ເດືອນ5</th>
                        <th>ເດືອນ6</th>
                        <th>ເດືອນ7</th>
                        <th>ເດືອນ8</th>
                        <th>ເດືອນ9</th>
                        <th>ເດືອນ10</th>
                        <th>ເດືອນ11</th>
                        <th>ເດືອນ12</th>
                        <th>ປີ</th>
                        <th>ໝາຍເຫດ</th>
                        
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $i=0;  
                @$start=$_POST['start']; 
                $sql = "SELECT * FROM Khet_Rpt";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr> 
                  
                
                <td align='center'>
      
           <a href="pages/Update_FrmRptCrm_Yearly3.php?Rpt_ID=<?PHP echo $result["Rpt_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
           
           </td>
           <td align='center'>
           <a href="pages/Delete_FrmRptCrm_Yearly3.php?Rpt_ID=<?php echo $result['Rpt_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
           </td>


                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <!-- <td align='center'><?PHP echo $result["Rpt_ID"]; ?></td> -->
                        <td><?PHP echo $result["Description"]; ?></td>
                        <td><?PHP echo $result["M1"]; ?></td>
                        <td><?PHP echo $result["M2"]; ?></td>
                        <td><?PHP echo $result["M3"]; ?></td>
                        <td><?PHP echo $result["M4"]; ?></td>
                        <td><?PHP echo $result["M5"]; ?></td>
                        <td><?PHP echo $result["M6"]; ?></td>
                        <td><?PHP echo $result["M7"]; ?></td>
                        <td><?PHP echo $result["M8"]; ?></td>
                        <td><?PHP echo $result["M9"]; ?></td>
                        <td><?PHP echo $result["M10"]; ?></td>
                        <td><?PHP echo $result["M11"]; ?></td>
                        <td><?PHP echo $result["M12"]; ?></td>
                        <td><?PHP echo $result["Year_Data"]; ?></td>
                        <td><?PHP echo $result["Khet_No"]; ?></td>

               

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