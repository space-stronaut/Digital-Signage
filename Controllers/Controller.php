<?php

class Database{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "digital_bkad";

    public function __construct()
    {
        mysqli_connect($this->host,$this->username,$this->password,$this->db);
    }
}