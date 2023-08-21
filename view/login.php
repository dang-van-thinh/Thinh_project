
<div class="container " style="padding-top: 100px;">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="">
                <form action="index.php?act=login" method="post" class="border p-4 my-4">
                <h4 class="">Đăng nhập</h4>
                         <div class="badge">
                            <span class="text-danger"><?=$er??""?></span>
                        </div>
                    <div class="mt-3">
                        <label class="form-label" for="username">Username: </label> 
                        <span class="text-danger badge"><?= $_COOKIE['mess_u']??""?></span>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="password">Password: </label>
                        <span class="text-danger badge"><?= $_COOKIE['mess_p']??""?></span>
                        <input class="form-control" type="text" name="password" id="password">
                    </div>
                    <div class="mt-3">
                        <label class="form-check-label" for="memo">
                            <input class="form-check-input" type="checkbox" id="memo">
                            Remember for me
                        </label>
                    </div>
                    <div class="mt-3">
                        <a class="link-opacity-75-hover" href="index.php?act=register">Chưa có tài khoản ?</a>
                        <a class="link-opacity-75-hover mx-3" href="">Quên mật khẩu</a>
                    </div>
                    <input class="btn btn-danger mt-3" type="submit" value="Đăng nhập" name="dangnhap">
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
