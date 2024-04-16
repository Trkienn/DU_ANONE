<?php 

function ndauthenShowFormLogin() {
    if ($_POST) {
        ndauthenLogin();
    }

    require_once PATH_VIEW . 'dangnhap.php';
}

function ndauthenLogin() {
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);

    if (empty($user)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL . '?act=logins');
        exit();
    }

    $_SESSION['user'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}

function ndauthenLogout() {
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


function profile($id)
{
    $view = 'profile';

    $usersa = showOne('users', $id);

    require_once PATH_VIEW . 'layouts/master.php';
}