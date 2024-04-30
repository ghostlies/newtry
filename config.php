<?php

# Has to be set before session start
ini_set('session.use_only_cookies', 1); # Setting it to true
ini_set('session.use_strict_mode', 1); # Mandatory line for sessions

session_set_cookie_params([ # Setting cookies for session
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

# Session start
session_start();

# Regenerating a session depending on a time interval
if (isset($_SESSION['user_id'])) {
    if (!isset($_SESSION['last_regeneration'])) {

        regenerate_session_id_loggedin();
    } else {

        $interval = 60 * 30;
        if (time() - $_SESSION['last_regeneration'] >= $interval) {

            regenerate_session_id_loggedin();
        }
    }
} else {
    # Generate session id better and again and again over time so hackers aint got ya ass
    if (!isset($_SESSION['last_regeneration'])) {

        regenerate_session_id();
    } else {

        $interval = 60 * 30;
        if (time() - $_SESSION['last_regeneration'] >= $interval) {

            regenerate_session_id();
        }
    }
}

# Creating a session id specialized for the different users logged in
function regenerate_session_id_loggedin() {
    session_regenerate_id(true);

    $userId = $_SESSION['user_id'];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId);

    $_SESSION['last_regeneration'] = time();
}
# Regenerating the session based off of a time interval
function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}
