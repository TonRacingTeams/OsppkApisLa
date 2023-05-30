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
        var numberID=$("#numberID").val();
        var Alleged_Name=$("#Alleged_Name").val();
        var Alleged_latname=$("#Alleged_latname").val();


        //  alert('hellow');

				$.post("search_FrmNoAGaint_List.php",{
					start:aa,
					end:bb,
          numberID:numberID,
          Alleged_Name:Alleged_Name,
          Alleged_latname:Alleged_latname
         
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
            <h5>ບັນຊີຜູ້ຖຶກຫາທີ່ສຳນວນຄະດີໄດ້ແກ້ໄຂແລ້ວ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ບັນຊີຜູ້ຖຶກຫາທີ່ສຳນວນຄະດີໄດ້ແກ້ໄຂແລ້ວ</li>
            
            </ol>
          </div>


          
          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                

                <div class="input-group">
                  <div class="col-lg-3">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

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
                  </div>


                  <div class="col-lg-2">
                   <lable>ເລກນັບ</lable>
                    <input type="text" class="form-control " id="numberID"   name="numberID" >	
                  </div>

                  <div class="col-lg-2">
                   <lable>ຊື່</lable>
                    <input type="text" class="form-control " id="Alleged_Name"   name="Alleged_Name" >	
                  </div>

                  <div class="col-lg-2">
                   <lable>ນາມສະກຸນ</lable>
                    <input type="text" class="form-control " id="Alleged_latname"   name="Alleged_latname" >	
                  </div>





                  
                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmNoAGaint_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>  
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
                <th>ລ/ດ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ວັນເດືອນປີຖືກຈັບຕົວ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>



                <th>ກ່ອນຖືກຈັບ(ອາຊີບ) </th>
                <th>ກ່ອນຖືກຈັບ(ບ້ານ)</th>
                <th>ກ່ອນຖືກຈັບ(ເມືອງ)</th>
                <th>ກ່ອນຖືກຈັບ(ແຂວງ)</th>
                <th>ຂໍ້ຫາການກະທຳຜິດ</th>
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $i=0;              
                @$start=$_POST['start'];    
                $sql = "SELECT * FROM  KHT_alleged";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++; 
                ?>

                <tbody id="users">
                <tr>


                <td>
                        <a href="app/edit_FrmNoAGaint_List.php?numberID=<?PHP echo $result["numberID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmNoAGaint_List.php?numberID=<?php echo $result['numberID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["numberID"]; ?></td>


                <?php
                $date=$result["Alleged_day_to_be_arrested"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                

                <td align='center'><?PHP echo $result["Alleged_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_latname"]; ?></td>


                <?php
                $date=$result["Alleged_BO"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
              
                <td align='center'><?PHP echo $result["Alleged_Sex"]; ?></td>
  
                <td align='center'><?PHP echo $result["Alleged_NationNm"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_first_job_to_bearrested"]; ?></td>


                <td align='center'><?PHP echo $result["Alleged_Village"]; ?></td>
  
                <td align='center'><?PHP echo $result["Alleged_DistrictBorn"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_ProvinceBorn"]; ?></td>
                <td align='center'><?PHP echo $result["Alleged_charge"]; ?></td>
               
               
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