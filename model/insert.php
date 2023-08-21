<?php
include_once "connectdb.php";

if(isset($_POST['dangky'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $folder = '../uploads/';
    $img = $folder . basename($_FILES['anh']['name']);
    $file_tmp = $_FILES['anh']['tmp_name'];
    move_uploaded_file($file_tmp,$img);
    echo $file_tmp;
    register($email,$user,$pass,$img);
    header('location: ../controller/index.php?act=login');
}
function register($email,$user,$pass,$img){
    $conn = connect();
    $query = "INSERT INTO user_login(user,email,password,img) VALUES('$user',n'$email','$pass','$img')";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}

function addSP($tensp,$gia,$danhmuc,$img,$giacu){
    $conn = connect();
    $query = "INSERT INTO sanpham(tensp,gia,gia_cu,img,id_dm) VALUES ('$tensp','$gia','$giacu','$img','$danhmuc')";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}

function addDm($tendm){
    $conn = connect();
    $query = "INSERT INTO danhmuc_sanpham(ten_dm) VALUES ('$tendm')";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}
?>
