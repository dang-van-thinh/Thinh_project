<div class="col-md-7">
    <!-- <span>Nội dung</span> -->
    <div class="container">
        <div class="mt-3 border p-2">
            <h3>Thêm sản phẩm</h3>
            <form action="../admin/admin.php?act=them" method="POST" enctype="multipart/form-data">
                <div class="mt-3">
                    <label for="tensp" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="gia" class="form-label">Giá</label>
                    <input type="number" min="10000" name="gia" id="gia" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="gia_cu" class="form-label">Giá cũ (nếu có)</label>
                    <input type="number" min="10000" name="gia_cu" id="gia_cu" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="img" class="form-label">Ảnh sản phẩm</label>
                    <input type="file" name="img" id="img" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="danhmuc" class="form-label">Tên danh mục</label>
                    <select name="danhmuc" id="danhmuc">
                        <?php
                        foreach($dm as $value):
                        ?>
                        <option value="<?=$value['id']?>"> <?=$value['ten_dm']?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mt-3">
                    <div class="btn btn-danger">
                    <input type="submit" value="Thêm" name="themsp" class="btn">
                    <i class="fas fa-plus"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>