<?php
#starts a new session
session_start();
#includes a database connection
include 'admin/server/connect.php';
#catches user/password submitted by html form
$user = $_POST['user'];
$password = $_POST['password'];
#checks if the html form is filled
if(empty($_POST['user']) || empty($_POST['password'])){
    echo "Fill all the fields!";
}else{
#searches for user and password in the database
$query = "SELECT * FROM AP_KHT_Users WHERE Usr_id='{$user}' AND PWD='{$password}'";
$result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'
#checks if the search was made
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}
#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
       echo "<script>alert('ບັນຊີຜູ້ໃຊ້ ແລະ ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ ລະວັງດີໆ!');location='index.php'</script>";
}else{
#creates sessions
    while($row = sqlsrv_fetch_array($result)){
       $_SESSION['Usr_id'] = $row['Usr_id'];
       $_SESSION['PWD'] = $row['PWD'];    
    }
#redirects user
    header("Location: admin/index.php");
}
}
?> 
