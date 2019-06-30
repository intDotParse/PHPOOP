<?php
class Database{
    private $mysqli;
    private $servername = "localhost";
    private $username= "root";
    private $password = "";
    private $dbname = "PHPOOP";
    public function __construct(){
        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
    public function execute($sql){
        $this->mysqli->query($sql);
        return $this-mysqli;
    }
}
?>