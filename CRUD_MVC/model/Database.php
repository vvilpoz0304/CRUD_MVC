<?php

class Database
{
    private static $dbName = 'if0_37391497_mvc_books';
    private static $dbHost = 'sql206.infinityfree.com';
    private static $dbUsername = 'if0_37391497';
    private static $dbUserPassword = 'pNLinodmVd3pV';

    private static $conn = null;

    public function __construct()
    {
        // die('Init function is not allowed');
    }

    public static function connect()
    {
        // One connection through whole application
        if (null == self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName.";port=3306", self::$dbUsername, self::$dbUserPassword);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function disconnect()
    {
        self::$conn = null;
    }
}

?>
