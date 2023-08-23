<div class="container mt-5" style="padding-top: 100px;">
    <!-- header details -->
    <div class="row">
        <!-- ảnh sản phẩm -->
        <div class="col-md-5 col-sm-5">
            <div class="container">
                <img width="100%" src="<?= $sp['img'] ?>" alt="">
            </div>
        </div>
        <div class="col-md-7 col-sm-7">
            <!-- mô tả sản phẩm -->
            <div class="container">
                <div class="mt-4">
                    <p class="h2"><?= $sp['tensp'] ?></p>
                </div>
                <div class="mt-4">
                    <span class="text-danger fs-4 fw-bold"><?= $sp['gia'] ?> VNĐ</span>
                    <span class="price_old"><?= $sp['gia_cu'] ?></span>
                </div>
                <div class="mt-4">
                    <div>
                        <span class="fw-bold">- Thương hiệu: </span>
                        <p>Innisfree</p>
                        <span class="fw-bold">- Xuất xứ: </span>
                        <p>Hàn Quốc</p>

                        <span class="fw-bold">- Bảo hành: </span>
                        <p>3 tháng (Đổi trả 1 đổi 1 trong vòng 1 tháng)</p>

                    </div>
                </div>
            </div>
            <!-- hành động -->
            <div class="container">
                <div class="color">
                    <span class="fw-bold">Chọn màu:</span>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-outline-danger" value="red">Đỏ</button>
                        <button type="button" class="btn btn-outline-success active" value="green">Xanh</button>
                        <button type="button" class="btn btn-outline-dark" value="black">Đen</button>
                    </div>
                </div>
                <div class="quanlity row mt-3">
                    <div class="col-md-2">
                        <span class="fw-bold">Số lượng: </span>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="" id="" value="1" min="1" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <button class="btn btn-outline-success ">Thêm <i class="fas fa-cart-plus fs-5"></i></button>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" value="Mua hàng" class="btn btn-outline-danger">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="border p-3">
                        <h5 class="text-success">Chính sách bán hàng</h5>
                        <div class="mt-3">
                            <div class="mt-3">
                                <i class="fas fa-truck text-dark"> Giao hàng miễn phí</i>(Hóa đơn từ 500k)
                            </div>
                            <div class="mt-3">
                                <i class="fas fa-clock"> Đổi trả miễn phí trong 10 ngày</i>
                            </div>
                            <div class="mt-3">
                                <i class="fas fa-money-bill-wave"> Thanh toán khi nhận hàng</i> (hoặc chuyển khoản)
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end header detail -->
<!-- main detail -->
<div class="container mt-3">
    <!-- thông tin sản phẩm -->
    <div class="row">
        <div class=" border">
            <h4>Thông tin sản phẩm: </h4>
            <p style="width: 100%; height: 100vh;">Nội dung mô tả</p>
        </div>
    </div>

    <!-- comment product -->
    <div class="row mt-4">
        <div class="col-md-10">
            <h4>Bình luận:</h4>
            <!-- comment 1 -->
            <div class="row border p-2 mt-2">
                <div class="col-md-2 text-center">
                    <img src="../view/img/product-1.jpg" alt="" width="60" height="60" class="rounded-circle">
                    <p class="name-user_comment">Nguyễn Thị zxssssA</p>
                </div>
                <div class="col-md-8">
                    <span class="ranting_product">5 sao</span>
                    <div class="content_comment">
                        <p>Tôi thấy sản phẩm oke đấy</p>
                    </div>
                </div>
            </div>
            <!-- end comment 1 -->
            <!-- comment 1 -->
            <div class="row border p-2 mt-2">
                <div class="col-md-2 text-center">
                    <img src="../view/img/product-2.jpg" alt="" width="60" height="60" class="rounded-circle">
                    <p class="name-user_comment">Nguyễn Xuân V</p>
                </div>
                <div class="col-md-8">
                    <span class="ranting_product">5 sao</span>
                    <div class="content_comment">
                        <p>Tôi thấy sản phẩm oke đấy, phù hợp với giá tiền</p>
                    </div>
                </div>
            </div>
            <!-- end comment 1 -->
            <!-- comment 1 -->
            <div class="row border p-2 mt-2     ">
                <div class="col-md-2 text-center">
                    <img src="../view/img/product-4.jpg" alt="" width="60" height="60" class="rounded-circle">
                    <p class="name-user_comment">Nguyễn Thị zxssssA</p>
                </div>
                <div class="col-md-8">
                    <span class="ranting_product">5 sao</span>
                    <div class="content_comment">
                        <p>Tôi thấy sản phẩm oke đấy</p>
                    </div>
                </div>
            </div>
            <!-- end comment 1 -->
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-1">
            <img src="../view/img/product-3.jpg" alt="" width="60" height="60" class="rounded-circle">
        </div>
        <div class="col-md-10">
            <form action="" method="post">
                <textarea name="" id="" cols="100" rows="5" placeholder="Nội dung bình luận ..." class="form-control"></textarea>
            </form>
        </div>
    </div>
    <div>
        <div class="container my-3">
            <h4>Sản phẩm liên quan</h4>
        </div>
        <div class="row">
            <?php foreach($spdm as $item):?>
            <div class="col-md-3 col-sm-4 my-3">
                <div class="card">
                <a href="?act=product_detail&id_sp=<?=$item['id']?>&id_dm=<?=$item['id_dm']?>">
                    <img src="<?=$item['img']?>" alt="" class="card-img-top">
                </a>
                    <div class="card-body">
                        <h5 class="card-title">Giá : <span class="text-danger"><?=$item['gia']?> đ</span> </h5>
                        <p class="card-text"><?=$item['tensp']?></p>
                        <button class="btn btn-danger">Mua</button>
                        <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <!-- end product -->
        
            <div class="d-flex justify-content-center">
                <button class="link-opacity-75-hover btn_email">Xem all>> </button>
            </div>
        </div>
    </div>
</div>
<!-- end detail product -->
</div>