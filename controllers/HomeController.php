<?php

function homeIndex()
{
    $view = 'home';

    $postTopView = postTopViewOnHome();
    // debug($postTopView);
    $postTop6Latest = postTop6LatestOnHome($postTopView['p_id']);
    $postTop6Latest = array_chunk($postTop6Latest, 3);
    $postTop5TrendingLatest = postTop5TrendingOnHome($postTopView['p_id']);

    $products = listAll('products');
    require_once PATH_VIEW . 'layouts/master.php';
}
function productChitiet($id)
{
    $productq = showOne('products', $id);
    $products = listAll('products');
    require_once PATH_VIEW . 'chitietsanpham.php';
}

function postall()
{
    $posts = listAll('posts');

    require_once PATH_VIEW . 'postall.php';
}

function postchitiet($id)
{
    $postsq = showOne('posts', $id);
    $posts = listAll('posts');
    require_once PATH_VIEW . 'post.php';
}
function posttintuc()
{
    $posts = listAll('posts');

    require_once PATH_VIEW . 'posttintuc.php';
}
function postlienhe()
{
    $posts = listAll('posts');

    require_once PATH_VIEW . 'postlienhe.php';
}

// luồng MVC 1: vào index 
// -> được điều hướng  đến hàm sử lý  logic trong controller tương ứng 
// -> hàm sẽ trả về view luôn vì không có tương tác với model
// luồng MVC 2: vào index 
// -> được điều hướng  đến hàm xử lý logic trong controller tương ứng
// -> hàm sẽ được tương tác với hàm xử lý dữ liệu trong model
// -> dữ liệu này sẽ được trả về view