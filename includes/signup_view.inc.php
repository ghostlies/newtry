<?php
declare(strict_types= 1); #

// ? View shows information inside the website

function signup_inputs ()
{
    /* So the user does not have to type their username if they get an error */
    if (isset($_SESSION['signup_data']['username']) && !isset($_SESSION['errors_signup']['username_taken'])) {
        echo '<input type="text" name="username" placeholder="Username" value="' . $_SESSION['signup_data']['username'] . '">';
    } else {
        echo '<input type="text" name="username" placeholder="Username">';
    }

    echo '<input type="password" name="pwd" placeholder="Password">';

    /* So the user does not have to type their email if they get an error */
    if (isset($_SESSION['signup_data']['email']) && !isset($_SESSION['errors_signup']['email_used']) && !isset($_SESSION['errors_signup']['invalid_email'])) {
        echo '<input type="text" name="email" placeholder="E-mail" value="' . $_SESSION['signup_data']['email'] . '">';
    } else {
        echo '<input type="text" name="email" placeholder="E-mail">';
    }
}

function check_signup_errors () 
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo '<br>';

        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error .'</p>'; # Looping out error messages
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
        echo '<br>';
        echo '<p class="form-sucess">Signup successful!</p>';
    }
}
