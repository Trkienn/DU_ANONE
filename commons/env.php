<?php

// khai báo các biến môi trường , dùng Global
define('PATH_CONTROLLER', __DIR__ .'/../controllers/');
// echo PATH_CONTROLLER;die;
define('PATH_MODEL', __DIR__ .'/../models/');
define('PATH_VIEW', __DIR__ .'/../views/');


define('PATH_CONTROLLER_ADMIN',   __DIR__ . '/../admin/controllers/');
define('PATH_MODEL_ADMIN',        __DIR__ . '/../admin/models/');
define('PATH_VIEW_ADMIN',         __DIR__ . '/../admin/views/');

define('PATH_UPLOAD',         __DIR__ . '/../');
define('BASE_URL','http://localhost/Du_ANONE/');
define('BASE_URL_ADMIN',    'http://localhost/Du_ANONE/admin/');

define('DB_HOTS',     'localhost');
define('DB_PORT',     '3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME',     'du_anone');

define('STATUS_DRAFT',      'draft');
define('STATUS_PUBLISHED',  'published');
// khai báo các hàm dùng Global