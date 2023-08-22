<div>
    <main class="" style="padding-top: 5rem;">
        <div class="container-fluid">
            <!-- slide show -->
            <div class="">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="../view/img/banner-4.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="../view/img/banner-5.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../view/img/banner-3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- end slide -->
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="news">
                            <img src="../view/img/img-news-1.jpg" alt="" class="img_news">
                            <div class="content_new">
                                <p></p>
                                <button class="btn btn-outline-success">Xem ngay</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news">
                            <img src="../view/img/img-news-2.jpg" alt="" class="img_news">
                            <div class="content_new">
                                <p></p>
                                <button class="btn btn-outline-success">Xem ngay</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news">
                            <img src="../view/img/img-new-3.jpg" alt="" class="img_news">
                            <div class="content_new">
                                <p></p>
                                <button class="btn btn-outline-success">Xem ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container-fluid ">
                    <div class="container my-3">
                        <h4>Sản phẩm mới</h4>
                    </div>
                    <div class="row" id="">
                        <?php 
                        foreach($spnew as $item):
                        ?>
                        <div class="col-md-3 col-sm-4 my-3">
                            <div class="card">
                                <div class="">
                                    <a href="?act=product_detail&id_sp=<?=$item['id']?>">
                                        <img src="<?=$item['img']?>" alt="" class="src_img">
                                        <input hidden type="text" name="" class="id_product" value="<?=$item['id']?>">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Giá : <span class="text-danger price"><?=$item['gia']?></span> đ
                                        <span class="price_old"><?=$item['gia_cu']?></span>
                                    </h5>
                                    <p class="card-text name_product"><?=$item['tensp']?></p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <?php endforeach;?>
                        



                        <div class="d-flex justify-content-center">
                            <a href="" class="link-opacity-75-hover btn_email">Xem all>> </a>
                        </div>
                    </div>
                    <!-- end san phảm bán chạy -->
                    <div class="container my-3">
                        <h4>Sản phẩm nổi bật</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 my-3">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="col-md-3 my-3 col-sm-4">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="col-md-3 col-sm-4 my-3">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="col-md-3 col-sm-4 my-3">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="d-flex justify-content-center">
                            <button class="link-opacity-75-hover btn_email">Xem all>> </button>
                        </div>
                    </div>
                    <div class="container my-3">
                        <h4>Sản phẩm yêu thích nhất</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 my-3">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="col-md-3 my-3 col-sm-4">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="col-md-3 col-sm-4 my-3">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="col-md-3 col-sm-4 my-3">
                            <div class="card">
                                <img src="../view/img/product-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Giá : <span class="text-danger">150.000</span> VND</h5>
                                    <p class="card-text">Tên sản phẩm</p>
                                    <button class="btn btn-danger">Mua</button>
                                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="d-flex justify-content-center">
                            <button class="link-opacity-75-hover btn_email">Xem all>> </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end aside -->
        </div>
    </main>
</div>
<!-- End main -->