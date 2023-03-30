<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 120%">
                    <thead>
                   
                    <tr align='center'>
                    <th>ລະຫັດໝວດ</th>
                    <th>ລະຫັດ</th>
                    <th>ຊື</th>
                    <th>ເນື້ອໃນ</th>
                
                
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $Law_ID=$_POST['Law_ID'];
            
            
              
              


          

                if($Law_ID==""){$Law_ID="";}
                else{ $Law_ID="and (Civ_Laws.Law_ID like N'%$Law_ID%' or Civ_Laws.Law_ID like N'$Law_ID%')";}

        


                $i=1;
                $sql = "select *from Civ_Laws where 1=1 $Law_ID";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>

                    <tr>  
                    <td><?PHP echo $result["Group_ID"]; ?></td>
                    <td><?PHP echo $result["Law_ID"]; ?></td>
                    <td><?PHP echo $result["Law_Name"]; ?></td>
                    <td><?PHP echo $result["Item_Name"]; ?></td>
                    </tr>

                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
