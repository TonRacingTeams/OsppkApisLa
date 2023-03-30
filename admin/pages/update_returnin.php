<!DOCTYPE html>
<html lang="en">

<head>

<?php
include 'head.php';
?>






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
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon">

       
        <img src="../img/logo/bbbb.png" width="100%" height="200%">
          
        <br>


          
        </div>
       
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມສຳນວນຄະດິຂາເຂົ້າ</B></span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-cancel-list.php"><B>ຄະດີອາຍາຂັ້ນລົບລ້າງ</B></a>    
            <a class="collapse-item" href="basic-returnin-list.php"><B>ຂາເຂົ້າສຳນວນຄະດີອາຍາຂັ້ນຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-FrmTouIn_List.php"><B>ທວງສຳນວນຄະດີ</B></a>  
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຄຳຮ້ອງຂາເຂົ້າ</B></span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="basic-requestin-List.php"><B>ຄຳຮ້ອງຂໍລົບລ້າງຄຳສັ່ງຕ່າງໆ ຂອງໄອຍະການອຸທອນ</B></a>
            <a class="collapse-item" href="basic-frmrequestrtIn-List.php"><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-frmrequesttrueIn_List.php"><B>ຂາເຂົ້າຄຳຮ້ອງຂໍຄວາມເປັນທຳ</B></a>

          </div>
        </div>
      </li>
      


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable1" aria-expanded="true"
          aria-controls="collapseTable1">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມສຳນວນຄະດິຂາອອກ</B></span>
        </a>
        <div id="collapseTable1" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-rmcancelqut-list.php"><B>ຄະດີອາຍາຂັ້ນລົບລ້າງ</B></a>    
            <a class="collapse-item" href="basic-frmreturnqut_List.php"><B>ຄະດີອາຍາຂັ້ນຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-frmtouqut-list.php"><B>ທວງສຳນວນຄະດີ</B></a>  
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable2">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຄຳຮ້ອງຂາອອກ</B></span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-frmreturnqut_list_load.php"><B>ຄຳຮ້ອງຂໍລົບລ້າງຄຳສັ່ງຕ່າງໆ ຂອງອົງການໄອຍະການປະຊາຊຊົນຂັ້ນອຸທອນ</B></a>    
            <hr>
            <a class="collapse-item" href="basic-frmrequestrtqut_List_Load.php"><B>ຄຳຮ້ອງຂໍຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-FrmNoReviseOrders_List.php"><B>ຄໍາຕົກລົງບໍ່ຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-FrmReviseOrders_List.php"><B>ຄໍາສະເໜີ້ຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-FrmOrderSam_List.php"><B>ໃບສະເໜີທວງສໍານວນ</B></a>
            <hr>
            <a class="collapse-item" href="basic-rrmrequesttruequt-list-load.php"><B>ຄຳຮ້ອງຂໍຄວາມເປັນທຳ</B></a>  
            <a class="collapse-item" href="basic-FrmNamsong_List.php"><B>ໜັງສືນໍາສົ່ງ</B></a>
            <a class="collapse-item" href="basic-FrmSanod_List.php"><B>ຄໍາຕົກລົງລົບລ້າງ</B></a>
            <a class="collapse-item" href="basic-FrmJangtob_List.php"><B>ໜັງສືແຈ້ງຕອບ</B></a>
         
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable3" aria-expanded="true"
          aria-controls="collapseTable3">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຂາເຂົ້າບົດລາຍງານ</B></span>
        </a>
        <div id="collapseTable3" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmReportIn_List.php"><B>ບົດລາຍງານຂໍຄໍາເຫັນທາງລົດຖະການ</B></a>    
            <a class="collapse-item" href="basic-FrmNoticeIn_List.php"><B>ຂໍ້ຕົກລົງຂອງຄະນະປະຈໍາສະພາແຫຼ່ງຊາດ</B></a> 
            <a class="collapse-item" href="basic-FrmNoticeLegalIn_List.php"><B>ແຈ້ງການຂອງກໍາມາທິການກົດໝາຍ</B></a> 
         
          </div>
        </div>
      </li>




      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable4" aria-expanded="true"
          aria-controls="collapseTable4">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ຕິດຕາມຂາອອກບົດລາຍງານ</B></span>
        </a>
        <div id="collapseTable4" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmReportOut_List.php"><B>ຄຳສັ່ງແນະນຳ</B></a>    
            <a class="collapse-item" href="basic-FrmNoticeOut_List.php"><B>ໜັງສືແຈ້ງຕອບ</B></a> 
            <a class="collapse-item" href="basic-FrmNoticeLegalOut_List.php"><B>ແຈ້ງການຂອງກໍາມາທິການກົດໝາຍ ແລະ ໜັງສືນໍາສົ່ງຂອງແຕ່ລະຂັ້ນ</B></a> 
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable5" aria-expanded="true"
          aria-controls="collapseTable5">
          <i class="fas fa-fw fa-table"></i>
          <span><B>ແບບຟອມຕ່າງໆ</B></span>
        </a>
        <div id="collapseTable5" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
            <a class="collapse-item" href="basic-FrmDecision_List.php"><B>ແບບຟອມຄຳຖະແຫຼງ</B></a>  
            <a class="collapse-item" href="basic-FrmNoAGaint_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ຄັດຄ້ານ</B></a>  
            <a class="collapse-item" href="basic-FrmAGaint_List.php"><B>ແບບຟອມຄຳສະເໜີຄັດຄ້ານ</B></a>    
            <a class="collapse-item" href="basic-FrmNoRevise_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ຮື້ຟື້ນ</B></a> 
            <a class="collapse-item" href="basic-FrmRevise_List.php"><B>ແບບຟອມຄຳສະເໜີຮື້ຟື້ນ</B></a>
            <a class="collapse-item" href="basic-FrmCancelForm_List.php"><B>ແບບຟອມຄຳຕົກລົງລົບລ້າງຄຳສັ່ງຕ່າງໆຂອງໄອຍະການປະຊາຊົນຂັ້ນອຸທອນ</B></a>
            <a class="collapse-item" href="basic-FrmNoCancelForm_List.php"><B>ແບບຟອມຄຳຕົກລົງບໍ່ລົບລ້າງຄຳສັ່ງຕ່າງໆຂອງໄອຍະການປະຊາຊົນຂັ້ນອຸທອນ</B></a>
            <a class="collapse-item" href="basic-FrmOrder_List.php"><B>ແບບຟອມຄຳສັ່ງແນະນຳ</B></a>
            <a class="collapse-item" href="basic-FrmOrders_List.php"><B>ແບບຟອມຈົດໝາຍທາງລັດຖະການຕ່າງໆ</B></a>
            <a class="collapse-item" href="basic-FrmReQues_List.php"><B>ແບບຟອມການທວງສຳນວນຄະດີ</B></a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable6" aria-expanded="true"
          aria-controls="collapseTable6">
          <i class="fas fa-fw fa-table"></i>
          <span>ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມ</span>
        </a>
        <div id="collapseTable6" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> 
        
            <a class="collapse-item" href="basic-FrmMeeting_List.php">ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມສານອາຍາຂັ້ນລົບລ້າງ</a>
            <a class="collapse-item" href="basic-FrmMeeting_Return_List.php">ຕິດຕາມການເຂົ້າຮ່ວມປະຊຸມສານອາຍາຂັ້ນຮືຟືນ</a>
         
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຂໍ້ມູນພື້ນຖານ</B></span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="basic-tableYear.php"><B>ຂໍ້ມູນປະຈຳເດືອນ</B></a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage1" aria-expanded="true"
          aria-controls="collapsePage1">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ຂໍ້ມູນປະກອບ</B></span>
        </a>
        <div id="collapsePage1" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="javascript: window.open('basic-Data_Relation.php', 'nploojsiab page',  'top=50, left=100, width =1200, height =600');"><B>ສາຍກ່ຽວພັນຂອງລະບົບຂໍ້ມູນ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files.php"><B>ຂໍ້ມູນກ່ຽວກັບກົດໝາຍ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files_Labieb.php"><B>ບັນດາຂໍ້ກຳນົດ ແລະ ລະບຽບການ</B></a>
            <a class="collapse-item" href="basic-FrmLaw_Files_Other.php"><B>ຂໍ້ມູນອື່ນໆ</B></a>
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage2" aria-expanded="true"
          aria-controls="collapsePage2">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ລະບົບລາຍງານ</span>
        </a>
        <div id="collapsePage2" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="basic-FrmRptCrm_Yearly.php">ສະຫຼຸບສະຖິຕິປະຈຳປີ</a>
            <a class="collapse-item" href="#">ສະຫຼຸບສະຖິຕິປະຈຳສົກປີ</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage3" aria-expanded="true"
          aria-controls="collapsePage3">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ລາຍງານສະຖານະການຂອງຄະດີ</span>
        </a>
        <div id="collapsePage3" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="#">ຕາມໝວດ ແລະ ມາດຕາກະທຳຜິດ</a>
            <a class="collapse-item" href="#">ສັງລວມຜົນການພິພາກສາ</a>
          </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4" aria-expanded="true"
          aria-controls="collapsePage4">
          <i class="fab fas fa-fw fa-table"></i>
          <span>ຕິດຕາມແບບຟອມຕ່າງໆ</span>
        </a>
        <div id="collapsePage4" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="#">ຈຳນວນຄະດີຖະແຫຼງຕໍ່ສານ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳຕົກລົງບໍ່ຄັດຄ້ານ</a>
            <a class="collapse-item" href="#">ແບບຟອມຄຳສະເໜີຄັດຄ້ານ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳຕົກລົງບໍ່ຮື້ຟື້ນ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳສະເໜີຮື້ຟື້ນ</a>
            <a class="collapse-item" href="#">ຈຳນວນຄຳສັ່ງແນະນຳ</a>
            <a class="collapse-item" href="#">ຈຳນວນຈົດໝາຍລັດຖະການ</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4dd" aria-expanded="true"
          aria-controls="collapsePage4dd">
          <i class="fab fas fa-fw fa-table"></i>
          <span><B>ລະບົບ</B></span>
        </a>
        <div id="collapsePage4dd" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="basic-FrmUser.php"><B>ລາຍການຜູ້ໃຊ້ໂປຣແກຣມ</B></a>
            <a class="collapse-item" href="basic-groupLaws.php"><B>ໝວດການກະທໍາຜິດ</B></a>
            <a class="collapse-item" href="basic-LawsInsert.php"><B>ຂໍ້ຂັດແຍ່ງ</B></a>
            <a class="collapse-item" href="../logout.php"><B>ອອກຈາກໂປຣແກຣມ</B></a>
          
          </div>
        </div>
      </li>


      
  
      <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <div class="sidebar-brand-text mx-0" style="color:white; font-size: 20px;"> ອົງການໄອຍະການປະຊາຊົນສູງສຸດ ແຫ່ງ ສ ປປ ລາວ</div>
        
          <ul class="navbar-nav ml-auto">
          

           
         
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="../logout.php">
                
                <span class="ml-2 d-none d-lg-inline text-white small"> ອອກຈາກລະບົບ</span>
              </a>
           
            </li>
          </ul>
        </nav>
   

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5>ແກ້ໄຂຂໍ້ມູນ ຂາເຂົ້າສຳນວນຄະດີອາຍາຂັ້ນຮື້ຟື້ນ</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">ແກ້ໄຂຂໍ້ມູນ ຂາເຂົ້າສຳນວນຄະດີອາຍາຂັ້ນຮື້ຟື້ນ</li>
            </ol>
          </div>

         

        




          <?php
             include '../server/connect.php';  
             $Item_ID = array($_GET["Item_ID"]);
             $stmt = "SELECT * FROM Cri_ReturnIn WHERE Item_ID = ? ";   
             $query = sqlsrv_query( $conn, $stmt, $Item_ID);
             $result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
            ?>  
            

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic   readonly -->
              <div class="card mb-4">
               
                <div class="card-body">
                  <form action="save_frmReturnIn.php"  method="POST">
                 
                  <div class="form-group">
                      <label for="item_Cnt">ເລກນັບ</label>
                      <input type="text" readonly  class="form-control" id="item_Cnt" name="item_Cnt" value="<?php echo $result["item_Cnt"];?>">
                    </div>
                  
                    <div class="form-group">
                      <label for="Item_ID">ລະຫັດຄະດີ</label>
                      <input type="text" readonly  class="form-control" id="Item_ID" name="Item_ID" aria-describedby="Item_ID" value="<?php echo $result["Item_ID"];?>">
                    </div>

               

                    <div class="form-group">
                      <label for="Item_No">ເລກທີຂາເຂົ້າ</label>
                      <input type="text" class="form-control" id="Item_No" name="Item_No" value="<?php echo $result["Item_No"];?>" >
                    </div>

                    <div class="form-group">
                      <label for="Item_sam">ເລກທີລົງສຳນວນ</label>
                      <input type="text" class="form-control" id="Item_sam" name="Item_sam" value="<?php echo $result["Item_sam"];?>">
                    </div>

                    <div class="form-group">
                      <label for="Item_Date_sam">ວັນເດືອນປີລົງສຳນວນ</label>
                      <input type="date"  class="form-control" id="Item_Date_sam" name="Item_Date_sam">
                    </div>

    

        
                    <div class="form-group">
                      <label for="Problem">ສະຖານການກະທຳຜິດ</label>
                      <input type="text" class="form-control" id="Problem" name="Problem" value="<?php echo $result["Problem"];?>">
                    </div>

                    <div class="form-group">
                      <label for="Request_Crim">ໂຈດທາງອາຍາ</label>
                      <textarea class="form-control" id="Request_Crim" name = "Request_Crim" placeholder="ໂຈດທາງອາຍາ" rows="4" required ><?php echo $result["Request_Crim"];?></textarea>
                    </div>
                  
                    <div class="form-group">
                      <label for="Request_Civil">ໂຈດທາງແພ່ງ</label>
                      <textarea class="form-control" id="Request_Civil" name = "Request_Civil" placeholder="ໂຈດທາງອາຍາ" rows="4" required><?php echo $result["Request_Civil"];?></textarea>
                    </div>

                   
               

                </div>
              </div>
            </div>
    


            <div class="col-lg-6">

              <div class="card mb-2">     
                <div class="card-body">
                
                    <div class="form-group">
                      <label for="Last_Update">ວັນເດືອນປີເຂົ້າ</label>
                      <input type="date"  class="form-control" id="Last_Update" name="Last_Update" required>
                    </div>

                   

                    <div class="form-group">
                      <label for="Related_Pers">ຈຳເລີຍ</label>
                      <textarea class="form-control" id="Related_Pers" name = "Related_Pers" placeholder="ຈຳເລີຍ" rows="4" required><?php echo $result["Related_Pers"];?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Respond_Civil">ບຸກຄົນທີສາມ</label>
                      <textarea class="form-control" id="Respond_Civil" name = "Respond_Civil" placeholder="ບຸກຄົນທີສາມ" rows="4" required><?php echo $result["Respond_Civil"];?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Remark">ຊື່ໝວດການກະທຳຜິດ </label>
                      <input type="text"  class="form-control" id="Remark" name="Remark"  value="<?php echo $result["Remark"];?>">
                    </div>

                   
                   

                    <div class="form-group">
                      <label for="Dept_Respond">ພະແນກຮັບຜິດຊອບ</label>
                      <input type="text"  class="form-control" id="Dept_Respond" name="Dept_Respond" value="<?php echo $result["Dept_Respond"];?>">
                    </div>


                    <div class="form-group">
                      <label for="Staff_Respond">ພະນັກງານຮັບຜິດຊອບ</label>
                      <input type="text"  class="form-control" id="Staff_Respond" name="Staff_Respond" value="<?php echo $result["Staff_Respond"];?>">
                    </div>
              
                    <button type="submit" class="btn btn-info btn-lg">ບັນທືກ</button>
                    <a href='../basic-cancel-list.php' class="btn btn-danger btn-lg">ຍົກເລີກ</a>
                  </form>
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







