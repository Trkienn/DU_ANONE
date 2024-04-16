<?php 

function authenShowFormLogin() {
    if (!empty($_POST)) {
        authenLogin();
    }

    require_once PATH_VIEW . 'dangnhap.php';
}

function authenLogin() {
    $user = getUserAdminByEmailAndPassword($_POST['email'], $_POST['password']);

    if (empty($user)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL . '?act=logins');
        exit();
    }

    $_SESSION['user'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}

function authenLogout() {
    if (!empty($_SESSION['user'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL . '?act=themtk');
    exit();
}

function themtkShowFormLogin()
{
    $view = 'themtk';
    if (!empty($_POST)) {
        
        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
            "password" => $_POST['password'] ?? null,
            "type" => $_POST['type'] ?? null,
        ];

        insert('users', $data);

        header('Location: ' . BASE_URL);
        exit();
    }

    require_once PATH_VIEW . 'layouts/master.php';
}