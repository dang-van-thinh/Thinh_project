<?php
require_once "connectdb.php";

function xoaSP($id){
    $conn = connect();
    $query = "DELETE FROM sanpham WHERE id=$id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}
function xoaUser($id){
    $conn = connect();
    $query = "DELETE FROM user_login WHERE id=$id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}

?>