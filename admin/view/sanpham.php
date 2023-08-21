<div class="col-md-10">
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-end">
            <div class="col-md-5 ">
                <form action="">
                    <input type="text" name="" id="" class="mb-2">
                    <input type="submit" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên sản phẩm</td>
                    <td>Giá</td>
                    <td>Ảnh</td>
                    <td>ID danh mục</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($sp as $key=> $value):
                ?>
                <tr>
                    <td><?=$key+'1'?></td>
                    <td><?=$value['tensp']?></td>
                    <td><?=$value['gia']?></td>
                    <td>
                        <img src="<?=$value['img']?>" alt="" width="110">
                    </td>
                    <td><?=$value['id_dm']?></td>
                    <td>
                        <a onclick="return confirm('Bạn có chắn chắn muốn xóa sản phẩm này ?')" class="btn btn-warning" href="../admin/admin.php?act=sanpham&xoasp=<?= $value['id']?>">Xóa</a>
                        <a class="btn btn-success" href="../admin/admin.php?act=editsp&edit=<?= $value['id']?>">Sửa</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>