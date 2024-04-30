<?php

function validate_login($username, $pwd, $pdo) {
    $errors = [];
    if (empty($username) || empty($pwd)) {
        $errors['empty_input'] = 'Please fill in all fields!';
    }
    return $errors;
}

function is_password_correct($pwd, $hashedPwd) {
    return password_verify($pwd, $hashedPwd);
}

