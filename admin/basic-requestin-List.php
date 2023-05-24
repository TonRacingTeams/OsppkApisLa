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

				var start=$("#start").val();
				var end=$("#end").val();
       var Item_No=$("#Item_No").val();
        var Item_ID=$("#Item_ID").val();

     //   alert(start);
				$.get("search_requestin.php",{
					start:start,
					end:end,
          Item_No:Item_No,
          Item_ID:Item_ID
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
  <?php include('header.php')?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
      <?php include('navbar.php')?>


        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ສຳນວນຄະດີອາຍາ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ສຳນວນຄະດີອາຍາ</li>
            
            </ol>
          </div>


          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <div class="col-lg-2">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີເດືອນປີ</lable>

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

                  <div class="col-lg-3">
                   <lable>ລະຫັດຄະດີ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID">	
                  </div>

                   <div class="col-lg-3">
                   <lable>ເລກທີຂາເຂົ້າ</lable>
                    <input type="text" class="form-control " id="Item_No"   name="Item_No">	
                  </div>

                  


                  <div class="col-lg-2"><br>
                <button class="btn btn-primary" id="search" type="button"><i class="fas fa-search fa-sm"></i> </button>
                <a href="app/add_requestin-List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>

                   
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
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດຄະດີ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີເຂົ້າ</th>
                        <th>ເລກທີ່ສຳນວນ</th>
                        <th>ວັນທີ່ລົງສຳນວນ</th>
                        <th>ໂຈດທາງອາຍາ</th>
                        <th>ຈຳເລີຍ</th>
                        <th>ໂຈດທາງແພ່ງ</th>



                        <th>ບຸກຄົນທີສາມ</th>
                        <th>ຖືກຫາວ່າ</th>
                        <th>ວັນທີກັກຕົວ</th>
                        <th>ວັນທີປ່ອຍຕົວພາງ</th>
                        <th>ສະຖານທີ່ກັກຂັງ</th>
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                        

                      </tr>
                    </thead>
                   
                    



              <?php
                include 'server/connect.php';
                 $i=0;        
                 @$start=$_POST['start'];
              
              
                $sql = "SELECT * FROM KHT_AppInAY";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>



                    <tbody id="users">

                        <tr>


                        <td align='center'>
                        <a href="app/edit_requestin-List.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_requestin-List.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>



                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td align='center'><?PHP echo $result["Sam_No"]; ?></td>
                        <?php
                        $dates=$result["Item_Date_sam"];
                        ?>
                        <td align='center'><?PHP echo date_format($dates,'d/m/Y');?></td>
                        <td align='center'><?PHP echo $result["Request_Crim"]; ?></td>
                        <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                        <td align='center'><?PHP echo $result["Respond_Civil"]; ?></td>
                        <td align='center'><?PHP echo $result["Request_Civil"]; ?></td>




                        <td align='center'><?PHP echo $result["Problem"]; ?></td>
                        <td align='center'><?PHP echo $result["Kung"]; ?></td>
                        <td align='center'><?PHP echo $result["Poy"]; ?></td>

                        <td align='center'><?PHP echo $result["sathan"]; ?></td>
                        <td align='center'><?PHP echo $result["Dept_Respond"]; ?></td>
                        <td align='center'><?PHP echo $result["Staff_Respond"]; ?></td>

                       
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
  </div>

<?php
include 'head.php';
?>
  
</body>

</html>