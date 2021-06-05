<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../Auth/login.php?pesan=belum_login");
	}
	?>
    <h1>Selamat Datang <?php  echo $_SESSION['username']  ?></h1>

    <a href="../Auth/auth-proses.php?aksi=logout">Logout</a>
</body>
</html>