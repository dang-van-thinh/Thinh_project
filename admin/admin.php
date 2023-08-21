<?php
require_once "../model/getdata.php";
require_once "../model/connectdb.php";
require_once "../model/insert.php";
require_once "../model/delete.php";
require_once "../model/update.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include "view/head.php";
?>
</head>
<body>
<?php
    include "view/header.php";

    if(isset($_GET['act'])){
        switch($_GET['act']){
//them
            case 'them':
                if(isset($_POST['themsp'])){
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $danhmuc = $_POST['danhmuc'];
                    $giacu = $_POST['gia_cu'];

                    $folder = '../uploads/';
                    $img = $folder . basename($_FILES['img']['name']);
                    $file_tmp = $_FILES['img']['tmp_name'];
                    move_uploaded_file($file_tmp,$img);
                    addSP($tensp,$gia,$danhmuc,$img,$giacu);
                }
                $dm = loadDm();
                include "view/them.php";
                break;

  //sanpham              
            case 'sanpham':
                if(isset($_GET['xoasp'])){
                    $id=$_GET['xoasp'];
                    xoaSP($id);
                }
                $sp = loadAllSp();
                include "view/sanpham.php";
                break;

//danh mục
            case 'dm':
                if(isset($_POST['themdm'])){
                    $tendm = $_POST['danhmuc'];
                    addDm($tendm);
                }
                $dm=loadDm();
                include "view/danhmuc.php";
                break;

//thống kê
            case 'thongke':
                include "view/thongke.php";
                break;

// edit user
            case 'edituser':
                if(isset($_GET['edit'])){
                    $id = $_GET['edit'];
                }
                if(isset($_POST['thaydoi'])){
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    $email = $_POST['email'];
                    $anh1 = $_POST['anh1'];
                    $anh2 = $_FILES['anh2']['name'];
                    if($anh2 == ""){
                        $img=$anh1;
                    } else{
                        $folder = '../uploads/';
                        $img = $folder . basename($_FILES['anh2']['name']);
                        $file_tmp = $_FILES['anh2']['tmp_name'];
                        move_uploaded_file($file_tmp,$img);
                    }
                    update_user($id,$user,$pass,$email,$img);
                    header('location: ?act=qluser');
                }
                $kq = getInf_user($id);
                include "view/edituser.php";
                break;  

// editsp 
            case 'editsp':  
                if(isset($_GET['edit'])){
                    $id = $_GET['edit'];
                }
               
                if(isset($_POST['thaydoi'])){
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $danhmuc = $_POST['danhmuc'];
                    $img2= $_POST['img2'];
                    $img1=$_FILES['img']['name'];
                    if($img1==""){
                        $img = $img2;
                    }else{
                        $folder = '../uploads/';
                        $img = $folder . basename($_FILES['img']['name']);
                        $file_tmp = $_FILES['img']['tmp_name'];
                        move_uploaded_file($file_tmp,$img);
                    }
                    updateSp($tensp,$gia,$danhmuc,$img,$id);
                    header('location: ?act=sanpham');
                }
                
                $dm = loadDm();
                $inf_sp = loadOneSp($id);
                include "view/editsp.php";
                break;

//quản lý user
            case 'qluser':
                if(isset($_GET['xoauser'])){
                    $id = $_GET['xoauser'];
                    xoaUser($id);
                }
                if(isset($_GET['edit'])){
                    $id = $_GET['edit'];
                    
                }
                $Alluser = loadAllUser();
                include "view/qluser.php";
                break;

//thoát
            case 'thoat':
                unset($_SESSION['user'],$_SESSION['pass'],$_SESSION['id']);
                header('location: ../index.php');
                break;
            default: include "view/them.php";
        }
    }
    
    include "view/footer.php";
?>
</body>
</html>