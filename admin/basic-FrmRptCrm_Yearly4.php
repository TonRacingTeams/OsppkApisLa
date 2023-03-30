<!DOCTYPE html>
<html lang="en">

<head>

<?php

include 'head.php';
?>

<script>
		$(function(){

       $('.radio').change(function() {
             $('#select2').prop('disabled', !$(this).is('.ປະຈຳງວດ'));
             $('#select3').prop('disabled', !$(this).is('.ລວມງວດ'));
         });


         $('.radios').change(function() {
             $('#select1').prop('disabled', !$(this).is('.ລາຍເດືອນ'));
             $('#select2').prop('enable', !$(true).is('.ປະຈຳງວດ'));
             $('#select3').prop('disabled', !$(this).is('.ລວມງວດ'));
         }
         );

         $('.louie').change(function() {
             $('#select1').prop('disabled', !$(this).is('.ລາຍເດືອນ'));
             $('#select2').prop('disabled', !$(true).is('.ປະຈຳງວດ'));
             $('#select3').prop('enable', !$(this).is('.ລວມງວດ'));
         }
         );


        $("#search").click(function(){
				var start=$("#start").val();
  
				$.post("search_years.php",{
					start:start
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
            <div class="col-lg-20">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                <div class="col-lg-3">

                <lable>ຄົ້ນຫາຕາມປີ</lable>

                <input type="text" class="form-control" id="start"   name="start"   value="<?php  echo date('Y');?>" >

                </div>

                <div class="col-lg-2">
                <input type="radio" class="radio" name="type">
                   <lable>ລາຍເດືອນ</lable>
                    <select  type="text" id="select1" class="form-control">	
                    <option value="0">ທັງໝົດ</option>
                    <option value="M1">ເດືອນ 1</option>
                    <option value="M2">ເດືອນ 2</option>
                    <option value="M3">ເດືອນ 3</option>
                    <option value="M4">ເດືອນ 4</option>
                    <option value="M5">ເດືອນ 5</option>
                    <option value="M6">ເດືອນ 6</option>
                    <option value="M7">ເດືອນ 7</option>
                    <option value="M8">ເດືອນ 8</option>
                    <option value="M9">ເດືອນ 9</option>
                    <option value="M10">ເດືອນ 10</option>
                    <option value="M11">ເດືອນ 11</option>
                    <option value="M12">ເດືອນ 12</option>

                    </select>
                  </div>

                   <div class="col-lg-2">
                   <input type="radio" name="type" class="radios" value="1">
                   <lable>ປະຈຳງວດ</lable>
                    <select  type="text" class="form-control " id="select2" name="select2" >	
                    <option value="0">ທັງໝົດ</option>
                    <option value="1">ງວດ 1 (ເດືອນ 1-3)</option>
                    <option value="2">ງວດ 2 (ເດືອນ 4-6)</option>
                    <option value="3">ງວດ 3 (ເດືອນ 7-9)</option>
                    <option value="4">ງວດ 4 (ເດືອນ 10-12)</option>
                    
                    </select>
                  </div>

                  <div class="col-lg-2">
                  <input type="radio" class="louie"  name="type" >
                  <lable>ລວມງວດ</lable>
                 
                   
                    <select  type="text" class="form-control " id="select3"   name="select3" >	
                    <option value="0">ໝົດປີ</option>
                    <option value="1">ເດືອນ 3</option>
                    <option value="2">ເດືອນ 6</option>
                    <option value="3">ເດືອນ 9</option>
                  
                    </select>
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
                <tr align="center">
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
                        
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $i=0;  
                $d = date("Y"); 
                $sql = "SELECT * FROM Khet_Rpt WHERE 1=1";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr>  
                <td align='center'><?PHP echo $i; ?></td>
                        <td align='center'><?PHP echo $result["Order_No"]; ?></td>
                        <td align='center'><?PHP echo $result["Description"]; ?></td>
                        <td align='center'><?PHP echo $result["M1"]; ?></td>
                        <td align='center'><?PHP echo $result["M2"]; ?></td>
                        <td align='center'><?PHP echo $result["M3"]; ?></td>
                        <td align='center'><?PHP echo $result["M4"]; ?></td>
                        <td align='center'><?PHP echo $result["M5"]; ?></td>
                        <td align='center'><?PHP echo $result["M6"]; ?></td>
                        <td align='center'><?PHP echo $result["M7"]; ?></td>
                        <td align='center'><?PHP echo $result["M8"]; ?></td>
                        <td align='center'><?PHP echo $result["M9"]; ?></td>
                        <td align='center'><?PHP echo $result["M10"]; ?></td>
                        <td align='center'><?PHP echo $result["M11"]; ?></td>
                        <td align='center'><?PHP echo $result["M12"]; ?></td>
                        <td align='center'><?PHP echo $result["Year_Data"]; ?></td>

               

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