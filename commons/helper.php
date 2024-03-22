<?php
// khai bao cac ham dung Global
if(!function_exists('require_file')){
    function require_file($pathFolder){ // $pathFoler là đường dẫn thư mục     
        $files = array_diff(scandir($pathFolder),['.','..']);

        foreach($files as $file ){
            require_once $pathFolder .$file;
        }
    }
}

if(!function_exists('debug')){
    function debug($data){ 
        echo "<pre>";

        print_r($data);

        die;
    }
}