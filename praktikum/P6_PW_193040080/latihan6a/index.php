<?php

//menghubungkan dengan file php lainnya
require 'php/functions.php';

$apparel = query("SELECT * FROM apparel");

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

<body>
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