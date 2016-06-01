<?php
/**
 * Created by PhpStorm.
 * User: jakubkopec
 * Date: 20.05.16
 * Time: 22:11
 */

include ("config.php");

class MySQLi_OO_Type extends Config
{
    private static $db;
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli(self::host, self::user, self::password, self::database);
    }

    public function __destruct()
    {
        $this->connection->close();
    }

    public static function getInstance()
    {
        if(!self::$db){
            self::$db = new MySQLi_OO_Type();
        }
        return self::$db;
    }

    public function checkConnection()
    {
        if($this->connection->connect_error)
        {
            die("Connection failed: " . $this->connection->connect_error);
        }
        echo "Connected successfully!" . "<br />";
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

?>