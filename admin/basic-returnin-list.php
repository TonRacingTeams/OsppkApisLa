<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>



<script>
		$(function(){

     // alert(start);
			$("#search").click(function(){

				// var start=$("#start").val();
				// var end=$("#end").val();
        var Usr_id=$("#Usr_id").val();
        var Khet_ID=$("#Khet_ID").val();
        var Prov_ID=$("#Prov_ID").val();


        //alert(Usr_id);
				$.post("search_cri_returnIn.php",{
					// start:start,
					// end:end,
          Usr_id:Usr_id,
          Khet_ID:Khet_ID,
          Prov_ID:Prov_ID
       
         
          
    
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
            <h5><B>ລາຍການຜູ້ໃຊ້ໂປຣແກຣມ</B></h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><B>ລາຍການຜູ້ໃຊ້ໂປຣແກຣມ</B></li>
            
            </ol>
          </div>


          


          
          <div class="row">

            <div class="col-lg-12">
              <div class="card mb-0" style='border: 2px solid #8640bf; border-radius: 8px;'>
                <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                
                <div class="input-group">
                  <!-- <div class="col-lg-3"> -->
                   <!-- <lable><B>ຂໍ້ມູນແຕ່ວັນທີປີ</B></lable> -->

                    <!-- <?php
                     @$start=$_POST['start'];
                    ?> -->

                    <!-- <input type="date" class="form-control " id="start"   name="start" 
                    value="<?php  echo date('Y-m-01');?>" > 
                   </div> -->

                    <!-- <div class="col-lg-3">
                   <lable><B>ຫາວັນທີເດືອນປີ</B></lable> -->

                   <!-- <?php
                     @$end=$_POST['end'];
                    ?> -->
                  <!-- <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >	
                 
                  </div> -->

                   <div class="col-lg-2">
                   <lable><B>ລະຫັດຜູ້ໃຊ້</B></lable>
                    <input type="text" class="form-control " id="Usr_id"   name="Usr_id" >	
                  </div>

                  <div class="col-lg-2">
                   <lable><B>ລະຫັດເຂດ</B></lable>
                    <input type="text" class="form-control " id="Khet_ID"   name="Khet_ID">	
                  </div>


                  <div class="col-lg-2">
                   <lable><B>ລະຫັດແຂວງ</B></lable>
                    <input type="text" class="form-control " id="Prov_ID"   name="Prov_ID">	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                     <a href="app/add_FrmReturnIn_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                    
                  </div>
                  </div>



                </div><br>
                </div>

                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                      <tr align='center'>
                        

                        <th>ແກ້ໄຂ</th>
                        <th>ລົບ</th>
                        <th>ລ/ດ</th>
                        <th>ລະຫັດຜູ້ໃຊ້</th>
                        <th>ຊື່ຜູ້ໃຊ້</th>
                        <th>ສິດໃຊ້ໂປຣແກຣມ</th>
                        <th>ລະຫັດເຂດ</th>
                        <th>ຊື່ເຂດ</th>
                        <th>ລະຫັດແຂວງ</th>
                        <th>ຊື່ແຂວງ</th>
                        
                      </tr>
                    </thead>

                <?php
                include 'server/connect.php';
                    $i=0;        
                
                @$start=$_POST['start'];
               
                $sql = "select * from  AP_KHT_Users";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody id="users">
                        <tr align='center'>

                        <td align='center'>
                          <a href="pages/update_returnin.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                          
                          </td>
                          <td align='center'>
                          <a href="pages/?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                          </td>

                        <td><?PHP echo $i; ?></td>
                        <td><?PHP echo $result["Usr_id"]; ?></td>
                        <td><?PHP echo $result["Usr_nm"]; ?></td>
                        <td><?PHP echo $result["permision"]; ?></td>
                        <td><?PHP echo $result["Khet_ID"]; ?></td>
                        <td><?PHP echo $result["Khet_Name"]; ?></td>
                        <td><?PHP echo $result["Prov_ID"]; ?></td>
                        <td><?PHP echo $result["Prov_Name"]; ?></td>

                          
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
    
    </div>
 
  </div>

<?php
include 'head.php';
?>

</body>

</html>