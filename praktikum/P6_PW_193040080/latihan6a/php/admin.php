<?php

//menghubungkan dengan file php lainnya
require 'functions.php';

$apparel = query("SELECT * FROM apparel");

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
    <table class="table-responsive table-striped table-bordered text-center">
      <thead class="bg-warning">
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
        <?php $i = 1; ?>
        <?php foreach ($apparel as $pakaian) : ?>
          <tr>
            <th class="bg-success" scope="row"><?= $i; ?></th>
            <td><img width="200" src="../assets/img/<?= $pakaian["gambar"] ?>"></td>
            <td><?= $pakaian["jenis"] ?></td>
            <td><?= $pakaian["nama"] ?></td>
            <td><?= $pakaian["brand"] ?></td>
            <td><?= $pakaian["bahan"] ?></td>
            <td><?= $pakaian["ukuran"] ?></td>
            <td><?= $pakaian["deskripsi"] ?></td>
            <td>Rp <?= $pakaian["harga"] ?></td>
            <td>
              <div class="btn-group" role="group">
                <a class="btn btn-warning mr-1" href="#" role="button">Ubah</a>
                <a class="btn btn-danger" href="#" role="button">Hapus</a>
              </div>
            </td>
          </tr>
          <?php $i++ ?>
        <?php endforeach; ?>
      </tbody>
    </table>
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