<?php

include "../../Controllers/AuthController.php";


$cn = new Auth();

    if($_GET['aksi'] == 'register'){
        $cn->register($_POST['username'],$_POST['email'],$_POST['password']);

        header('location:login.php?status=berhasil');
    }
    elseif ($_GET['aksi'] == 'login') {
        $cn->login($_POST['username'],$_POST['password']);

        header('location:../Admin/index.php');
    }
    elseif ($_GET['aksi'] == 'logout') {
        $cn->logout();

        header('location:./login.php?status=logout');
    }