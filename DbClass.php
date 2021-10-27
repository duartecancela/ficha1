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
    public function __construct()
    {

    }

    public function connect(){
        try {
            $conn = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully to MySql using $this->database database through PDO interface" . "<br>";

            return $conn;

        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $conn = null;
    }

    public function disconnect(){

    }

}

