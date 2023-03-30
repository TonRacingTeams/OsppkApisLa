<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                    <thead>
                   
                    <tr align='center'>
                    <th>ລຳດັບ</th>
                    <th>ລະຫັດໝວດ</th>
                    <th>ຊື່ໝວດ</th>
                    <th>ລະຫັດ</th>
                    <th>ມາດຕາ</th>
                    <th>ເນື້ອໃນ</th>
                   </tr>

                </thead>
                   
                <?php
                include 'server/connect.php';
                $Law_No=$_POST['Law_No'];
            
            
              
              


          

                if($Law_No==""){$Law_No="";}
                else{ $Law_No="and (Cri_LawItem.Law_No like N'%$Law_No%' or Cri_LawItem.Law_No like N'$Law_No%')";}

        


                $i=1;
                $sql = "select *from Cri_LawItem where 1=1 $Law_No";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>

                    <tr>  
                    <td><?PHP echo $result["Cnt"]; ?></td>
                    <td><?PHP echo $result["Group_ID"]; ?></td>
                    <td><?PHP echo $result["Group_No"]; ?></td>
                    <td><?PHP echo $result["Law_ID"]; ?></td>
                    <td><?PHP echo $result["Law_No"]; ?></td>
                    <td><?PHP echo $result["Law_Name"]; ?></td>
                    </tr>

                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
