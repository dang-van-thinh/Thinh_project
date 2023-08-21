<?php
require_once "connectdb.php";

function update($query){
    $conn = connect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
}
function update_user($id,$user,$pass,$email,$img){
    $query = "UPDATE user_login SET user='$user',email='$email',password='$pass',img='$img' WHERE id=$id";
    update($query);
    header('location: ../controller/index.php?act=home');
}
function updateSp($tensp,$gia,$danhmuc,$img,$id){
    $query = "UPDATE sanpham SET tensp='$tensp',gia='$gia',img='$img',id_dm='$danhmuc' WHERE id=$id";
    update($query);
}
?>