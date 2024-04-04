<?php
// require tất cả các file commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';
// lay du lieu global setting
$settings = settings();
//require tất cả các file trong controler và models
//.....
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);


// điều hướng   
$act = $_GET['act'] ?? '/';
//biến này cần khai báo
$arrRouteNeedAth = [

    'cart-add',
    'cart-list',
    'cart-inc',
    'cart-dec',
    'cart-del'

];
match ($act) {
    '/' => homeindex(),


    'cart-add' => cartAdd($_Get['productID']),
    'cart-list' => cartList(),
    'cart-inc' => cartInc($_Get['productID']),
    'cart-dec' => cartDec($_Get['productID']),
    'cart-del' => cartDel($_Get['productID']),






    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),
    //
    // 'user-detail' => userListAll(),
};

require_once './commons/disconnect-db.php';
