<?php
if(isset($_POST['themsp'])){
    $tensp= $_POST['tensp'];
    $gia= $_POST['gia'];
    $id_dm= $_POST['danhmuc'];
    
$folder = "/website bán quần áo/uploads/";
if (file_exists($folder)) {
    echo "$folder tồn tại";
} else {
    echo "$folder không tồn tại";
}
    $img = $folder . basename($_FILES['img']['name']);
    $file_tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($file_tmp,$img);

    // addSP($tensp,$gia,$img,$id_dm);
    // header('location: ../controller/admin.php?act=sanpham');
}
function addSP($tensp,$gia,$img,$id_dm){
    $conn = connect();
    $query = "INSERT INTO sanpham(tensp,gia,img,id_dm) VALUES('$tensp','$gia','$img','$id_dm')";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}
?>