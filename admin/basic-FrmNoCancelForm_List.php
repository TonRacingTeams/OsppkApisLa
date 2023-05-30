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
				var start=$("#start").val();
				var end=$("#end").val();
        var TotalID=$("#TotalID").val();
        
				$.post("search_FrmNoCancelForm_list.php",{
					start:start,
					end:end,
          TotalID:TotalID
        
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
            <h5>ນັກໂທດ, ຜູ້ຖືກດັດສ້າງ ແລະ ຜູ້ຖືກຫາ ເຈັບເປັນໄດ້ຮັບການປິ່ນປົວ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ນັກໂທດ, ຜູ້ຖືກດັດສ້າງ ແລະ ຜູ້ຖືກຫາ ເຈັບເປັນໄດ້ຮັບການປິ່ນປົວ</li>
            
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
                   <lable>ລະຫັດຄະດີ</lable>
                    <input type="text" class="form-control " id="TotalID"   name="TotalID" >	
                  </div>



                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmNoCancelForm_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>  
                  </div>
                  </div>


                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 236%">
                <thead>
                <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ເພດ</th>



                <th>ສັນຊາດ</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ບ້ານ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ເມືອງ)</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ແຂວງ)</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                <th>ເຈັບເປັນຫຍັງ </th>
                <th>ຄ້າຍຄຸມຂັງ</th>
                <th>ໂຮງໝໍ</th>
                <th>ຢູ່ບ້ານ</th>
                <th>ໝາຍເຫດ</th>
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $i=0;              
                @$start=$_POST['start'];    
                $sql = "SELECT * FROM KHT_Totals";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr>


                <td>
                        <a href="app/edit_FrmNoCancelForm_List.php?TotalID=<?PHP echo $result["TotalID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmNoCancelForm_List.php?TotalID=<?php echo $result['TotalID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>




            
                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["TotalID"]; ?></td>
                
                <?php
                $date=$result["Takebody"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Name"]; ?></td>
                <td align='center'><?PHP echo $result["LastName"]; ?></td>
                <?php
                $date=$result["Birthday"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                


                <td align='center'><?PHP echo $result["Sex"]; ?></td>
                <td align='center'><?PHP echo $result["Nation"]; ?></td>
                <td align='center'><?PHP echo $result["Job"]; ?></td>

                <td align='center'><?PHP echo $result["addhome"]; ?></td>
                <td align='center'><?PHP echo $result["District"]; ?></td>
                <td align='center'><?PHP echo $result["Province"]; ?></td>
                <td align='center'><?PHP echo $result["To_wrong"]; ?></td>
                <td align='center'><?PHP echo $result["whyhurt"]; ?></td>
                <td align='center'><?PHP echo $result["camp"]; ?></td>
                
                <td align='center'><?PHP echo $result["addrese"]; ?></td>
                <td align='center'><?PHP echo $result["hotpital"]; ?></td>
                <td align='center'><?PHP echo $result["Remark"]; ?></td>
                
                
               
               
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