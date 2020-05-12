<?php

    class DataAccess {
        public function DataBaseConnection() {
            /**
             *  Retrives a connection object to the database.
             *  Only works with MySQL.
             *  @return $conn -> which is a connection to the db and used to execute statements.
             *  Remember to close the connection everytime.
             */

            $dbServerName = "localhost";
            $dbUserName = "root";
            $dbPassword = "123";
            $dbName = "gakkoudb";
        
            $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
        
            if (mysqli_connect_errno()) {
                echo "Error: ". mysqli_connect_error();
            }

            return $conn;
        }
    }
    
?>
