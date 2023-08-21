<div class="container " style="padding-top: 100px;">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           
            <div class="">
                <form action="../model/insert.php" method="post" class="border p-4 my-4" enctype="multipart/form-data">
                <h4>Đăng ký</h4>
                <div class="mt-3">
                        <label class="form-label" for="email">Email: </label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="username">Username: </label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password">Password: </label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="rpassword">Repassword: </label>
                        <input class="form-control" type="password" name="rpassword" id="rpassword">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="anh">Ảnh đại diện: </label>
                        <input type="file" name="anh" id="anh" class="form-control">
                    </div>
                    <div class="mt-3">
                        <a class="link-opacity-75-hover" href="index.php?act=login">Đã có tài khoản</a>
                    </div>
                    <input class="btn btn-danger mt-3" type="submit" value="Đăng ký" name="dangky">
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>