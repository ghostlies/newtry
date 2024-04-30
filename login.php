<?php
error_reporting(E_ALL); // Error checking
ini_set('display_errors', 1);

require_once 'config.php'; // Reference to file
require_once 'includes/login_view.inc.php'; // Reference to file
?>
<style>
<?php
include 'css/login.css'; // Reference to file
?>
</style>

<!DOCTYPE html>
<html lang="en"> <!--Language is english-->
<head> <!--Head-->
    <meta charset="UTF-8"> <!--Allows æøå-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Viewport-->
    <title>Login</title> <!--Window title-->
</head>
<body> <!--Body-->
    <div id="login-container">
        <h3>Login</h3>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" id="submit">Submit</button>
        </form>
        <p class="topPgr">Before you're able to search, learn secrets and look at forbidden data <i>*wink wink*</i>, you have to login.</p>
        <p>Don't have an account? Click <a href="index.php" class="lPgr">here</a></p>
        <?php
        check_login_errors(); // Calling function
        ?>
    </div>
</body>
</html>
<!--End code-->
