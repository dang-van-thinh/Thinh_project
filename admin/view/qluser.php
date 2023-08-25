<div class="col-md-8">
    <div class="container mt-3">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên user</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>Ảnh</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($Alluser as $key=> $value):
                ?>
                <tr>
                    <td><?=$key+'1'?></td>
                    <td><?=$value['user']?></td>
                    <td><?=$value['password']?></td>
                    <td><?=$value['email']?></td>
                    <td>
                        <img src="<?=$value['img']?>" alt="" width="110">
                    </td>
                    <td>
                        <a class="btn btn-warning" onclick="return confirm('Bạn có chắc muốn xóa tài khoản này ?')" href="../admin/admin.php?act=qluser&xoauser=<?= $value['id']?>">Xóa <i class="fas fa-trash"></i></a>
                        <a class="btn btn-success" href="../admin/admin.php?act=edituser&edit=<?= $value['id']?>">Sửa <i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>