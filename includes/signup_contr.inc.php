<?php
declare(strict_types= 1); #

// ? Control takes care of information

/* Are any of the inputs empty? */
function is_input_empty (string $username, string $pwd, string $email) # Type declaration
{ 
    if (empty($username) || empty($pwd) || empty($email)) {
        return true; # At least one is empty
    } else {
        return false; # None of them are empty
    }
}

/* Is the email invalid? */
function is_email_invalid (string $email) # Type declaration
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; # Not valid email
    } else {
        return false; # Valid email
    }
}

/* Is the username taken? */
function is_username_taken (object $pdo, string $username) # Type declaration
{
    if (get_username ($pdo, $username)) {
        return true; # Error if username is taken
    } else {
        return false; # Not an error if username is not taken
    }
}

/* Is the email registered? */
function is_email_registered (object $pdo, string $email) # Type declaration
{
    if (get_email ($pdo, $email)) {
        return true; # Error if email is registered
    } else {
        return false; # Not an error if email is not registered
    }
}

/* Create user */
function create_user (object $pdo, string $username, string $pwd, string $email) # Type declaration
{
    set_user($pdo, $username, $pwd, $email);
}
