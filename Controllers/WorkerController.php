<?php

include "Controller.php";

class Worker extends Database{
    
    
    public function index()
    {
        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM workers");

        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }
}