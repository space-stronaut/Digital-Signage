<?php

include "Controller.php";

class Worker extends Database{
    
    
    public function index()
    {
        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM workers ORDER BY golongan desc");

        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }

    public function create($nama,$nip,$golongan,$jabatan,$bidang){
        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM workers WHERE nip='$nip'");

        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            header("location:worker.php?status=gagal");
        } else {
            mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"INSERT INTO workers VALUES ('','$nip','$nama','$bidang','$jabatan','$golongan')");

            header("location:worker.php?status=berhasil");
        }
        
    }
    public function delete($id){
        mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"DELETE FROM workers WHERE id='$id'");
    
        header('location:worker.php');
    }
}