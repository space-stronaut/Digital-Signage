<?php session_start();

include "../../../Controllers/WorkerController.php";  

$workers = new Worker();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | <?php echo  $_SESSION['username']?></title>
    <link rel="stylesheet" href="../../../Public/css/tailwind.css">
</head>
<body>
<?php 
	if($_SESSION['status']!="login"){
		header("location:../../Auth/login.php?pesan=belum_login");
	}
?>

<div class="container mx-auto mt-5 flex">
  <form action="worker-proses.php?aksi=cari" method="post">
    <input type="text" name="cari" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 w-50 rounded focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Cari Pegawai" required>
    <button type="submit" class="cursor-pointer group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cari</button>
  </form>
</div>


<div class="container mx-auto ">
<div class="mx-auto mt-5" style="width: 25rem;">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data" action="worker-proses.php?aksi=buat" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Nama Lengkap
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-700" name="nama" id="nip" type="text" placeholder="Nama Lengkap" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        NIP
      </label>
      <input pattern="[0-9-]{21}" maxlength="21" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:border-blue-700" id="nipinput" required  type="tel" name="nip" placeholder="NIP">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Jabatan
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:border-blue-700" id="password" type="text" name="jabatan" required placeholder="Jabatan">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Golongan
      </label>
      <select name="golongan" class="shadow appearance-none cursor-pointer border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:border-blue-700" id="" required>
        <option value="" disabled selected>Pilih Golongan</option>
        <option value="IV A">IV A</option>
        <option value="IV B">IV B</option>
        <option value="IV C">IV C</option>
        <option value="III A">III A</option>
        <option value="III B">III B</option>
        <option value="III C">III C</option>
        <option value="II A">II A</option>
        <option value="II B">II B</option>
        <option value="II C">II C</option>
      </select>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Bidang
      </label>
      <select name="bidang" class="shadow appearance-none cursor-pointer border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:border-blue-700" id="" required>
        <option value="" disabled selected>Pilih Bidang</option>
        <option value="Sekretariat">Sekretariat</option>
        <option value="Pengelolaan Barang Milik Daerah">Pengelolaan Barang Milik Daerah</option>
        <option value="Anggaran">Anggaran</option>
        <option value="Akuntansi dan pelaporan">Akuntansi dan pelaporan</option>
        <option value="Perbendaharaan">Perbendaharaan</option>
      </select>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Foto <small class="text-red-500">*optional</small>
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:border-blue-700" type="file" name="foto" >
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Submit
      </button>
    </div>
  </form>
</div>
</div>

<div class="container mx-auto">
<?php 

        if (isset($_GET['status'])) { 
            if($_GET['status'] == 'true'){
        ?>
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-5" role="alert">
            <strong class="font-bold">Edann !</strong>
              <span class="block sm:inline">
                <?php 

                  echo "Pegawai Telah Berhasil Dibuat.";

                ?>
              </span>
          </div>
        <?php 
            }elseif($_GET['status'] == 'false'){
        ?>
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-5" role="alert">
            <strong class="font-bold">Oops !</strong>
              <span class="block sm:inline">
                <?php 

                  echo "Pegawai Dengan NIP Tersebut telah terdaftar,Coba Dengan NIP lain.";

                ?>
              </span>
          </div>
        <?php 
        
            }elseif($_GET['status'] == 'delete'){
              ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-5" role="alert">
                  <strong class="font-bold">Edann !</strong>
                    <span class="block sm:inline">
                      <?php 
      
                        echo "Data Berhasil Dihapus";
      
                      ?>
                    </span>
                </div>
        <?php
            }
        }else if (isset($_GET['hasil'])) {
          if (mysqli_num_rows($workers->search($_GET['hasil'])) > 0 ) {
        ?>
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-5" role="alert">
              <span class="block sm:inline">
                <?php 

                $hasil = $_GET['hasil'];

                  echo "Hasil Pencarian Untuk : <b>$hasil</b>";

                ?>
              </span>
          </div>
        
        <?php
          }else{

        ?>
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-5" role="alert">
              <span class="block sm:inline">
                <?php 

                $hasil = $_GET['hasil'];

                  echo "Hasil Pencarian Untuk : <b>$hasil</b>, Tidak Ditemukan";

                ?>
              </span>
          </div>
        <?php

          }
        }
        ?>
