<?php


    include "../../../Controllers/WorkerController.php";

    $wr = new Worker();


	if(isset($_GET['aksi'])){
			if ($_GET['aksi'] == 'buat') {
				$wr->create($_POST['nama'],$_POST['nip'],$_POST['golongan'],$_POST['jabatan'],$_POST['bidang'],$_FILES['foto']);
			}else if ($_GET['aksi'] == 'hapus') {
				$wr->delete($_POST['id']);
			}else if ($_GET['aksi'] == 'cari'){
				$wr->search($_POST['cari']);
				$cari = $_POST['cari'];
				header("location:worker.php?hasil=$cari");
			}
	}else{
		header("location:worker.php");
	}
