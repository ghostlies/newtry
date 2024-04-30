<?php

function get_user($pdo, $username) {
    $query = 'SELECT * FROM users WHERE username = :username';
    $stmt = $pdo->prepare($query);
    $stmt->execute(['username' => $username]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
