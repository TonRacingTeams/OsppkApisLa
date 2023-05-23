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
       var Item_ID=$("#Item_ID").val();
       var Case_ID=$("#Case_ID").val();


  // alert(start);
				$.post("search_years.php",{
					start:start,
					end:end,
          Item_ID:Item_ID,
          Case_ID:Case_ID
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
            <h5>ຕິດຕາມບົດສະຫຼູບຄະດີແພ່ງ (ຂັ້ນຕົ້ນ) ທີ່ໄດ້ສົ່ງສານ </h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຕິດຕາມບົດສະຫຼູບຄະດີແພ່ງ (ຂັ້ນຕົ້ນ) ທີ່ໄດ້ສົ່ງສານ </li>

            
            </ol>
          </div>

          <div class="row">
            <!-- Datatables -->
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
                   <lable>ລະຫັດ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID">	
                  </div>


                  <div class="col-lg-3">
                   <lable>ລະຫັດຄະດີ</lable>
                    <input type="text" class="form-control " id="Case_ID"   name="Case_ID">	
                  </div>

                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmRptCrm_Yearly.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                    </div>

                  </div> 

                  </div>
                <br>
                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 563%">
                <thead>
                <tr>
                <th>ໂຫຼດ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລຳດັບ</th>
                <th>ລະຫັດບົດສະຫຼູບ</th>
                <th>ວັນເດືອນປີສົ່ງບົດສະຫຼູບ</th>
                <th>ລະຫັດຄະດີ</th>
                <th>ກ່ຽວເລື່ອງ</th>
                <th>ໂຈດ</th>
                <th>ຈຳເລີຍ</th>
                <th>ບຸກຄົນທີສາມ</th>
                <th>ຜູ້ຂຽນບົດສະຫຼຸບ</th>
                <th>ຜົນການຕັດສີນຂອງສານ</th>
                
               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $i=0;  

                @$start=$_POST['start'];
                // $sql = "SELECT  KHT_CanMeetingPh2.item_Cnt, KHT_CanMeetingPh2.Item_ID, KHT_CanMeetingPh2.Item_Date, KHT_CanMeetingPh2.Case_Cnt, KHT_CanMeetingPh2.Cnt, KHT_CanMeetingPh_Case2.Case_ID, 
                // KHT_CanMeetingPh_Case2.Request_Civil, KHT_CanMeetingPh_Case2.Related_Pers, KHT_CanMeetingPh_Case2.Respond_Civil, KHT_CanMeetingPh_Case2.Problem,
                // KHT_CanMeetingPh_Case2.Solv_Name, KHT_CanMeetingPh_Case2.Pers_Name, KHT_CanMeetingPh_Case2.Cnt
                
                // FROM KHT_CanMeetingPh2
                // INNER JOIN KHT_CanMeetingPh_Case2
                // ON KHT_CanMeetingPh2.Item_ID=KHT_CanMeetingPh_Case2.Item_ID WHERE 1=1 ";


                $sql = "SELECT * FROM KHT_CanMeetingPh_Case2 ";



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
           
                <a href="pages/Update_FrmRptCrm_Yearly.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                
                </td>
                <td align='center'>
                <a href="pages/Delete_FrmRptCrm_Yearly.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                </td>




                <td align='center'><?PHP echo $i; ?></td>
                <td align='center'><?PHP echo $result["Item_ID"]; ?></td>



                <?php
                $date=$result["Item_Date"];
                ?>
                <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>


                <td align='center'><?PHP echo $result["Case_ID"]; ?></td>

                <td align='center'><?PHP echo $result["Problem"]; ?></td>
                
                <td align='center'><?PHP echo $result["Request_Civil"]; ?></td>
                
                <td align='center'><?PHP echo $result["Respond_Civil"]; ?></td>
                <td align='center'><?PHP echo $result["Related_Pers"]; ?></td>
                <td align='center'><?PHP echo $result["Pers_Name"]; ?></td>
                <td align='center'><?PHP echo $result["Solv_Name"]; ?></td>
                
                
                






















                <!-- <tbody><tr bgcolor="#35BB68">
			  <td style="border: 1px solid black; color:white" class="save1" align="center">ລຳດັບ</td>
				<td style="border: 1px solid black; color:white" class="save1" width="100" align="center">ລະຫັດສີນຄ້າ</td>
				<td style="border: 1px solid black; color:white" class="save1" width="200" align="center">ຊື່ສິນຄ້າ</td>  
        <td style="border: 1px solid black; color:white" class="save1" width="200">ລະຫັດໂທລະສັບ</td>     
				<td style="border: 1px solid black; color:white" class="save1" width="100" align="center">ຈຳນວນ</td>
				<td style="border: 1px solid black; color:white" class="save1" width="100" align="center">ລາຄາ</td>	
        <td style="border: 1px solid black; color:white" class="save1" width="100" align="center">ເປັນເງີນ</td>	
				</tr>

								
				<tr bgcolor="#FFFFFF">
					
					<td style="border: 1px solid black;" class="save1" align="center"> 1</td>
					<td style="border: 1px solid black;" class="save1" align="left">0008</td>
					<td style="border: 1px solid black;" class="save1" align="left">OPPO</td>
          <td style="border: 1px solid black;" class="save1">21232</td>
					<td style="border: 1px solid black;" class="save1" align="center">1</td>
					<td style="border: 1px solid black;" class="save1" align="right">900,000,000</td>
          <td style="border: 1px solid black;" class="save1" align="right">900,000,000</td>
					
        </tr>
								
				<tr bgcolor="#FFFFFF">
					
					<td style="border: 1px solid black;" class="save1" align="center"> 2</td>
					<td style="border: 1px solid black;" class="save1" align="left">0008</td>
					<td style="border: 1px solid black;" class="save1" align="left">OPPO</td>
          <td style="border: 1px solid black;" class="save1">34552</td>
					<td style="border: 1px solid black;" class="save1" align="center">1</td>
					<td style="border: 1px solid black;" class="save1" align="right">900,000,000</td>
          <td style="border: 1px solid black;" class="save1" align="right">900,000,000</td>
					
        </tr>
								<tr>
				  <td style="border: 1px solid black;" colspan="4" class="save1" align="center"><b>ລວມທັງໜົດ:</b></td>
					<td style="border: 1px solid black;" align="center" class="save1"><b>2</b></td>
          <td style="border: 1px solid black;" class="save1" align="center"></td>
					<td style="border: 1px solid black;" align="right" class="save1"><b>900,000,000</b></td>
					 
        </tr>
				</tbody> -->
                











        
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