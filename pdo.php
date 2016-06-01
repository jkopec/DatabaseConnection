<?php
/**
 * Created by PhpStorm.
 * User: jakubkopec
 * Date: 20.05.16
 * Time: 22:11
 */

include ("config.php");

class PDO_Type extends Config
{
    private static $db;
    private $connection;

    public function __construct()
    {
        try
        {
            $this->connection = new PDO("mysql:host=" . self::host . ";dbname=" .self::database,self::user,self::password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully!" . "<br />";
        }
        catch (PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->connection = null;
    }

    public static function getInstance()
    {
        if(!self::$db){
            self::$db = new PDO_Type();
        }
        return self::$db;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}