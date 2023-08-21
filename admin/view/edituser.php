<div class="col-md-8">
    <div class="container mt-3">
        <form action="?act=edituser&edit=<?=$kq['id']?>" method="post" enctype="multipart/form-data">
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
            <input class="btn btn-danger mt-3" type="submit" value="Thay đổi" name="thaydoi">
         </form>
    </div>
</div>