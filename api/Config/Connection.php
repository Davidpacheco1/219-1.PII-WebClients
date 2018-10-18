<?php
class Connection{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "develop";
    public $conn;

    public function Connection(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    }
}
?>