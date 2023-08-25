<!-- start footer -->
    <div class="icon_messes">
        <i class="fab fa-facebook-messenger"></i>
    </div>
<footer>
    <div class="mt-5 p-2 bg-success container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div>
                    <div>
                        <a href="?act=home">
                          <img src="../view/img/logo.jpg" alt="" class="img__logo">
                        </a>
                    </div>
                    <div class="mt-3">
                        <h6>Công ty TNHH một thành viên Innisfree</h6>
                        <p>Mã số thuế : 1234567890987</p>
                        <p>Văn phòng : Phụng Châu - Chương Mỹ - Hà Nội</p>
                    </div>
                    <div>
                        <form action="" method="post">
                            <h6>Tham gia ngay để nhận những ưu đãi khủng</h6>
                            <input type="text" name="" id="" placeholder="Nhập email của bạn" class="input_email">
                            <input type="submit" value="Đăng ký" class="btn_email">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Danh mục sản phẩm</h5>
                        <!-- menu -->
                        <!-- <div>
                            <ul class="list-group bg-success" style="border:none;">
                                <li class="list-group-item list-group-item-action bg-success">
                                    <a href="" class="nav-link">Dép</a>
                                </li>
                                <li class="list-group-item list-group-item-action bg-success">
                                    <a href="" class="nav-link">Dép</a>
                                </li>
                                <li class="list-group-item list-group-item-action bg-success">
                                    <a href="" class="nav-link">Dép</a>
                                </li>
                                <li class="list-group-item list-group-item-action bg-success">
                                    <a href="" class="nav-link">Dép</a>
                                </li>
                                <li class="list-group-item list-group-item-action bg-success">
                                    <a href="" class="nav-link">Dép</a>
                                </li>
                            </ul>
                        </div> -->
                        <div>
                            <ul class="mt-3">
                                <?php 
                                $dm = getDanhmuc();
                                foreach($dm as $item):
                                ?>
                                <li class="my-3">
                                    <a href="?act=products&dm=<?=$item['id']?>" class="nav-link"><?=$item['ten_dm']?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h5>Theo dõi chúng tôi</h5>
                        <!-- social media -->
                        <div>
                            <ul class="mt-3">
                                <li class="mt-3">
                                    <a href="" class="nav-link">Facebook: <i class="fab fa-facebook-square fs-4 mx-3"></i></a>
                                </li>
                                <li class="mt-3">
                                    <a href="" class="nav-link">Instagram: <i class="fab fa-instagram fs-4 mx-4 "></i></a>
                                </li>
                                <li class="mt-3">
                                    <a href="" class="nav-link">Messenger: <i class="fab fa-facebook-messenger fs-4 mx-4 "></i></a>
                                </li>
                                <li class="mt-3">
                                    <a href="" class="nav-link">Twitter: <i class="fab fa-twitter-square fs-4 mx-4 "></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
 <!-- cdn js bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="../view/js/main.js"></script>
<!-- End footer -->