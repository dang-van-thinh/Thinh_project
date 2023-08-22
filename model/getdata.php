<?php
require_once "connectdb.php";
function getdata_nowhere($query){
    $conn = connect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq= $stmt->fetchAll();
    return $kq;
}
function getdata_where($query){
    $conn = connect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq= $stmt->fetch();
    return $kq;
}
// lấy dữ liệu người dùng để đăng nhập
function getUser($loaduser,$loadpass){
    $query = "SELECT * FROM user_login WHERE user='$loaduser' AND password='$loadpass'";
    return getdata_where($query);
}
// lấy thông tinn khách hàng cần thay đổi
function getInf_user($id){
    $query = "SELECT * FROM user_login WHERE id=$id";
    return getdata_where($query);
}
// lấy thông tin tất cả người dùng
function loadAllUser(){
    $query= "SELECT * FROM user_login";
   return getdata_nowhere($query);
}

// lấy dữ liệu danh mục sản phẩm
function getDanhmuc(){
    $query = "SELECT * FROM danhmuc_sanpham";
    return getdata_nowhere($query);
}
// lấy sản phẩm theo danh mục
function getSpDm($id_dm){
    $conn = connect();
    $query ="SELECT * FROM sanpham WHERE id_dm=$id_dm";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq= $stmt->fetchAll();
    return $kq;
}
// lấy danh mục
function loadDm(){
    $query ="SELECT * FROM danhmuc_sanpham";
   return getdata_nowhere($query);
}
// lấy all sản phẩm 
function loadAllSp(){
    $query ="SELECT * FROM sanpham";
   return getdata_nowhere($query);
}
// lấy 1 sản phẩm theo 
function loadOneSp($id){
    $query ="SELECT * FROM sanpham WHERE id=$id";
   return getdata_where($query);
}
// lấy dữ liệu từ thanh tìm kiếm
function loadDtSearch($search){
    $conn = connect();
    $query = "SELECT * FROM sanpham WHERE tensp LIKE '$search%'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq = $stmt->fetchAll();
    return $kq;
}
function loadSpNew(){
    $conn = connect();
    $query = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 4";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq = $stmt->fetchAll();
    return $kq;
}
function loadPrDetail($id_product){
    $query = "SELECT * FROM sanpham WHERE id=$id_product";
    return getdata_where($query);
}
?>