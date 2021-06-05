<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../Public/css/tailwind.css">
</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Login
      </h2>
    </div>
    <form class="mt-8 space-y-6" action="auth-proses.php?aksi=login" method="POST">
      <div class="rounded-md shadow-sm -space-y-px">
      <?php 

                if (isset($_GET['pesan'])) {

      ?>
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
          <strong class="font-bold">Oops !</strong>
          <span class="block sm:inline">
            <?php 
            
            if($_GET['pesan'] == 'gagal'){
              echo "Username atau Password Salah";
            }else if($_GET['pesan'] == 'belum_login'){
              echo "Kamu Belum Login";
            }else if($_GET['pesan'] == 'berhasil'){
              echo "Akun telah di-Registrasi,Silakan Login Kembali";
            }

            ?>
          </span>
        </div>
        <?php
                }
        ?>
        <div>
          <label for="username-address" class="sr-only">Username</label>
          <input id="username-address" name="username" type="username" autocomplete="username" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" maxlength="12" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div>
        <input name="submit" type="submit" class="cursor-pointer group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" value="Submit">
        </input>
      </div>
    </form>
  </div>
</div>
</body>
</html>