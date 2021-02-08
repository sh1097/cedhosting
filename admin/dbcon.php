<?php
class Dbconn{
    public $conn;
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public function __construct(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="Cedhosting";
    }
    public function createConnection(){
        $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname="cedhosting");
        if ($this->conn){
           
            return $this->conn;
        }
        else {
            echo "connection error";
        }
    }
}
?>