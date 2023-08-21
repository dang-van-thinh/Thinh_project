<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $kq =  getInf_user($id);
    }    
    if(isset($_POST['change_user'])){
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
    }             
?>
<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-md-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mt-3">
                    <label class="form-label" for="username">Username: </label>
                    <input class="form-control" type="text" name="username" id="username" value="<?=$kq['user'];?>">
                </div>
                <div class="mt-3">
                    <label class="form-label" for="password">Password: </label>
                    <input class="form-control" type="text" name="password" id="password" value="<?=$kq['password'];?>">
                </div>
                <div class="mt-3">
                    <label class="form-label" for="email">Email: </label>
                    <input class="form-control" type="email" name="email" id="email" value="<?=$kq['email'];?>">
                </div>
                <div class="mt-3">
                    <label class="form-label" for="email">Ảnh: </label>
                    <img src="<?=$kq['img'];?>" alt="" width="110">
                    <input hidden type="text" name="anh1" id="" value="<?=$kq['img'];?>">
                    <input type="file" name="anh2" id="" class="form-control mt-3">
                </div>
                <input class="btn btn-danger mt-3" type="submit" value="Thay đổi" name="change_user">
            </form>
        </div>
    </div>
</div>