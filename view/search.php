<div class="container-fluid " style="padding-top: 100px;">
    <div class="container my-3">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
                <h4>Tìm kiếm với từ khóa : <?=$search_product??"Tất cả"?></h4>
            </div>

        </div>
    </div>
    <div class="row">
    <?php
            foreach($product_search as $sp):
        ?>
        <div class="col-md-3 col-sm-4 my-3">
            <div class="card">
                <div class="">
                    <a href="?act=product_detail&id_sp=<?=$sp['id']?>&id_dm=<?=$sp['id_dm']?>">
                        <img src="<?=$sp['img']?>" alt="" class="src_img" >
                        <input hidden type="text" name="" class="id_product" value="<?=$sp['id']?>">
                    </a>
                </div>
                <div class="card-body">
                    <div class="price_all">
                        <h5 class="card-title">Giá : <span class="text-danger price"><?=$sp['gia']?></span>đ</h5>
                        <span class="price_old"><?=$sp['gia_cu']?></span>
                    </div>
                    <a href="" class="card-text nav-link expand name_product my-2"><?=$sp['tensp']?></a>
                    <button class="btn btn-danger">Mua</button>
                    <button class="btn btn-success addcart"><i class="fas fa-cart-plus"></i></button>
                </div>
            </div>
        </div>
        <!-- end product -->
        <?php endforeach;?>
        <div class="d-flex justify-content-center">
                <a href="" class="link-opacity-75-hover">Xem all>> </a>
            </div>

    </div>
    <!-- end san phảm bán chạy -->
</div>