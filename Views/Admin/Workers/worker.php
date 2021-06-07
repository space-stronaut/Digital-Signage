<?php session_start(); ?>
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
<div class="container mx-auto">
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
                Aksi
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          <?php include "../../../Controllers/WorkerController.php"; 
          
            $workers = new Worker();


            foreach($workers->index() as $worker) {
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
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex">
                <a href="#" class="bg-green-600 text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-green-900">Edit</a>
                <form action="worker-proses.php?aksi=hapus" method="post">
                    <input type="hidden" name="id" value="<?php echo $worker['id'] ?>">
                    <input type="submit" value="Hapus" class="bg-red-600 cursor-pointer text-white ml-5 px-3 py-2 rounded-md text-sm font-medium hover:bg-red-900">
                </form>
              </td>
            </tr>
            <?php } ?>
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

    <a href="../../Auth/auth-proses.php?aksi=logout" class="text-blue-500 hover:text-blue-700 focus:text-blue-900">Logout</a>
</body>
</html>