<div class="flex flex-col mt-5">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200" id="myTable">
          <thead class="bg-gray-500 text-white-900">
            <tr>
              <th scope="col" class="px-6 py-3 text-white text-left text-xs font-medium uppercase tracking-wider">
                Nama
              </th>
              <th scope="col" class="px-6 py-3 text-white text-left text-xs font-medium uppercase tracking-wider">
                NIP
              </th>
              <th scope="col" class="px-6 py-3 text-white text-left text-xs font-medium uppercase tracking-wider">
                Golongan
              </th>
              <th scope="col" class="px-6 py-3 text-white text-left text-xs font-medium uppercase tracking-wider">
                Bidang
              </th>
              <th scope="col" class="px-6 py-3 text-white text-left text-xs font-medium uppercase tracking-wider">
                Foto
              </th>
              <th scope="col" class="px-6 py-3 text-white text-left text-xs font-medium uppercase tracking-wider">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          <?php 
            if (isset($_GET['hasil'])) {
                foreach($workers->search($_GET['hasil']) as $worker) {
          ?>
                <tr>
              <td class="px-6 py-4 whitespace-wrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      <?php echo $worker['nama'] ?>
                    </div>
                    <div class="text-sm text-gray-500">
                        <b>Jabatan</b> : <?php echo $worker['jabatan'] ?>
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo $worker['nip'] ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <?php echo $worker['golongan'] ?>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <?php echo $worker['bidang'] ?>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <img src="../../../Public/img/1912099607_carbon(8).png" style="max-width: 100%;">
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex">
                <a href="worker-proses.php?id=<?php echo $worker['id'] ?>" class="bg-green-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-green-900">Edit</a>
                <form action="worker-proses.php?aksi=hapus" method="post">
                    <input type="hidden" name="id" value="<?php echo $worker['id'] ?>">
                    <input type="submit" value="Hapus" class="bg-red-600 cursor-pointer text-white ml-5 px-3 py-2 rounded-md text-sm font-medium hover:bg-red-900">
                </form>
              </td>
            </tr>
            
                

          <?php
                }
              }else{
                foreach($workers->index() as $worker){

          ?>
            <tr>
              <td class="px-6 py-4 whitespace-wrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      <?php echo $worker['nama'] ?>
                    </div>
                    <div class="text-sm text-gray-500">
                        <b>Jabatan</b> : <?php echo $worker['jabatan'] ?>
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo $worker['nip'] ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <?php echo $worker['golongan'] ?>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <?php echo $worker['bidang'] ?>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <img src="../../../Public/img/<?php echo $worker['foto'] ?>" style="max-width: 100%;">
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex">
                <a href="worker-proses.php?id=<?php echo $worker['id'] ?>" class="bg-green-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-green-900">Edit</a>
                <form action="worker-proses.php?aksi=hapus" method="post">
                    <input type="hidden" name="id" value="<?php echo $worker['id'] ?>">
                    <input type="submit" value="Hapus" class="bg-red-600 cursor-pointer text-white ml-5 px-3 py-2 rounded-md text-sm font-medium hover:bg-red-900">
                </form>
              </td>
            </tr>
          <?php

                }
              }
          ?>
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

    <a href="../../Auth/auth-proses.php?aksi=logout" class="text-blue-500 hover:text-blue-700 focus:text-blue-900">Logout</a>

<script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
<script>

// $(function () {
          
//           $('#txtnumber').keydown(function (e) {
//               var key = e.charCode || e.keyCode || 0;
//               $text = $(this);
//               if ( key !== 8 && key !== 15 && key !== 17) {
//                   if ($text.val().length === 8) {
//                       $text.val($text.val() + '-');
//                   }
//                   if ($text.val().length === 15) {
//                       $text.val($text.val() + '-');
//                   }
//                   if ($text.val().length === 17) {
//                       $text.val($text.val() + '-');
//                   }
//               }
//             });

$(document).ready(function(){
  $('#nipinput').keydown(function(e){
    var key = e.charCode || e.keyCode || 0;
    $text = $(this);
      if (key !== 8 && key !== 15 && key !== 17) {
        if ($text.val().length === 8) {
            $text.val($text.val() + '-');
        }
        if ($text.val().length === 15) {
            $text.val($text.val() + '-');
        }
        if ($text.val().length === 17) {
            $text.val($text.val() + '-');
        }
      }
  })
})
</script>

</body>
</html>