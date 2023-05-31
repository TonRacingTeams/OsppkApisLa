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
        var sentenceID=$("#sentenceID").val();
        var Name=$("#Name").val();
        var LastName=$("#LastName").val();

        //  alert('hellow');
				$.post("search_FrmMeeting_Return1_List.php",{
					start:start,
					end:end,
          sentenceID:sentenceID,
          Name:Name,
          LastName:LastName
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
            <h5>ນັກໂທດທົ່ວໄປທີ່ມີເງື່ອນໄຂສະເໜີໃຫ້ອະໄພຍະໂທດຜ່ອນໂທດທັງໝົດ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">ນັກໂທດທົ່ວໄປທີ່ມີເງື່ອນໄຂສະເໜີໃຫ້ອະໄພຍະໂທດຜ່ອນໂທດທັງໝົດ</li>
            
            </ol>
          </div>


            <?php
             
            ?>
          


          
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
                    <input type="date" class="form-control " id="start"   name="start" value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                   <div class="col-lg-2">
                   <lable>ຫາວັນທີເດືອນປີ</lable>
                   <?php
                     @$end=$_POST['end'];   
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >
                  </div>


                  <div class="col-lg-2">
                   <lable>ລະຫັດ</lable>
                    <input type="text" class="form-control " id="sentenceID"   name="sentenceID" >	
                  </div>

                  <div class="col-lg-2">
                   <lable>ຊື່ນັກໂທດ</lable>
                    <input type="text" class="form-control " id="Name"   name="Name" >	
                  </div>

                  <div class="col-lg-2">
                   <lable>ນາມສະກຸນ</lable>
                    <input type="text" class="form-control " id="LastName"   name="LastName" >	
                  </div>

                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                    <a href="app/add_FrmMeeting_Return1_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                  </div>
                  </div>

                </div><br>
                ￼
                </div>
                
                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 259%">
                <thead>
                <tr align='center'>
                <th>ແກ້ໄຂ</th>
                <th>ລົບ</th>
                <th>ລ/ດ</th>
                <th>ລະຫັດ</th>
                <th>ຊື່ນັກໂທດ</th>
                <th>ນາມສະກຸນ</th>
                <th>ອາຍຸເວລາກະທຳຜິດ</th>
                <th>ເພດ</th>
                <th>ສັນຊາດ</th>
                <th>ກ່ອນຖືກຈັບຕົວ(ອາຊີບ)</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ຖືກຈັບຕົວວັນເດືອນປີ</th>
                <th>ຂໍ້ຫາການກະທໍາຜິດ</th>
                
                <th>ໄດ້ຮັບການຜ່ອນໂທດ(ຈຳນວນຄັ້ງ)</th>
                <th>ຈຳນວນຄັ້ງ</th>
                <th>ຈຳນວນປີ</th>
                <th>ຈຳນນເດືອນ</th>
                <th>ໂທດທີ່ຍັງເຫຼືອ</th>
                <th>ປະເພດດັດສ້າງ</th>
                <th>ອະໄພຍະໂທດປີ</th>
                <th>ທາງແພ່ງ(ສະກຸນເງີນ)</th>
                <th>ຈຳນວນລວມ</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຍັງເຫຼືອ</th>

                <th>ຄ່າປັບໃໝ(ຈຳນວນລວມ)</th>
                <th>ຈ່າຍແລ້ວ</th>
                <th>ຈຳນວນຜ່ອນ</th>
                <th>ຍັງເຫຼືອ</th>
                <th>ສານຕັດສິນລົງໂທດ</th>
                <th>ໝາຍເຫດ</th>
                

               
                </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $stmt = "SELECT * FROM KHT_Sentence";
                $query  = sqlsrv_query($conn,$stmt);
                while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
                { 
                ?>

                <tbody id="users">
                <tr>


                <td>
                        <a href="app/edit_FrmMeeting_Return1_List.php?sentenceID=<?PHP echo $result["sentenceID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                        </td>
                        <td align='center'>
                        <a href="pages/delete_FrmMeeting_Return1_List.php?sentenceID=<?php echo $result['sentenceID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                        </td>

                <td><?PHP echo $result["Khet_ID"]; ?></td>
                <td><?PHP echo $result["sentenceID"]; ?></td>
                <td><?PHP echo $result["Name"]; ?></td>
                <td><?PHP echo $result["LastName"]; ?></td>
                <td><?PHP echo $result["Timetake"]; ?></td>
                <td><?PHP echo $result["Sex"]; ?></td>
                <td><?PHP echo $result["Nation"]; ?></td>
                <td><?PHP echo $result["Job"]; ?></td>
                <td><?PHP echo $result["Village"]; ?></td>
                <td><?PHP echo $result["District"]; ?></td>
                <td><?PHP echo $result["Province"]; ?></td>

                <?php
                $date=$result["Dtouch"];
                ?>
                <td><?PHP echo date_format($date,'d/m/Y');?></td>

                <td><?PHP echo $result["wrongdetail"]; ?></td>
                <td><?PHP echo $result["wrong"]; ?></td>
                <td><?PHP echo $result["Last_time"]; ?></td>
                <td><?PHP echo $result["N_year"]; ?></td>
                <td><?PHP echo $result["N_month"]; ?></td>
                <td><?PHP echo $result["Re_main"]; ?></td>
                <td><?PHP echo $result["Date_for"]; ?></td>
                <td><?PHP echo $result["amnesty"]; ?></td>

                <td><?PHP echo $result["rates"]; ?></td>
                <td><?PHP echo $result["Total"]; ?></td>
                <td><?PHP echo $result["Paid"]; ?></td>
                <td><?PHP echo $result["Beleft"]; ?></td>
                <td><?PHP echo $result["Total1"]; ?></td>
                <td><?PHP echo $result["Paid1"]; ?></td>
                <td><?PHP echo $result["slacken"]; ?></td>
                <td><?PHP echo $result["Beleft1"]; ?></td>
                <td><?PHP echo $result["Punish"]; ?></td>
                <td><?PHP echo $result["Remark"]; ?></td>
            
                
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