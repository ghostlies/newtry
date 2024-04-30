<?php
declare(strict_types= 1); #

// ? Model is querying the database

/* Username */
function get_username (object $pdo, string $username) # Type declaration
{
    $query = 'SELECT username FROM users WHERE username = :username;';

    $stmt = $pdo->prepare($query); # Creating a prepared statement

    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

/* E-mail */
function get_email (object $pdo, string $email) # Type declaration
{
    $query = 'SELECT email FROM users WHERE email = :email;';

    $stmt = $pdo->prepare($query); # Creating a prepared statement

    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user ($pdo, $username, $pwd, $email) # Type declaration
{
    $query = 'INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);';

    $stmt = $pdo->prepare($query); # Creating a prepared statement

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':pwd', $hashedPwd);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
}
