<?php



include 'head.php';
$Item_ID=$_GET['Item_ID'];
$sql="SELECT * FROM KHT_AppInAY WHERE Item_ID='$Item_ID' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add mumber</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            
        
    <div class=" h3 text-center alert alert-primary mb-4 mt-4" role="alert">ແກ້ໄຂຂໍ້ມູນລູກຄ້າ</div>
    <form method="POST" action="update_member.php">



    <label>ລຳດັບ:</label>
        <input type="text" name="Item_ID" class="form-control" readonly value=<?=$row['Item_ID']?>    ><br>

    <label>ລະຫັດຄະດີ:</label>
        <input type="text" name="Item_No" class="form-control" readonly value=<?=$row['Item_No']?>    ><br>


        <label>ເລກທີຂາເຂົ້າ:</label>
        <input type="text" name="Item_Date" class="form-control" value=<?=$row['Item_Date']?>    ><br>


        <label>ວັນເດືອນປີເຂົ້າ:</label>
        <input type="text" name="lname" class="form-control" value=<?=$row['surname']?>     ><br>


        <label>ເລກທີ່ສຳນວນ:</label>
        <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>    ><br>





        <label>ວັນທີ່ລົງສຳນວນ:</label>
        <input type="text" name="id_mem" class="form-control" readonly value=<?=$row['id']?>    ><br>


        <label>ໂຈດທາງອາຍາ:</label>
        <input type="text" name="fname" class="form-control" value=<?=$row['name']?>    ><br>


        <label>ວັນເດືອນປີເຂົ້າ:</label>
        <input type="text" name="lname" class="form-control" value=<?=$row['surname']?>     ><br>


        <label>ຈຳເລີຍ:</label>
        <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>    ><br>





        <label>ໂຈດທາງແພ່ງ:</label>
        <input type="text" name="id_mem" class="form-control" readonly value=<?=$row['id']?>    ><br>


        <label>ບຸກຄົນທີສາມ:</label>
        <input type="text" name="fname" class="form-control" value=<?=$row['name']?>    ><br>


        <label>ຖືກຫາວ່າ:</label>
        <input type="text" name="lname" class="form-control" value=<?=$row['surname']?>     ><br>


        <label>ວັນທີກັກຕົວ:</label>
        <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>    ><br>


        <label>ວັນທີປ່ອຍຕົວພາງ:</label>
        <input type="text" name="fname" class="form-control" value=<?=$row['name']?>    ><br>


        <label>ສະຖານທີ່ກັກຂັງ:</label>
        <input type="text" name="lname" class="form-control" value=<?=$row['surname']?>     ><br>


        <label>ໜ່ວຍງານຮັບຜິດຊອບ:</label>
        <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>    ><br>


        <label>ພະນັກງານຮັບຜິດຊອບ:</label>
        <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>    ><br>


        <input type="submit" value="Update" class="btn btn-success">


        <td><a href="show_member.php" class="btn btn-danger">Cancle</a></td>
        
    </form>
    </div>
    </div>
        </div>
</body>
</html>