<div class="container-fluid">
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Create
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
                            <label for="name" class="form-label">name:</label>
                            <input type="text" class="form-control" id="name" value="<?= $product['name'] ?>" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="content" class="form-label">content:</label>
                            <textarea class="form-control" id="content" rows="7" name="content"><?= $product['content'] ?></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="img_thumbnail" class="form-label">img_thumbnail:</label>
                            <input type="file" class="form-control" id="img_thumbnail" name="img_thumbnail">
                            <img src="<?= BASE_URL . $product['img_thumbnail'] ?>" alt="" width="100px">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="overview" class="form-label">overview:</label>
                            <input type="text" class="form-control" id="overview" value="<?= $product['name'] ?>" placeholder="Enter overview" name="overview">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="category_id" class="form-label">Category:</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price_regular" class="form-label">price_regular:</label>
                            <input type="text" class="form-control" id="price_regular" value="<?= $product['price_regular'] ?>"  placeholder="Enter price_regular" name="price_regular">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="price_sale" class="form-label">price_sale:</label>
                            <input type="text" class="form-control" id="price_sale" value="<?= $product['price_sale'] ?>"  placeholder="Enter price_sale" name="price_sale">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="rate" class="form-label">rate:</label>
                            <input type="text" class="form-control" id="rate" value="<?= $product['rate'] ?>"  placeholder="Enter rate" name="rate">
                        </div>

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