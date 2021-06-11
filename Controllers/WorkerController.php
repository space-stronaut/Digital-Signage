<?php

include "Controller.php";

class Worker extends Database{
    public function index()
    {
        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM workers ORDER BY golongan desc");

        return $query;
    }

    public function create($nama,$nip,$golongan,$jabatan,$bidang,$foto)
    {
        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM workers where nip='$nip'");

        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            header("location:worker.php?status=false");
        }else{
            $rand = rand();
            $filename = $foto['name'];
            $ukuran = $foto['size'];
            if ($ukuran > 0) {
                $xx = $rand.'_'.$filename;
                move_uploaded_file($foto['tmp_name'], '../../../Public/img/'.$rand.'_'.$filename);
                $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"INSERT INTO workers VALUES ('','$nip','$nama','$bidang','$jabatan','$golongan','$xx')");

                header("location:worker.php?status=true");
            }else{
                $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"INSERT INTO workers VALUES ('','$nip','$nama','$bidang','$jabatan','$golongan','')");

                header("location:worker.php?status=true");
            }
        }
    }
    public function delete($id)
    {
        mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"DELETE FROM workers WHERE id='$id'");
    
        header('location:worker.php?status=delete');
    }
    public function update($id,$nama,$nip,$golongan,$jabatan,$bidang)
    {
        mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"UPDATE workers SET nip='$nip', nama='$nama', bidang='$bidang', jabatan='$jabatan', golongan='$golongan' WHERE id='$id'");

        header("location:worker.php?status=updated");
    }
    public function search($nama)
    {
        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM workers WHERE nama LIKE '%".$nama."%' ");

        return $query;
    }
}