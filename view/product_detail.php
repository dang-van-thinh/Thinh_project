<div class="container mt-5" style="padding-top: 100px;">
    <!-- header details -->
    <div class="row">
        <!-- ảnh sản phẩm -->
        <div class="col-md-5 col-sm-5">
            <div class="container">
                <img width="100%" src="<?=$sp['img']?>" alt="">
            </div>
        </div>
        <div class="col-md-7 col-sm-7">
            <!-- mô tả sản phẩm -->
            <div class="container">
                <div class="mt-4">
                    <p class="h2"><?=$sp['tensp']?></p>
                </div>
                <div class="mt-4">
                    <span class="text-danger fs-4 fw-bold"><?=$sp['gia']?> VNĐ</span>
                    <span class="price_old"><?=$sp['gia_cu']?></span>
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
                            <button  class="btn btn-outline-success ">Thêm <i class="fas fa-cart-plus fs-5"></i></button>
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
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</div>
</div>