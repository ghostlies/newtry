<?php

$host = "localhost"; # Setting host as localhost
$dbname = "myfirstdatabase"; # Setting database name as myfirstdatabase
$dbusername = "root"; # Setting username as root
$dbpassword = ""; # Setting pwd as empty

$dsn = "mysql:host=" . $host . ";dbname=" . $dbname; # Data source name as a combination of all of the above

try {
  $pdo = new PDO($dsn, $dbusername, $dbpassword); # Representing connection with a database
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # Catching and handling errors effectively
} catch (PDOException $e) {
    die("Connection failed: ". $e->getMessage()); # Showing errors that might happen
}
