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
				var $start=$("#start").val();
        var $end=$("#end").val();
        var $Item_ID=$("#Item_ID").val();



        //  alert('hellow');
				$.post("search_frmlaw_bieb.php",{
					start:start,
          end:end,
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
            <h5>ຄະດີແພ່ງ,ການຄ້າ,ຄອບຄົວ ແລະ ເດັກ ທີ່ໄອຍະການປະຊາຊົນເປັນໂຈດ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຄະດີແພ່ງ,ການຄ້າ,ຄອບຄົວ ແລະ ເດັກ ທີ່ໄອຍະການປະຊາຊົນເປັນໂຈດ</li>
            
            </ol>
          </div>


          


          
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              

            
            <form action="app/add_frmLaw_labieb.php" name="frmAdd" method="POST" enctype='multipart/form-data'>
            <div class="card mb-0" style='border: 2px solid #057c0c; border-radius: 8px;'>
             <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                

              
                <!-- <div class="input-group">
                  <div class="col-lg-3">
                  <lable>ລະຫັດ</lable>
                  <input type="text" class="form-control" id="Law_IDs"  placeholder="ລະຫັດ"  name="Law_ID" required>
                  </div> -->

                  <!-- <div class="col-lg-3">
                  <lable>ຊື່(ພາສາລາວ)</lable>
                  <input type="text" class="form-control" id="Law_Name"  placeholder="ຊື່(ພາສາລາວ)"  name="Law_Name" required>
                  </div> -->

                  <!-- <div class="col-lg-3">
                  <lable>ຊື່(ພາສາອັງກິດ)</lable>
                  <input type="text" class="form-control" id="Law_NmE"  placeholder="ຊື່(ພາສາອັງກິດ)"  name="Law_NmE" required>
                  </div> -->

                  <!-- <div class="col-lg-3">
                  <lable>ຊື່ຟາຍເອກະສານ</lable>
                  <input type="file" class="form-control" id="File_Name"  placeholder="ຊື່ຟາຍເອກະສານ"  name="File_Name" required>
                  </div> -->
                  
                <!-- <div class="col-lg-3"><br>
                <button type="submit" class="btn btn-primary"  >ບັນທືກ </button>
                <a href="basic-FrmLaw_Files.php" class="btn btn-danger">ຍົກເລີກ</a>
               
                </div>
                </div>
                </form>
                </div><br>

                </div><br> -->




             <!-- <div class="card mb-0">
             <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                


             
                <div class="input-group">
                  <div class="col-lg-3">

                  <lable>ຄົ້ນຫາຂໍ້ມູນ</lable>
    
                  <input type="text" class="form-control" id="Law_ID"  placeholder="ລະຫັດເອກະສານ"  name="Law_ID">
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
                   <lable>ເລກນັບ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID" >	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    </div>
                  </div>
</div>


<br>

</div>


















                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                <thead>
                <tr align='center'>
               
                <th>ອັບໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ເລກທີກອງປະຊຸມ</th>
                <th>ວັນເດືອນປີ </th>
                <th>ຈຳນວນຜູ້ເຂົ້າຮ່ວມ</th>
                <th>ຈຳນວນຄະດີຖະແຫຼງ</th>
                <th>Cnt</th>
                
                </tr>
                </thead>
                   
                <?php
               include 'server/connect.php';  
               $sql = "SELECT * FROM KHT_CanMeetingPh WHERE 1=1";
               $query = sqlsrv_query( $conn, $sql );

             
               while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
               {
                ?>

                <tbody id="users">
                <tr>



                <td align='center'>
           
                <a href="cv/<?PHP echo $result["File_Name"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
           
                </td>

                <td align='center'>
           
                <a href="pages/Update_Law_labieb.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_labieb.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>


         
                <td align='center'><?PHP echo $result["item_Cnt"]; ?></td>
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>


                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                
                <td align='center'><?PHP echo $result["Person_Cnt"]; ?></td>
                <td align='center'><?PHP echo $result["Case_Cnt"]; ?></td>
                <td align='center'><?PHP echo $result["Cnt"]; ?></td>


                


              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>















                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 150%">
                <thead>
                <tr align='center'>
               
                <th>ລຳດັບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ກ່ຽວເລື່ອງ</th>
                <th>ໂຈດ</th>
                <th>ຈຳເລີຍ</th>
                <th>ບຸກຄົນທີສາມ</th>
                <th>ຜົນການຕັດສິນຂອງສານ</th>
                <th>ຜູ້ຖະແຫຼງຕໍ່ສານ</th>
                <th>Cnt</th>
                </tr>
                </thead>
                   
                <?php
               include 'server/connect.php';  
               $sql = "SELECT * FROM KHT_CanMeetingPh_Case WHERE 1=1";
               $query = sqlsrv_query( $conn, $sql );

             
               while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
               {
                ?>

                <tbody id="users">
                <tr>
            
         
                <td align='center'><?PHP echo "i"; ?></td>
                <td align='center'><?PHP echo $result["Case_ID"]; ?></td>
                <td align='center'><?PHP echo $result["Problem"]; ?></td>
                <td align='center'><?PHP echo $result["Request_Civil"]; ?></td>
                <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                <td align='center'><?PHP echo $result["Respond_Civil"]; ?></td>
                <td align='center'><?PHP echo $result["Solv_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Pers_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Cnt"]; ?></td>


                <td align='center'>
           
                <a href="cv/<?PHP echo $result["File_Name"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
           
                </td>

                <td align='center'>
           
                <a href="pages/Update_Law_labieb.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_labieb.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>


              </tr>
                </tbody>
                <?PHP
            
                } 
                ?>
                </table>
                </div>




















                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 150%">
                <thead>
                <tr align='center'>
               
                <th>ລຳດັບ</th>
                <th>ກ່ຽວຂ້ອງກັບກົດໝາຍ</th>
                <th>ປະເພດຂໍ້ຂັດແຍ່ງ</th>
                
                <th>ລົບຂໍ້ມູນ</th>
                </tr>
                </thead>
                   
                <?php
               include 'server/connect.php';  
               $sql = "Select * from KHT_CanMeetingPh_Item";
               $query = sqlsrv_query( $conn, $sql );

             
               while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
               {
                ?>

                <tbody id="users">
                <tr>
            
         
                <td align='center'><?PHP echo "i"; ?></td>
                <td align='center'><?PHP echo $result["Law_ID"]; ?></td>
                <td align='center'><?PHP echo $result["Group_No"]; ?></td>
                <td align='center'><?PHP echo $result["Law_Name"]; ?></td>
                


                <td align='center'>
           
                <a href="cv/<?PHP echo $result["File_Name"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
           
                </td>

                <td align='center'>
           
                <a href="pages/Update_Law_labieb.php?Law_ID=<?PHP echo $result["Law_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_frmlaw_labieb.php?Law_ID=<?php echo $result['Law_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>


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