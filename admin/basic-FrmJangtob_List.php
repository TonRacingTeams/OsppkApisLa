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
        var Order_ID=$("#Order_ID").val();
        var Order_No=$("#Order_No").val();
        
     //   alert(start);
				$.post("search_FrmJangtob_List.php",{
					start:start,
					end:end,
          Order_ID:Order_ID,
          Order_No:Order_No,
        
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
            <h5>ຄໍາສັ່ງກວດຄົ້ນເຄຫະສະຖານ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຄໍາສັ່ງກວດຄົ້ນເຄຫະສະຖານ</li>
            
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
                   <lable>ລະຫັດເອກະສານ</lable>
                    <input type="text" class="form-control " id="Order_ID"   name="Order_ID" >	
                  </div>




                  <div class="col-lg-2">
                   <lable>ເລກທີຄຳສັ່ງ</lable>
                    <input type="text" class="form-control " id="Order_No"   name="Order_No">	
                  </div>

                 


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>


               
                </div><br>

                </div>
                <div id='show' class="table-responsive p-10">
                  <table class='table table-bordered' style="width: 180%">
                    <thead>
                      <tr align='center'>
                        <th>ລ/ດ</th>
                        <th>ລະຫັດເອກະສານ</th>
                        <th>ເລກທີຄຳສັ່ງ</th>
                        <th>ວັນທີ</th>
                        <th>ບ່ອນອີງ</th>
                        <th>ເນື້ອໃນຄຳສັ່ງ</th>
                         
                      </tr>

                    </thead>
                   

                <?php
                include 'server/connect.php';
                $i=0;        
                
                @$start=$_POST['start'];
              
                $sql = "SELECT * FROM KHT_Order_Kahasathan  WHERE 1=1";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody id="users">
                        <tr>
                        <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Order_ID"]; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <?php
                        $date=$result["date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td><?PHP echo $result["Reference"]; ?></td>
                        <td><?PHP echo $result["Description"]; ?></td>
                        
                      
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

    </div>
  </div>

  <!-- Scroll to top -->
  <?php
  include 'head.php';
  ?>
 

</body>

</html>