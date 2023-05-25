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
        var Item_No=$("#Item_No").val();
        
        var In_No=$("#In_No").val();
        var Referno=$("#Referno").val();

     //   alert(start);
				$.post("search_frmtouqut-list.php",{
					start:start,
					end:end,
          Item_ID:Item_ID,
          Item_No:Item_No,
          In_No:In_No,
          Referno:Referno

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
            <h5>ຄຳຮ້ອງຄະດີອາຍາ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ຄຳຮ້ອງຄະດີອາຍາ</li>
            </ol>
          </div>


          


          
          <div class="row">
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
                   <lable>ເລກທີເອກະສານ</lable>
                    <input type="text" class="form-control " id="Item_ID"   name="Item_ID">	
                  </div>

                   <div class="col-lg-2">
                   <lable>ເລກທີຂາອອກ</lable>
                    <input type="text" class="form-control " id="Item_No"   name="Item_No" >	
                  </div>

                  <div class="col-lg-2">
                   <lable>ເລກທີຂາເຂົ້າ</lable>
                    <input type="text" class="form-control " id="In_No"   name="In_No" >	
                  </div>

                  <div class="col-lg-2">
                   <lable>ລະຫັດເອກະສານຂາເຂົ້າ</lable>
                    <input type="text" class="form-control " id="Referno"   name="Referno" >	
                  </div>




                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_frmtouqut-list.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                   
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
                        <th>ເລກທີເອກະສານ</th>
                        <th>ເລກທີຂາອອກ</th>
                        <th>ເລກທີຂາເຂົ້າ</th>
                        <th>ລະຫັດເອກະສານຂາເຂົ້າ</th>
                        <th>ວັນເດືອນປີອອກ</th>

                        <th>ປະເພດຄຳຮ້ອງ</th>
                        <th>ເຈົ້າຂອງຄຳຮ້ອງ</th>
                        <th>ລັກສະນະການແກ້ໄຂ</th>
                        <th>ໝວດການກະທຳຜິດ</th>
                      
                        <th>ໜ່ວຍງານຮັບຜິດຊອບ</th>
                        <th>ພະນັກງານຮັບຜິດຊອບ</th>
                        <th>ບ່ອນສົ່ງ</th>
                      </tr>
                    </thead>
                   
                    <?php
                include 'server/connect.php';
                $i=0;        
                @$start=$_POST['start'];

                $sql = " SELECT * FROM KHT_ReQuestOut";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>
                    <tbody id="users">
                        <tr>


                        <td align='center'>
                        <a href="app/edit_frmtouqut-list.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_frmtouqut-list.php?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>



                        <td align='center'><?PHP echo $i; ?></td>
                        <td><?PHP echo $result["Item_ID"]; ?></td>
                        <td><?PHP echo $result["Item_No"]; ?></td>
                        <td><?PHP echo $result["In_No"]; ?></td>
                        <td><?PHP echo $result["Referno"]; ?></td>
                       
                        
                        <?php
                        $date=$result["Item_Date"];
                        ?>
                        <td align='center'><?PHP echo date_format($date,'d/m/Y');?></td>
                        
                        
                        <td><?PHP echo $result["Request_Type"]; ?></td>
                        <td><?PHP echo $result["Request_Pers"]; ?></td>
                        <td><?PHP echo $result["Solv_Name"]; ?></td>
                        <td><?PHP echo $result["Remark"]; ?></td>
                 
                        <td><?PHP echo $result["Dept_Respond"]; ?></td>
                        <td><?PHP echo $result["Staff_Respond"]; ?></td>
                        <td><?PHP echo $result["Send_To"]; ?></td>
                     <!-- <td></td> -->
                    
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