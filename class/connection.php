<?php

class Connection {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "reservation";

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
        $this->servername,
        $this->username,
        $this->password,
        $this->dbname
        );

        $this->conn->set_charset("utf8");
    }
    public function checkConnection()
    {
        if ($this->conn->connect_error) 
        {
            return ("Connection failed: " . $this->conn->connect_error);
        }
        else
        {
            return "all is good";
        }
    }
}

?>