<?php 
session_start();
ob_start();
require_once "../model/connectdb.php";
require_once "../model/getdata.php";
require_once "../model/update.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../view/layout/head.php"; ?>
</head>
<body>
<?php include "../view/layout/header.php"; ?>
<?php 
if(isset($_GET['act'])){
    switch($_GET['act']){
        case'home':
            $spnew = loadSpNew();
            include "../view/home.php";
            break;
        case'contact':
            include "../view/contact.php";
            break;
        case'products':
            include "../view/products.php";
            break;
            case'search':
                if(isset($_POST['search'])){
                    $search_product = $_POST['search_product'];
                    $product_search = loadDtSearch($search_product);
                }
                include "../view/search.php";
                break;
        case'cart':
            include "../view/cart.php";
        break;
        case'register':
            include "../view/register.php";
            break;
        case'login':
            if(isset($_POST['dangnhap'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $tk = getUser($user,$pass);
                
                if($tk==""){
                    $er = "Kiem tra lai tai khoan va mat khau";
                }else{
                    if($tk['uutien']==1){
                        header('location: ../admin/admin.php');
                    }else{
                        header('location: ../index.php');
                        $_SESSION['user'] = $tk['user'];
                        $_SESSION['pass'] = $tk['pass'];
                        $_SESSION['id'] =$tk['id'];
                    }
                }
            }
            include "../view/login.php";
            break;
        case'product_detail':
            if(isset($_GET['id_sp'])){
                $id_sp = $_GET['id_sp'];
                $id_dm = $_GET['id_dm'];
                $sp = loadPrDetail($id_sp);
                $spdm= loadSpDm_detail($id_sp,$id_dm);
            }
            include "../view/product_detail.php";
            break;  
        case'inf_user':
            include "../view/inf_user.php";
            break;    
        case'thoat':
            unset($_SESSION['user'],$_SESSION['pass'],$_SESSION['id']);
            header('location: index.php?act=home');
            break;
        default: 
        $spnew = loadSpNew();
        include "../view/home.php";
        break;
    }
} else{
    $spnew = loadSpNew();
    include "../view/home.php";
}
?>
<?php include "../view/layout/footer.php"; ?>
</body>
</html>