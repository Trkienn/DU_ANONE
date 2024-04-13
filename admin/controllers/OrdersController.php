<?php

function orderListAll()
{
    $title      = 'Danh sách đơn hàng';
    $view       = 'orders/index';
    $script     = 'datatable';
    $script2    = 'orders/script';
    $style      = 'datatable';

    $orders = listAll('orders');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function orderShowOne($id)
{
    $order = showOne('orders', $id);

    if (empty($order)) {
        e404();
    }
    
    $title  = 'Chi tiết đơn hàng: ' . $order['p_title'];
    $view   = 'orders/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}


function orderUpdate($id)
{
    $order = showOne('orders', $id);

    if (empty($order)) {
        e404();
    }


    $view       = 'orders/update';

    $categories     = listAll('categories');

    if (!empty($_POST)) {
        $data = [
            'user_id'   => $_POST['user_id']  ?? $order['user_id'],
            'user_name'     => $_POST['user_name']   ?? $order['user_name'],
            'user_email' => $_FILES['user_email'] ?? $order['user_email'],
            'user_phone'         => $_POST['user_phone']          ?? $order['user_phone'],
            'user_address'       => $_POST['user_address']        ?? $order['user_address'],
            'total_bill'       => $_POST['total_bill']        ?? $order['total_bill'],
            'status_delivery'   => $_POST['status_delivery']    ?? $order['status_delivery'],
            'status_payment'        => $_POST['status_payment']         ?? $order['status_payment']
        ];

        validateorderUpdate($id, $data);

        update('orders', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=order-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateorderUpdate($id, $data)
{
    $errors = [];

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;

        header('Location: ' . BASE_URL_ADMIN . '?act=order-update&id=' . $id);
        exit();
    }
}


function orderDelete($id)
{
    $order = showOne('orders', $id);

    if (empty($order)) {
        e404();
    }

    try {
        $GLOBALS['conn']->beginTransaction();

        delete2('orders', $id);

        $GLOBALS['conn']->commit();
    } catch (Exception $e) {
        $GLOBALS['conn']->rollBack();

        debug($e);
    }

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=orders');
    exit();
}
