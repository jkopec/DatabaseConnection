<?php
/**
 * Created by PhpStorm.
 * User: jakubkopec
 * Date: 20.05.16
 * Time: 22:11
 */

include ("config.php");

class MySQLi_Procedural_Type extends Config
{
    private static $db;
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(self::host, self::user, self::password, self::database);
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }

    public static function getInstance(){
        if(!self::$db){
            self::$db = new MySQLi_Procedural_Type();
        }
        return self::$db;
    }

    public function checkConnection()
    {
        if(!$this->connection)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connection successful!" . "<br />";
    }
    
    public function getConnection()
    {
        return $this->connection;
    }
}