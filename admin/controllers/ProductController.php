<?php

function productListAll()
{
    $title      = 'Danh sách sản phẩm';
    $view       = 'products/index';
    $script     = 'datatable';
    $script2    = 'products/script';
    $style      = 'datatable';

    $products = listAll('products');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productShowOne($id)
{
    $product = showOneForProduct($id);

    if (empty($product)) {
        e404();
    }

    $title  = 'Chi tiết product: ' . $product['p_title'];
    $view   = 'products/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productCreate()
{
    $title      = 'Thêm Sản Phẩm';
    $view       = 'products/create';

    $categories = listAll('categories');

    if (!empty($_POST)) {

        $data = [
            'category_id'   => $_POST['category_id']    ?? null,
            'name'     => $_POST['name']      ?? null,
            'img_thumbnail' => $_FILES['img_thumbnail'] ?? null,
            'overview'         => $_POST['overview']          ?? null,
            'price_regular'       => $_POST['price_regular']        ?? null,
            'price_sale'       => $_POST['price_sale']        ?? null,
            'content'   => $_POST['content']    ?? null,
            'rate'        => $_POST['rate']         ?? null,
        ];

        validateProductCreate($data);

        $img_thumbnail = $data['img_thumbnail'];
        if (!empty($img_thumbnail) && $img_thumbnail['size'] > 0) {
            $data['img_thumbnail'] = upload_file($img_thumbnail, 'uploads/products/');
        }


        insert('products', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=products');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateProductCreate($data)
{
    $errors = [];

    if (empty($data['img_thumbnail'])) {
        $errors[] = 'Trường img_thumbnail là bắt buộc';
    } elseif (is_array($data['img_thumbnail'])) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['img_thumbnail']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường img_thumbnail có dung lượng nhỏ hơn 2M';
        } else if (!in_array($data['img_thumbnail']['type'], $typeImage)) {
            $errors[] = 'Trường img_thumbnail chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=product-create');
        exit();
    }
}

function productUpdate($id)
{
    $product = showOne('products', $id);

    if (empty($product)) {
        e404();
    }


    $view       = 'products/update';

    $categories     = listAll('categories');

    if (!empty($_POST)) {
        $data = [
            'category_id'   => $_POST['category_id']  ?? $product['name'],
            'name'     => $_POST['name']   ?? $product['name'],
            'img_thumbnail' => $_FILES['img_thumbnail'] ?? $product['img_thumbnail'],
            'overview'         => $_POST['overview']          ?? $product['overview'],
            'price_regular'       => $_POST['price_regular']        ?? $product['price_regular'],
            'price_sale'       => $_POST['price_sale']        ?? $product['price_sale'],
            'content'   => $_POST['content']    ?? $product['content'],
            'rate'        => $_POST['rate']         ?? $product['rate']
        ];

        validateProductUpdate($id, $data);

        $img_thumbnail = $data['img_thumbnail'];
        if (!empty($img_thumbnail) && $img_thumbnail['size'] > 0) {
            $data['img_thumbnail'] = upload_file($img_thumbnail, 'uploads/products/');
        }

        update('products', $id, $data);

        if (
            !empty($img_thumbnail)
            && !empty($product['img_thumbnail'])
            && !empty($data['img_thumbnail'])
            && file_exists(PATH_UPLOAD . $product['img_thumbnail'])
        ) {
            unlink(PATH_UPLOAD . $product['img_thumbnail']);
        } {
            unlink(PATH_UPLOAD . $product['img_cover']);
        }

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=product-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateProductUpdate($id, $data)
{
    $errors = [];

    if (empty($data['img_thumbnail'])) {
        $errors[] = 'Trường img_thumbnail là bắt buộc';
    } elseif (is_array($data['img_thumbnail'])) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['img_thumbnail']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường img_thumbnail có dung lượng nhỏ hơn 2M';
        } else if (!in_array($data['img_thumbnail']['type'], $typeImage)) {
            $errors[] = 'Trường img_thumbnail chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;

        header('Location: ' . BASE_URL_ADMIN . '?act=product-update&id=' . $id);
        exit();
    }
}

function productDelete($id)
{
    $product = showOne('products', $id);

    if (empty($product)) {
        e404();
    }

    try {
        $GLOBALS['conn']->beginTransaction();

        delete2('products', $id);

        $GLOBALS['conn']->commit();
    } catch (Exception $e) {
        $GLOBALS['conn']->rollBack();

        debug($e);
    }

    if (
        !empty($product['img_thumnail'])
        && file_exists(PATH_UPLOAD . $product['img_thumnail'])
    ) {
        unlink(PATH_UPLOAD . $product['img_thumnail']);
    }

    if (
        !empty($product['img_cover'])
        && file_exists(PATH_UPLOAD . $product['img_cover'])
    ) {
        unlink(PATH_UPLOAD . $product['img_cover']);
    }

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=products');
    exit();
}
