<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') { # If the REQUEST method is equal to the POST method, then it means that the user got here correctly, if not then no

    $username = $_POST['username']; # Referencing to the username input in index
    $pwd = $_POST['pwd']; # Referencing to the pwd input in index
    $email = $_POST['email']; # Referencing to the email input in index

    try {
        /* REFERENCE TO FILES */
        require_once 'dbh_sl.inc.php';
        require_once '../config.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        /* ERROR HANDLERS */
        $errors = [];

        if (is_input_empty ($username, $pwd, $email)) { # Input empty?
            $errors['empty_input'] = '!Please fill in all fields!'; # $errors[key] = 'value';
        }
        if (is_email_invalid ($email)) { # Email invalid?
            $errors['invalid_email'] = '!Please enter a valid E-mail!'; # $errors[key] = 'value';
        }
        if (is_username_taken ($pdo, $username)) { # Username taken?
            $errors['username_taken'] = '!Username is already taken!'; # $errors[key] = 'value';
        }
        if (is_email_registered ($pdo, $email)) { # Email registered?
            $errors['email_used'] = '!E-mail is already registered!'; # $errors[key] = 'value';
        }

        if ($errors) {
            $_SESSION['errors_signup'] = $errors;

            $signup_data = [
                'username'=> $username,
                'email'=> $email
            ];
            $_SESSION['signup_data'] = $signup_data;

            header('Location: ../index.php'); # Sends the user back to index.php if an error occured
            die();
        }

        create_user($pdo, $username, $pwd, $email);
        header('Location: ../login.php?signup=success');

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
} else {

    header('Location: ../index.php'); # Sends the user back to index.php if they didnt get there correctly
    die();
}
