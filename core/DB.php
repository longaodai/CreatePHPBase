<?php

class Database{
    
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'longstudy';
    public $db;

    public function __construct(){
        try {
            $this->db = new PDO("mysql:host=$this->servername;dbname=$this->databasename", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } 
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($sql){
        return $this->db->query($sql);
    }

    public function execute($sql){
        return $this->db->exec($sql);
    }
}