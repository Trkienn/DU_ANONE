<div>
    <div>
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
                        <th>ngày mua</th>
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
                        <th>ngày mua</th>
                        <th><? $orders ?></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <?php if ($user['id'] == $order['user_id']) : ?>
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
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>
</div>