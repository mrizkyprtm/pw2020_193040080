<?php

//menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $apparel = query("SELECT * FROM apparel WHERE
                    jenis LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    brand LIKE '%$keyword%' OR
                    bahan LIKE '%$keyword%' OR
                    ukuran LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' ");
} else {
  $apparel = query("SELECT * FROM apparel");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="my-3">
  <div class="container-fluid">
    <h1 class="text-center">Halaman Admin</h1>
    <div class="row">
      <div class="col">
        <a class="btn btn-primary mr-1" href="tambah.php" role="button">+ Tambah Data</a>
        <a class="btn btn-danger mr-1" href="logout.php" role="button">Logout</a>
      </div>
      <div class="col">
        <form class="form-inline my-2 float-right my-lg-2" action="" method="get">
          <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" autocomplete="off" autofocus>
          <button class="btn btn-success my-2 my-sm-0" type="submit" name="cari">Search</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col justify-content-center">
        <table class="table table-responsive table-striped table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Gambar Produk</th>
              <th scope="col">Jenis Produk</th>
              <th scope="col">Nama</th>
              <th scope="col">Brand</th>
              <th scope="col">Bahan</th>
              <th scope="col">Ukuran</th>
              <th width="320" scope="col">Deskripsi Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (empty($apparel)) : ?>
              <tr>
                <td colspan="10">
                  <h1>Data Tidak Ditemukan</h1>
                </td>
              </tr>
            <?php else : ?>
              <?php $i = 1; ?>
              <?php foreach ($apparel as $pakaian) : ?>
                <tr>
                  <th class="nomor" scope="row"><?= $i++; ?></th>
                  <td><img class="img-fluid" width="200" src="../assets/img/<?= $pakaian["gambar"] ?>"></td>
                  <td><?= $pakaian["jenis"] ?></td>
                  <td><?= $pakaian["nama"] ?></td>
                  <td><?= $pakaian["brand"] ?></td>
                  <td><?= $pakaian["bahan"] ?></td>
                  <td><?= $pakaian["ukuran"] ?></td>
                  <td><?= $pakaian["deskripsi"] ?></td>
                  <td>Rp <?= $pakaian["harga"] ?></td>
                  <td>
                    <div class="btn-group" role="group">
                      <a class="btn btn-warning mr-1" href="ubah.php?id=<?= $pakaian['id'] ?>" role="button">Ubah</a>
                      <a class="btn btn-danger" href="hapus.php?id=<?= $pakaian['id'] ?>" onclick="return confirm('Hapus Data?')" role="button">Hapus</a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <p class="pt-4 pb-2">&copy;Copyright <?= date("Y"); ?> | Made with <span class="text-danger">&hearts;</span> by <a href="http://about.me/m_rizky">m_rizkyprtm</a>.</p>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="../js/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>

</html>