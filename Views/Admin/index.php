<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | <?php echo  $_SESSION['username']?></title>
    <link rel="stylesheet" href="../../Public/css/tailwind.css">
</head>
<body>
<?php 
	if($_SESSION['status']!="login"){
		header("location:../Auth/login.php?pesan=belum_login");
	}
?>
    <h1>Selamat Datang <?php  echo $_SESSION['username']  ?></h1>

    <a href="../Auth/auth-proses.php?aksi=logout" class="text-blue-500 hover:text-blue-700 focus:text-blue-900">Logout</a>
</body>
</html>