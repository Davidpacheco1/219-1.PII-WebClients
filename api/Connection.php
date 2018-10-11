<?php
class Connection{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    public $conn;

    public function Connection(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    }
}
?>