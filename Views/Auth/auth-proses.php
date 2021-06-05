<?php

include "../../Controllers/AuthController.php";


$cn = new Auth();

    if($_GET['aksi'] == 'register'){
        $cn->register($_POST['username'],$_POST['email'],$_POST['password']);
    }
    elseif ($_GET['aksi'] == 'login') {
        $cn->login($_POST['username'],$_POST['password']);
    }
    elseif ($_GET['aksi'] == 'logout') {
        $cn->logout();
    }