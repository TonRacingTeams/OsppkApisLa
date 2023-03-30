<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 100%">
                    <thead>
                    <tr align='center'>
                        <th>ລະຫັດຜູ້ໃຊ້</th>
                        <th>ຊື່ ຜູ້ໃຊ້ </th>
                        <th>ສິດໃຊ້ໂປຣແກຣມ</th>
                        <th>ແກ້ໄຂ</th>
                         <th>ລົບ</th>
                        </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $Usr_id=$_POST['Usr_id'];
            
            
              
              


          

                if($Usr_id==""){$Usr_id="";}
                else{ $Usr_id="and (IT_Users_CRM.Usr_id like N'%$Usr_id%' or IT_Users_CRM.Usr_id like N'$Usr_id%')";}

        


                $i=1;
                $sql = "select *from IT_Users_CRM where 1=1 $Usr_id";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>
                    <tr>
                        <td><?PHP echo $result["Usr_id"]; ?></td>
                        <td><?PHP echo $result["Usr_nm"]; ?></td>
                        <td><?PHP echo $result["UsrPermit"]; ?></td>

                        <td align='center'>
           
                      <a href="javascript: window.open('pages/Update_User.php?Usr_id=<?PHP echo $result["Usr_id"]; ?>', 'nploojsiab page',  'top=50, left=50, width =1100, height=500');" class="btn btn-success"><i class="fas fa-edit fa-sm"></i> </a>
                      
                    </td>
                      <td align='center'>
                      <a href="pages/Delete_user.php?Usr_id=<?php echo $result['Usr_id']?>" class="btn btn-danger"  onclick=" return confirm('ທານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ..?')"><i class="fas fa-trash fa-sm"></i></a>
                      </td>
                    </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
