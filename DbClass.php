<?php

/*
 * Duarte Cancela
 * 13683
 * 26/10/2021
 */

class DbClass {

    public function connect($serverName, $username, $password, $database){
        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully to MySql using $database database through PDO interface";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

