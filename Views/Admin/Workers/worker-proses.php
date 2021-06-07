<?php


    include "../../../Controllers/WorkerController.php";

    $wr = new Worker();

    if ($_GET['aksi'] == 'buat') {
        $wr->create($_POST['nama'],$_POST['nip'],$_POST['golongan'],$_POST['jabatan'],$_POST['bidang']);
    }else if ($_GET['aksi'] == 'hapus') {
        $wr->delete($_POST['id']);
    }