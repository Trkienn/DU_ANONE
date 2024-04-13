<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables
            </h6>
        </div>
        <div class="card-body">

            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã Đơn</th>
                            <th>id người mua</th>
                            <th>tên khách hàng</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Tổng Tiền</th>
                            <th>Trang Thái Giao Hàng</th>
                            <th>Tình trạng thanh toán</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>Mã Đơn</th>
                            <th>id người mua</th>
                            <th>tên khách hàng</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Tổng Tiền</th>
                            <th>Trang Thái Giao Hàng</th>
                            <th>Tình trạng thanh toán</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th><?$orders?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $order['id'] ?></td>
                                <td><?= $order['user_id'] ?></td>
                                <td><?= $order['user_name'] ?></td>
                                <td><?= $order['user_email'] ?></td>
                                <td><?= $order['user_phone'] ?></td>
                                <td><?= $order['user_address'] ?></td>
                                <td><?= $order['total_bill'] ?></td>
                                <td><?= $order['status_delivery'] ?></td>
                                <td><?= $order['status_payment'] ?></td>
                                <td><?= $order['created_at'] ?></td>
                                <td><?= $order['updated_at'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['id'] ?>" class="btn btn-info">Xem thông tin</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>" class="btn btn-warning">Cập nhật đơn hàng</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Hủy đơn hàng</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>