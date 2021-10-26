<?php

/*
 * Duarte Cancela
 * 13683
 * 26/10/2021
 */

class DbClass {
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $database = "school";

    /**
     * @param string $serverName
     * @param string $userName
     * @param string $password
     * @param string $database
     */
    public function __construct($serverName, $userName, $password, $database)
    {
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect($serverName, $username, $password, $database){
        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

