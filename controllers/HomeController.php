<?php

function index(){
    $users = getAllUser();
 
    require_once PATH_VIEW . 'home.php';
}

// luồng MVC 1: vào index 
// -> được điều hướng  đến hàm sử lý  logic trong controller tương ứng 
// -> hàm sẽ trả về view luôn vì không có tương tác với model
// luồng MVC 2: vào index 
// -> được điều hướng  đến hàm xử lý logic trong controller tương ứng
// -> hàm sẽ được tương tác với hàm xử lý dữ liệu trong model
// -> dữ liệu này sẽ được trả về view
?>
