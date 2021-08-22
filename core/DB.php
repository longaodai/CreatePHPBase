<?php
namespace Core;

class Database{
    
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'longstudy';
    private static $db;

    public function __construct(){
        try {
            if(empty(self::$db)){
                self::$db = new \PDO("mysql:host=$this->servername;dbname=$this->databasename", $this->username, $this->password);
                self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }
            return self::$db;
            // echo "Connected successfully";
        } 
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($sql){
        return self::$db->query($sql);
    }

    public function execute($sql){
        return self::$db->exec($sql);
    }
}