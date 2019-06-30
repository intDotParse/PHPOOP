<?php
require("../database/database.php");
class UserModel{
    private $db;
    public $name;
    public $email;
    public $username;
    public $password;
    private $tablename = "tbluser";
    public function __construct(){
        $this->db = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name,email,username,password) VALUES('$this->name','$this->email','$this->username','$this->password')";
        return $this->db->execute($sql)->affected_rows;
    }
    public function update($id){
        $sql = "UPDATE $this->tablename SET name='$this->name', email='$this->email', username='$this->username', password='$this->password' WHERE id=$id";
        return $this->db->execute($sql);
    }
    public function getAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM $this->tablename WHERE id=$id";
        return $this->db->execute($sql);
    }
    public function __destruct(){
        unset($this->db);
    }

}
//test
$user = new UserModel();
$user->name = "Art";
$user->email = "a@yahoo.com";
$user->username = "artuser";
$user->password  = "test123";
echo $user->insert();
?>