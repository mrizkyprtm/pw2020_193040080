<?php

//menghubungkan dengan file php lainnya
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $apparel = query("SELECT * FROM apparel WHERE
                    nama LIKE '%$keyword%' OR
                    brand LIKE '%$keyword%' ");
} else {
  $apparel = query("SELECT * FROM apparel");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IndoDistro</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- my CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="home">
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand mr-auto" href="index.php">IndoDistro</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center ml-auto">
          <a class="nav-item nav-link active" href="#home">Home</a>
          <a href="php/admin.php">
            <button class="btn btn-primary tombol">Halaman Admin</button>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">IndoDistro Official</h1>
      <p class="lead">Katalog Produk</p>
    </div>
  </div>
  <!-- akhir Jumbotron -->

  <div class="container">
    <div class="row justify-content-center">
      <form class="form-inline my-2 my-lg-0" action="" method="get">
        <input class="form-control mr-sm-2" name="keyword" type="search" size="30" placeholder="cari berdasarkan nama" autocomplete="off">
        <button class="btn btn-success my-2 my-sm-0 tombol" type="submit" name="cari">Search</button>
      </form>
    </div>
    <?php if (empty($apparel)) : ?>
      <div class="row">
        <div id="no-data" class="col-lg text-center">
          <img src="assets/img/no_data.png" alt="">
          <!-- <h1>Data Tidak Ada!</h1> -->
        </div>
      </div>
    <?php else : ?>
      <div class="row justify-content-center">
        <?php foreach ($apparel as $pakaian) : ?>
          <div class="col-lg-4-md-6 m-4 text-center">
            <div class="card-deck">
              <a href="php/detail.php?id=<?= $pakaian['id'] ?>">
                <div class="card" id="produk" style="width: 18rem;">
                  <img src="assets/img/<?= $pakaian['gambar'] ?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?= $pakaian['nama']; ?></h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>

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

  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>