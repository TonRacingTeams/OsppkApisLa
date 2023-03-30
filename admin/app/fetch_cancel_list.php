<?php 
include("init.php");
    
		   
@$barcode= sqlsrv_real_escape_string($con,$_POST['barcode']);	
@$product= sqlsrv_real_escape_string($con,$_POST['product']);	


 if($barcode==''){
     $bc="";
} 		 
		   else{ $bc="and tbl_stock_in.barcode like '%$barcode%' ";}

if($product==''){$pd="";} 		 
		   else{ $pd="and tbl_stock_in.product like '%$product%' ";}

		  @$sp=sqlsrv_query($conn," SELECT tbl_stock_in.*,product.ice_img,RIGHT(tbl_stock_in.barcode,1)as units
        
          FROM tbl_stock_in 
          left join product on LEFT(tbl_stock_in.barcode,13) = product.barcode
          where 1=1 $bc $pd order by tbl_stock_in.barcode ASC
		    ");
		
          ?>
 <script>
 $('#select-all').click(function(event) {   
    if(this.checked) {
     
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
});
 </script>
        
 			<table  border="1"  class="table-bordered" >
            	<tr class="bgtd" align="center"> 
                
                     <th align="center" ><input type="checkbox" name="select-all" id="select-all" /> ເລືອກ</th>
                     <th align="center" >ລະຫັດ</th>
                	 <th align="center">ໜວດທີ</th>
				     <th align="center">ມາດຕາ</th>
                     <th align="center">ເນື້ອໃນລາຍການ</th>
					
                    
                </tr>
          


                <?php
                include 'server/connect.php';
                $i=0;  
                $sql = " SELECT * FROM Cri_CancelIn_Item";
                $query = sqlsrv_query( $conn, $sql );
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
                {
                  $i++;
                ?>



             <tr>
             <td align="center">
             <input type="checkbox" name="item_list[]" value="<?=$s["Item_ID"];?>" class="form-control"/>
             </td>
   
             <td align="right"><?php echo $s["Law_ID"] ;?></td>  
             <td align="right"><?php echo $s["Group_No"] ;?></td> 
             <td align="right"><?php echo $s["Law_No"] ;?></td> 
             <td align="right"><?php echo $s["Law_Name"] ;?></td> 
             <td align="right"><?php echo $s["Item_Name"] ;?></td> 
         
			</tr>			
            <?php 
            $e++;	
             } 
            ?>   
      </table>