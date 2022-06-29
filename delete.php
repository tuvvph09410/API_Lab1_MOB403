<?php

use LDAP\Result;

$sever="localhost";
$user="id16540630_tuvvph09410";
$passwork="TKLtJs2&fZ?lhRAW";
$database="id16540630_android_networking_mob403_vuvantu";
$connect=new mysqli($sever,$user,$passwork,$database);
if($connect->connect_error){
    die("lỗi kết nối: " .$connect->connect_error);
}
$sql="SELECT * FROM MyGuests";
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql="DELETE FROM MyGuests WHERE id=$id";
    if($connect->query($sql)==true){
        echo"Xóa thành công";
    }else{
        echo "Thất bại: " .$connect->error;
    }
}

$connect->close();
?>
