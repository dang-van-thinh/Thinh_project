<div class="col-md-8">
    <!-- <span>Nội dung</span> -->
    <div class="container">
        <div class="mt-3 border p-2">
            <h3>Thêm sản phẩm</h3>
            <form action="?act=editsp&edit=<?=$inf_sp['id']?>" method="POST" enctype="multipart/form-data">
                <div class="mt-3">
                    <label for="tensp" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" class="form-control" value="<?=$inf_sp['tensp']?>">
                </div>
                <div class="mt-3">
                    <label for="gia" class="form-label">Giá</label>
                    <input type="number" min="10000" name="gia" id="gia" class="form-control" value="<?=$inf_sp['gia']?>">
                </div>
                <div class="mt-3">
                    <label for="gia_cu" class="form-label">Giá cũ (nếu có)</label>
                    <input type="number" min="10000" name="gia_cu" id="gia_cu" class="form-control" value="<?=$inf_sp['gia_cu']?>">
                </div>
                <div class="mt-3">
                    <label for="img" class="form-label">Ảnh sản phẩm</label>
                    <input type="file" name="img" id="img" class="form-control">
                    <input hidden type="text" name="img2" id="" value="<?=$inf_sp['img']?>">
                    <img src="<?=$inf_sp['img']?>" alt="" width="150">
                </div>
                <div class="mt-3">
                    <label for="danhmuc" class="form-label">Tên danh mục</label>
                    <select name="danhmuc" id="danhmuc">
                        <?php
                        foreach($dm as $value):
                        ?>
                        <option <?=$inf_sp['id_dm'] ==$value['id']?"selected":""?> value="<?=$value['id']?>"> <?=$value['ten_dm']?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mt-3">
                    <input type="submit" value="Thay đổi" name="thaydoi" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</div>