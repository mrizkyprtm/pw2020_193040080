<?php
//mengecek apakah ada id yang dikirimkan
//jika tidak ada maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location:../index.php");
  exit;
}

require 'functions.php';

//mengambil id dari url
$id = $_GET['id'];

$apparel = query("SELECT * FROM apparel WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand mr-auto" href="../index.php">IndoDistro</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center ml-auto">
          <a class="nav-item nav-link active" href="../index.php">Home</a>
          <a href="login.php">
            <button class="btn btn-primary tombol">login</button>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Detail Produk</h1>
    </div>
  </div>
  <!-- akhir jumbotron -->

  <!-- container -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 gambar">
        <img src="../assets/img/<?= $apparel["gambar"]; ?>">
      </div>
      <div class="col-lg-7">
        <div class="row">
          <div class="col">
            <h3><?= $apparel["nama"]; ?></h3>
          </div>
        </div>
        <div class="row d1 my-3 py-3">
          <div class="col-lg">
            <p class="mr-3 bold">Category</p>
            <h5 class="thin"><?= $apparel["jenis"]; ?></h5>
          </div>
          <div class="col-lg">
            <p class="mr-3 bold">Brand</p>
            <h5 class="thin"><?= $apparel["brand"]; ?></h5>
          </div>
          <div class="col-lg">
            <p class="mr-3 bold">Bahan</p>
            <h5 class="thin"><?= $apparel["bahan"]; ?></h5>
          </div>
        </div>
        <div class="row my-3">
          <div class="col">
            <h4>Rp <?= $apparel["harga"]; ?>,00</h4>
          </div>
        </div>
        <div class="row my-3">
          <div class="col">
            <h5 class="bold float-left mr-4">Size</h5>
            <p><?= $apparel["ukuran"]; ?></p>
          </div>
        </div>
        <div class="row my-3">
          <div class="col">
            <h5 class="mr-3 bold">Deskripsi</h5>
            <p><?= $apparel["deskripsi"]; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <a href="../index.php" class="btn btn-warning">Kembali</a>
    </div>
  </div>
  <!-- akhir container -->

  <!-- footer -->
  <footer class="bg-dark text-white">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <p class="pt-4 pb-2">&copy;Copyright <?= date("Y"); ?> | Made with <span class="text-danger">&hearts;</span> by <a href="http://about.me/m_rizky">m_rizkyprtm</a>.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->
</body>
<script src="../js/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>

</html>