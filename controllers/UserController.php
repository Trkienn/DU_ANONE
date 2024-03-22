<?php

function userDetail($id){
 $users = getUserByID($id);
 require_once PATH_VIEW. 'users/detail.php';
}

//Luồng MVC 1: vào index
//-> được điều hướng đến hàm xử lý logic trong controller tương ứng 
//->hàm sẽ trả view luôn vì không có tương tác với model

//Luồng MVC 2: vào index
//->được điều hướng đến hàm xử lý logic trong controller tương ứng 
//_> hàm sẽ tương tác vơi  hàm xử lý dữ liệu trong model
// dữ liệu này sẽ được trả về view
