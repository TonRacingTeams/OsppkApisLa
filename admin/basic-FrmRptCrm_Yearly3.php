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
        var Item_ID=$("#Item_ID").val();
        var Deci_No=$("#Deci_No").val();
        var Full_Name=$("#Full_Name").val();


  //  alert('hellow');
				$.post("search_years3.php",{
					start:start,
					end:end,
          Item_ID:Item_ID,
          Deci_No:Deci_No,
          Full_Name:Full_Name
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
            <h5>ຄະດີແພ່ງ,ການຄ້າ,ຄອບຄົວ ແລະ ເດັກ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຄະດີແພ່ງ,ການຄ້າ,ຄອບຄົວ ແລະ ເດັກ</li>

           
            
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
                   <lable>ລະຫັດລາຍການ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID" >	
                  </div>


                  <div class="col-lg-3">
                   <lable>ເລກທີ</lable>
                    <input type="text" class="form-control " id="Deci_No"   name="Deci_No">	
                  </div>


                  <div class="col-lg-3">
                   <lable>ຊື່ ແລະ ນາມສະກຸນ</lable>
                    <input type="text" class="form-control " id="Full_Name"   name="Full_Name">	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmRptCrm_Yearly3.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                    </div>
                  </div>


                </div><br>

                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 236%">
                <thead>
                <tr align="center">
                <th>ໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດລາຍການ</th>
                <th>ວັນເດືອນປີຕັດສີນ</th>
                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                
                <th>ວັນເດືອນປີເກີດ</th>
                <th>ສັນຊາດ</th>
                <th>ເພດ</th>
                <th>ເລກທີ</th>
                <th>ວັນທີ</th>
                
                <th>ຂໍ້ຫາການກະທຳຜີດ</th>
                <th>ສຳນວນຄະດີ</th>
                

                <th>ທາງແພ່ງ(ຈຳນວນ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>

                <th>ຄ່າປັບໄໝ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ໝາຍເຫດ</th>
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $i=0;  
                $d = date("Y"); 
                $sql = "SELECT * FROM KHT_Decision_Ph";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                <tbody id="users">
                <tr> 

                <td align='center'>
           
           <a href="cv/<?PHP echo $result["Item_ID"]; ?> " class="btn btn-primary" onclick=" return confirm('ທານຕ້ອງການດາວໂຫລດເອກະສານນີ້ແທ້ ຫຼື ບໍ..?')" ><i class="fas fa-download fa-sm"></i> </a>
      
           </td>

           <td align='center'>
      
           <a href="app/edit_FrmRptCrm_Yearly3.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
           
           </td>
           <td align='center'>
           <a href="pages/Delete_FrmRptCrm_Yearly3.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
           </td>

                        <td><?PHP echo $result["item_Cnt"]; ?></td>
                        <td><?PHP echo $result["Item_ID"]; ?></td>
                        
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td><?PHP echo date_format($date,'d/m/Y');?></td>
                        <td><?PHP echo $result["Full_Name"]; ?></td>
                        <?php
                        $dates=$result["Date_Birth"];
                        ?>
                        <td><?PHP echo date_format($dates,'d/m/Y');?></td>

                        <td><?PHP echo $result["Nationality"]; ?></td>
                        <td><?PHP echo $result["Gender"]; ?></td>
                        
                        
                        <td><?PHP echo $result["Deci_No"]; ?></td>


                        <?php
                        $dates=$result["Deci_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($dates,'d/m/Y');?></td>


                        <td><?PHP echo $result["Phatibus"]; ?></td>
                        <td><?PHP echo $result["Data_holding"]; ?></td>
                        

                        
                        
                        <td><?PHP echo $result["Pheng_Total"]; ?></td>
                        <td><?PHP echo $result["Pheng_Paid"]; ?></td>
                        <td><?PHP echo $result["Pheng_Remain"]; ?></td>
                        <td><?PHP echo $result["Penaty_Tatol"]; ?></td>
                        <td><?PHP echo $result["Penaty_Paid"]; ?></td>
                        <td><?PHP echo $result["Penaty_Remain"]; ?></td>
                        <td><?PHP echo $result["Remark"]; ?></td>

               

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