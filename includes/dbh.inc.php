<?php

# Creating a class
class Database {
    private $host;
    private $dbname;
    private $dbusername;
    private $dbpassword;

    public function connect() { # Creating a public function

        # Setting the different necesssities and variables
        $this->host = "localhost";
        $this->dbname = "myfirstdatabase";
        $this->dbusername = "root";
        $this->dbpassword = "";

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname; # Data source name
            $pdo = new PDO($dsn, $this->dbusername, $this->dbpassword); # Representing a connection
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # Checking and handling errors effectively
            return $pdo;
            // echo "Connected successfully"; 
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage(); # Error and error message
        }
    }
}
