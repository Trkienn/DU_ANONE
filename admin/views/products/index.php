<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>

        <a href="<?= BASE_URL_ADMIN ?>?act=product-create" class="btn btn-primary">Create</a>
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
                            <th>ID</th>
                            <th>Danh mục sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Giới thiệu</th>
                            <th>Giá bán thường</th>
                            <th>Giá khi giảm giá</th>
                            <th>Mô tả</th>
                            <th>đánh giá</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Danh mục sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Giới thiệu</th>
                            <th>Giá bán thường</th>
                            <th>Giá khi giảm giá</th>
                            <th>Mô tả</th>
                            <th>đánh giá</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th><?$products?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= $product['category_id'] ?></td>
                                <td><?= $product['name'] ?></td>

                                <td>
                                    <img src="<?= BASE_URL . $product['img_thumbnail'] ?>" alt="" width="100px">
                                </td>
                                <td><?= $product['overview'] ?></td>
                                <td><?= $product['price_regular'] ?></td>
                                <td><?= $product['price_sale'] ?></td>
                                <td><?= $product['content'] ?></td>
                                <td><?= $product['rate'] ?></td>
                                <td><?= $product['ceated_at'] ?></td>
                                <td><?= $product['update_at'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-detail&id=<?= $product['id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-update&id=<?= $product['id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-delete&id=<?= $product['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>