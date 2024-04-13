<div class="container-fluid">
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Update
            </h6>
        </div>
        <div class="card-body">

            <?php if (isset($_SESSION['errors'])) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>



            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3 mt-3">
                            <label for="user_id" class="form-label">id Người Mua:</label>
                            <input type="text" class="form-control" id="user_id" value="<?= $order['user_id'] ?>" placeholder="user_id" name="user_id">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Tên khách hàng:</label>
                            <input type="text" class="form-control" id="user_name" value="<?= $order['user_name'] ?>" placeholder="user_name" name="user_name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="user_email" value="<?= $order['user_email'] ?>" placeholder="user_email" name="user_email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_phone" class="form-label">SĐT:</label>
                            <input type="text" class="form-control" id="user_phone" value="<?= $order['user_phone'] ?>" placeholder="user_phone" name="user_phone">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_address" class="form-label">Địa chỉ nhận hàng:</label>
                            <input type="text" class="form-control" id="user_address" value="<?= $order['user_address'] ?>" placeholder="user_address" name="user_address">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="total_bill" class="form-label">Tổng Tiền:</label>
                            <input type="text" class="form-control" id="total_bill" value="<?= $order['total_bill'] ?>" placeholder="total_bill" name="total_bill">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="status_delivery" class="form-label">Trang Thái Giao Hàng:</label>
                            <select class="form-control" id="status_delivery" name="status_delivery">
                                
                                    <option value="0">chờ xác nhận</option>
                                    <option value="1">chờ lấy hàng</option>
                                    <option value="2">chờ giao hàng </option>
                                    <option value="3">đã giao </option>
                                    <option value="-1">đã hủy</option>
                                
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="status_payment" class="form-label">Tình trạng thanh toán:</label>
                            <select class="form-control" id="status_payment" name="status_payment">
                                
                                    <option value="0">Trạng thái thanh toán</option>
                                    <option value="1"> chưa thanh toán</option>
                                    <option value="-1"> đã thanh toán</option>
                                    <option value="2">đơn hàng đã hủy</option>
                                
                            </select>
                        </div>

                        <!-- <div class="mb-3 mt-3">
                            <label for="rate" class="form-label">rate:</label>
                            <input type="text" class="form-control" id="rate" value="<?= $order['rate'] ?>"  placeholder="Enter rate" name="rate">
                        </div> -->

                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=posts" class="btn btn-danger">Back to list</a>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['data'])) {
    unset($_SESSION['data']);
} ?>