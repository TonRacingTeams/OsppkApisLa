<!DOCTYPE html>
<html lang="en">

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
        var Item_sam=$("#Item_sam").val();
     //   alert(start);
				$.post("search_cri_returnIn.php",{
					start:start,
					end:end,
          Item_No:Item_No,
          Item_sam:Item_sam
       
         
          
    
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
                  <div class="col-lg-3">
                   <lable><B>ຂໍ້ມູນແຕ່ວັນທີປີ</B></lable>

                    <?php
                     @$start=$_POST['start'];
                    ?>

                    <input type="date" class="form-control " id="start"   name="start" 
                    value="<?php  echo date('Y-m-01');?>" > 
                   </div>

                    <div class="col-lg-3">
                   <lable><B>ຫາວັນທີເດືອນປີ</B></lable>

                   <?php
                     @$end=$_POST['end'];
                    ?>
                  <input type="date" class="form-control " id="end"   name="end"   value="<?php   $a_date = date('Y-m-d');  echo date('Y-m-t', strtotime($a_date));?>" >	
                 
                  </div>

                   <div class="col-lg-2">
                   <lable><B>ເລກທີຂາເຂົ້າ</B></lable>
                    <input type="text" class="form-control " id="Item_No"   name="Item_No" >	
                  </div>

                  <div class="col-lg-2">
                   <lable><B>ເລກທີສຳນວນ</B></lable>
                    <input type="text" class="form-control " id="Item_sam"   name="Item_sam">	
                  </div>


                    <div class="col-lg-2"><br>
                    <button   class="btn btn-primary" id="search"><i class="fas fa-search fa-sm"></i> </button>
                     <a href="app/add_FrmReturnIn_List.php" class="btn btn-success"><i class="fas fa-plus fa-sm"></i> </a>
                    
                  </div>
                  </div>



                </div><br>
                </div>

                <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 280%">
                    <thead>
                      <tr align='center'>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດຜູ້ໃຊ້</th>
                        <th>ຊື່ເຂດ</th>
                        <th>ຊື່ ຜູ້ໃຊ້</th>
                        
                        <th>ລະຫັດເຂດ</th>
                        <th>ສິດໃຊ້ໂປຣແກຣມ</th>
                        
                        <th>ລະຫັດແຂວງ</th>
                        <th>ຊື່ແຂວງ</th>
                        <th>ລ/ດ</th>
                        <th>ກ</th>
                        <th>ຂ</th>
                        <th>ຄ</th>
                        <th>ເຂດເມືອງ</th>
                        <th>ວັນເດືອນປີ</th>
                        <th>ພາກສ່ວນ</th>
                        <th>ລາຍການພາກສ່ວນ</th>
                        <th>ເຂດເມືອງ</th>
                        <th>ກ</th>
                        <th>ລຳດັບ</th>
                        <th>ລະຫັດແຂວງ</th>
                        <th>ງ</th>
                        <th>ເຂດເມືອງ</th>
                        <th>ພາກສ່ວນ</th>
                        <th>ລາຍການພາກສ່ວນ</th>
                      </tr>
                    </thead>

                <?php
                include 'server/connect.php';
                    $i=0;        
                
                @$start=$_POST['start'];
               
                $sql = "select * from  AP_KHT_Users order by Usr_id";
                $query = sqlsrv_query( $conn, $sql );

              
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody id="users">
                        <tr align='center'>


                        <td><?PHP echo $i; ?></td>
                        <td><?PHP echo $result["Usr_id"]; ?></td>
                        <td><?PHP echo $result["Usr_nm"]; ?></td>
                        <td><?PHP echo $result["permision"]; ?></td>
                        <td><?PHP echo $result["Sec_id"]; ?></td>
                        <td><?PHP echo $result["UsrPermit"]; ?></td>
                        <td><?PHP echo $result["Write_bit"]; ?></td>
                        <td><?PHP echo $result["Edit_bit"]; ?></td>
                        <td><?PHP echo $result["Delete_bit"]; ?></td>
                        <td><?PHP echo $result["PWD"]; ?></td>
                        <td><?PHP echo $result["BColor"]; ?></td>
                        <td><?PHP echo $result["FColor"]; ?></td>
                        <td><?PHP echo $result["lst_usr"]; ?></td>

                        <?php
                        $date=$result["lst_updt"];
                        ?>
                        <td><?PHP echo date_format($date,'d/m/Y');?></td>

                        <td><?PHP echo $result["Person_ID"]; ?></td>
                        <td><?PHP echo $result["Person_ID2"]; ?></td>
                        <td><?PHP echo $result["ProvinceCodeName"]; ?></td>
                        <td><?PHP echo $result["ID"]; ?></td>
                        <td><?PHP echo $result["Khet_ID"]; ?></td>
                        <td><?PHP echo $result["Khet_Name"]; ?></td>
                        <td><?PHP echo $result["Khet_No"]; ?></td>
                        <td><?PHP echo $result["Prov_ID"]; ?></td>
                        <td><?PHP echo $result["Prov_Name"]; ?></td>
                        <td><?PHP echo $result["ProvinceCode"]; ?></td>
                        






                          <td align='center'>
                          <a href="pages/update_returnin.php?Item_ID=<?PHP echo $result["Item_ID"]; ?>" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                          
                          </td>
                          <td align='center'>
                          <a href="pages/?Item_ID=<?php echo $result['Item_ID']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
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