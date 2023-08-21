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
                        <a href="../admin/admin.php?act=qluser&xoauser=<?= $value['id']?>">Xóa</a>
                        <a href="../admin/admin.php?act=edituser&edit=<?= $value['id']?>">Sửa</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>