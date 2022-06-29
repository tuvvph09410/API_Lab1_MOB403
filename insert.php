<?php
$sever="localhost";
$user="id16540630_tuvvph09410";
$passwork="TKLtJs2&fZ?lhRAW";
$database="id16540630_android_networking_mob403_vuvantu";
$connect=new mysqli($sever,$user,$passwork,$database);
if($connect->connect_error){
    die("lỗi kết nối: " .$connect->connect_error);
}
if(isset($_GET['id']) && isset($_GET['firtname']) && isset($_GET['lastname']) && isset($_GET['email'])){
    $id=$_GET['id'];
    $firtname=$_GET['firtname'];
    $lastname=$_GET['lastname'];
    $email=$_GET['email'];

    $sql="INSERT INTO MyGuests (id,firtname,lastname,email) VALUES ('$id','$firtname',$lastname','$email')";
    if($connect->query($sql) == true){
        echo "Insert thành công";
    }else{
        echo"Insert thất bại: " .$connect->error;
    }
}
$connect->close();
?>
