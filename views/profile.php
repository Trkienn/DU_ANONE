<div>
    <h1 style="text-align: center;">PROFILE -> HỒ SƠ -> NGƯỜI DÙNG</h1>
    <div style="display: flex; justify-content: center; align-items: center;">
        <div style="width: 400px;">
            <p>Tên người dùng: <?= $usersa['name'] ?></p>
            <div style="border: 1px solid; text-align: center;">
                <a href="<?= BASE_URL ?>?act=logoutd">Đăng Xuất</a>
            </div>
            <div style="border: 1px solid; text-align: center; margin-top: 20px;">
                <a href="<?= BASE_URL ?>?act=themtk">Thêm tài khoản</a>
            </div>
            <?php if($usersa['type'] == 1) : ?>
            <div style="border: 1px solid; text-align: center; margin-top: 20px;">
                <a  href="<?= BASE_URL_ADMIN ?>">vào trang admin</a>
            </div>
            <?php endif ?>
            <div style="border: 1px solid; text-align: center; margin-top: 20px;">
                <a href="<?= BASE_URL ?>?act=donhang_damua&id=<?=  $usersa['id']  ?>">Lịch sử mua hàng</a>
            </div>
        </div>
    </div>
</div>