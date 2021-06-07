<?php

include "../../Controllers/Controller.php";

class Auth extends Database{

    public function register($username,$email,$password){

        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM admins where email='$email'");

        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            header('location:register.php?pesan=gagal');
        }else{
            $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"INSERT INTO admins VALUES ('','$username','$email','$password')");
        
            header('location:login.php?status=berhasil');
        }
    }
    public function login($username,$password){
        session_start();
        $query = mysqli_query(mysqli_connect($this->host,$this->username,$this->password,$this->db),"SELECT * FROM admins where username='$username' and password='$password'");

        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
	        $_SESSION['status'] = "login";
            header("location: ../Admin/index.php");
        } else {
            header("location: login.php?pesan=gagal");
        }
        
    }
    public function logout(){
        session_start();

        session_destroy();

        header('location:../Auth/login.php');
    }
}