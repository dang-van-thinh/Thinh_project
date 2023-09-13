<div class="fixed-top container-fluid p-0 z-3 b-4">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-success bg p-0">
            <div class="container-fluid px-4">
                <div class="col-md-2">
                    <a class="navbar-brand " href="index.php?act=home"><img class="img__logo" src="../view/img/logo.jpg" alt="logo"></a>
                </div>
                
                <div class="col-md-10" >
                    <div class="collapse navbar-collapse text__color" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link fs-5 text-white mx-3" href="index.php?act=home">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5 text-white mx-3" href="index.php?act=contact">Liên hệ</a>
                            </li>
                            <li class="nav-item ">
                                <div class="dropdown">
                                    <a class="nav-link fs-5 text-white mx-3 dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Sản phẩm</a>
                                    <ul class="dropdown-menu">
                                        <?php $dm = getDanhmuc();
                                        foreach ($dm as $value) :
                                        ?>
                                            <li><a class="dropdown-item" href="index.php?act=products&dm=<?= $value['id'] ?>"><?= $value['ten_dm'] ?> </a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                            </li>
                        </ul>
                        <div class="">
                            <div class="me-5">
                                <ul class="navbar-nav me-5">
                                    <li class="nav-item mx-3 pt-2">
                                        <form action="?act=search" method="POST" class="form_search">
                                            <input class="type_input" type="text" placeholder="Nhập thông tin ..." name="search_product">
                                            <input type="submit" value="Tìm kiếm" class="btn_search" name="search">
                                        </form>
                                    </li>
                                    <li class="nav-item mx-3">
                                        <a class="nav-link text-white btn" id="cart" href="index.php?act=cart"><i class="fas fa-cart-plus fs-5"><span id="number_cart">0</span></i> </a>
                                    </li>

                                    <?php
                                    if (isset($_SESSION['user'])) { ?>
                                        <?php
                                        $id = $_SESSION['id'];
                                        $user = getInf_user($id); ?>
                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <a href="index.php?act=inf" class="dropdown-toggle btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="<?= $user['img'] ?>" alt="" width="30" height="30" class="rounded-circle">
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="?act=inf_user&id=<?= $_SESSION['id'] ?? ""; ?>" class="dropdown-item">Thông tin</a></li>
                                                    <!-- <li><a href="" class="dropdown-item">Thông tin</a></li> -->
                                                    <li><a href="index.php?act=thoat" onclick="return confirm('Bạn có chắc muốn thoát ?')" class="dropdown-item">Đăng xuất</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php  } else { ?>
                                        <li class="nav-item mx-3">
                                            <a class="nav-link text-white" href="index.php?act=login"><i class="fas fa-user fs-5"></i></a>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- reponsive mobile -->
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
            </div>
            
        </nav>
    </div>
</div>
<!-- end header -->