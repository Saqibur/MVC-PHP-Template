<?php
class DataAccess
{

    /**
     * TODO: Do the things you planned for SQLite.
     * Right now I only care about MySQL
     */

    public static $connection;
    public static $servername = "localhost";
    public static $username = "username";
    public static $password = "password";
    public static $name = "";


    // public function DataAccess()
    // {
    //     try {
    //         $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    //         // set the PDO error mode to exception
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         echo "Connected successfully";
    //     } catch (PDOException $e) {
    //         echo "Connection failed: " . $e->getMessage();
    //     }
    // }
}
