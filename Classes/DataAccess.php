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

    /**
     * Uncommmend stff below for SQLite3.
     */
    
    const PATH_TO_SQLITE_FILE = "../default.db";
    public function Connection()
    {
        /**
         * If the database does not exist, it is created.
         */

        if (self::$connection == null) {
            self::$connection = new PDO("sqlite:" . self::PATH_TO_SQLITE_FILE);
        }
        return self::$connection;
    }
}
