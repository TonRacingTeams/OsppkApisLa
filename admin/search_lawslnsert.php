<html>
	<body>
    


             <div id='show' class="table-responsive p-10">
                <table class='table table-bordered' style="width: 142%">
                    <thead>
                   
                    <tr align='center'>
                    <th>ລຳດັບ</th>
                    
                    <th>ມາດຕາ</th>
                    <th>ໝວດ</th>
                    <th>ປະເພດ ຫຼື ສະຖານະຂອງການກະທຳຜິດ</th>
                    
                    <th>ຈຳນວນຄະດີ</th>
                    <th>ຈຳນວນຜູ້ຕ້ອງຫາ</th>
                    <th>ອາຊີບ</th>
                    <th>ອາຍຸສະເລ່ຍ</th>
                    <th>ຊາຍ</th>
                    <th>ຍີງ</th>
                    <th>ສາເຫດ ແລະ ເງື່ອນໄຂທີ່ພາໃຫ້ກະທຳຜີດ</th>
                    <th>ອຸປະກອນ ແລະ ພາຫະນະທີ່ຮັບໃຊ້ເຂົ້າໃນການກະທຳຜີດ</th>
                    <th>ໝາຍເຫດ</th>
                
                
                    </tr>
                </thead>
                   
                <?php
                include 'server/connect.php';
                $Law_No=$_POST['Law_No'];
                $Group_No=$_POST['Group_No'];
            
            
              
                if($Law_No==""){$Law_No="";}
                else{ $Law_No="and (KHT_Rpt_SumByLaw.Law_No like N'%$Law_No%' or KHT_Rpt_SumByLaw.Law_No like N'$Law_No%')";}



                if($Group_No==""){$Group_No="";}
                else{ $Group_No="and (KHT_Rpt_SumByLaw.Group_No like N'%$Group_No%' or KHT_Rpt_SumByLaw.Group_No like N'$Group_No%')";}

        


                $i=1;
                $sql = "SELECT * FROM KHT_Rpt_SumByLaw WHERE 1=1 $Law_No $Group_No";
                $query = sqlsrv_query( $conn, $sql );

                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>

                    <tbody>

                    <tr>  


                <td><?PHP echo $result["Group_ID"]; ?></td>
              
                <td><?PHP echo $result["Law_No"]; ?></td>
                <td><?PHP echo $result["Group_No"]; ?></td>
                <td><?PHP echo $result["Law_Name"]; ?></td>

                <td><?PHP echo $result["Case_Qty"]; ?></td>
                <td><?PHP echo $result["Pers_Qty"]; ?></td>
                <td><?PHP echo $result["Profesional"]; ?></td>
                <td><?PHP echo $result["Age"]; ?></td>
                <td><?PHP echo $result["Female"]; ?></td>
                <td><?PHP echo $result["Male"]; ?></td>
                <td><?PHP echo $result["Resion"]; ?></td>
                <td><?PHP echo $result["Used_Tool"]; ?></td>
                <td><?PHP echo $result["Remark"]; ?></td>
                    </tr>

                    </tbody>
                    <?php
                  }
                  ?>
                </table>
                </div>
	</body>
</html>
