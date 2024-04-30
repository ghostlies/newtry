<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'dbh_sl.inc.php';
    require_once 'login_model.inc.php';
    require_once 'login_contr.inc.php';

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    $errors = validate_login($username, $pwd, $pdo);

    if ($errors) {
        $_SESSION['errors_login'] = $errors;
        header('Location: ../login.php');
        exit();
    }

    $result = get_user($pdo, $username);

    if ($result && is_password_correct($pwd, $result['pwd'])) {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_username'] = htmlspecialchars($result['username']);
        $_SESSION['last_regeneration'] = time();
        header('Location: ../home.php?login=success');
        exit();
    } else {
        $_SESSION['errors_login'] = ['login_incorrect' => 'Incorrect login info!'];
        header('Location: ../login.php');
        exit();
    }
} else {
    header('Location: ../login.php');
    exit();
}

