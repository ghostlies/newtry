<?php
error_reporting(E_ALL); // Reporting all errors if there are any
ini_set('display_errors', 1); // Displaying them

require_once 'config.php'; // Referencing to file
require_once 'includes/signup_view.inc.php'; // Referencing to file
?>
<style>
<?php
include 'css/main.css'; // Referencing to file
?>
</style>

<!DOCTYPE html>
<html lang="en"> <!--Language is english-->
<head> <!--Head-->
    <meta charset="UTF-8"> <!--Allows æøå-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Viewport-->
    <title>Signup</title> <!--Window title-->
</head>
<body> <!--Body-->
    <div id="signup-container">
        <h3>Signup</h3>
        <form action="includes/signup.inc.php" method="post">
            <?php
            signup_inputs(); // Calling function
            ?>
            <button type="submit" id="submit">Submit</button>
        </form>
        <p class="topPgr">Before you're able to search, learn secrets and look at forbidden data <i>*wink wink*</i>, you have to signup.</p>
        <p>Already have an account? Click <a href="login.php" class="lPgr">here</a></p>
        <?php
        check_signup_errors(); // Calling function
        ?>
    </div>
</body>
</html>
<!--End code-->
