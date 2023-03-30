<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'head.php';
?>

<script>
		$(function(){

   //   alert(start);
			$("#search").click(function(){
				var start=$("#start").val();
        var end=$("#end").val();
        var Item_ID=$("#Item_ID").val();
        var Item_No=$("#Item_No").val();


      //  alert(start);
				$.post("search_tableYear2.php",{
					start:start,
          end:end,
          Item_ID:Item_ID,
          Item_No:Item_No
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
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
      <?php include('navbar.php')?>
    
        

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ຄຳຖະແຫຼ່ງຄະດີແພ່ງ,ການຄ້າ,ຄອບຄົວ ແລະ ເດັກ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຄຳຖະແຫຼ່ງຄະດີແພ່ງ,ການຄ້າ,ຄອບຄົວ ແລະ ເດັກ</li>
            
            </ol>
          </div>

          

          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <!-- <div class="input-group">
                  <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຕາມປີ</lable>
    
                  <input type="text" class="form-control" id="start"   name="start"   value="<?php  echo date('Y');?>" >
                </div>
                <div class="col-lg-3"><br>
                <button class="btn btn-primary" id="search" type="button"><i class="fas fa-search fa-sm"></i> </button>
                </div>
                </div>
                </div><br>

                </div> -->




                <div class="input-group">
                  <div class="col-lg-3">
                   <lable>ຂໍ້ມູນແຕ່ວັນທີປີ</lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>
                    <input type="date" class="form-control " id="start"   name="start" value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                   <div class="col-lg-3">
                   <lable>ຫາວັນທີເດືອນປີ</lable>
                   <?php
                     @$end=$_POST['end'];   
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >
                  </div>


                  <div class="col-lg-2">
                   <lable>ລະຫັດແບບຟອມ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID" >	
                  </div>


                  <div class="col-lg-2">
                   <lable>ເລກທີຄຳຖະແຫຼງ</lable>
                    <input type="text" class="form-control " id="Item_No"   name="Item_No" >	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>

                </div><br>

                </div>


                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 150%">

                
          
                    <thead>
                      <tr>

                        <th>ລຳດັບ</th>
                        <th>ລະຫັດແບບຟອມ</th>
                        <th>ເລກທີຄຳຖະແຫຼງ</th>
                        <th>ວັນເດືອນປີ </th>
                        <th>ອີງຕາມ</th>
                        <th>ລະຫວ່າງ</th>
                        <th>ດ້ວຍເຫດນີ້ </th>
                        

              
                       
                      </tr>
                    </thead>
                    <?php   
                      include 'server/connect.php';                                       
                      $d = date("d-m-Y"); 
                      $sql = "SELECT * FROM KHT_AppDecisionPh WHERE 1=1";
                      $query = sqlsrv_query( $conn, $sql);  
                      while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                      {
              
                    ?>
                   
                    <tbody id="users">
                      <tr>
                     
                       
                      
                        <td align='center'><?PHP echo $result["Item_Cnt"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Item_No"]; ?></td>
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                        <td align='center'><?PHP echo $result["Refer_To"]; ?></td>
                        <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                        <td align='center'><?PHP echo $result["Conclution"]; ?></td>
                        

                       
                      
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
      
      </div>
 
    </div>
  </div>

<?php
include 'head.php';
?>

</body>
</html>