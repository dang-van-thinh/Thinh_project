<div class="col-md-10">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4 border p-4">
                <h4>Thêm danh mục</h4>
                <form action="?act=dm" method="post">
                    <label for="danhmuc" class="form-label">Tên danh mục: </label>
                    <input type="text" name="danhmuc" id="" class="form-control">
                    <div class="btn btn-outline-danger mt-3">
                    <input type="submit" value="Thêm danh mục" class="btn " name="themdm">
                    <i class="fas fa-plus"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="col-md-10">
            <h4>Danh sách danh mục</h4>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Tên danh mục</td>
                        <td>Chức năng</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($dm as $key=>$value):
                    ?>
                    <tr>
                        <td><?=$key+'1'?></td>
                        <td><?=$value['ten_dm']?></td>
                        <td>
                            <a class=" btn btn-warning" href="">Xóa <i class="fas fa-trash"></i></a>
                            <a class="btn btn-success" href="">Sửa <i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>