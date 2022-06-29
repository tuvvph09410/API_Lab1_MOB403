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
$result=$connect->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id: ".$row["id"]." - Name: ".$row["firtname"]." "
        .$row["lastname"].$row["email"]."<br>";
    }
}else{
    echo"không có dự liệu";
}

$connect->close();
?>
