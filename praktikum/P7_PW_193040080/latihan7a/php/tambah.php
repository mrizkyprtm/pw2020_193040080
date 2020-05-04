<?php

//menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'admin.php';
              </script>";
  } else {
    echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">
    <div class="row my-3 text-center">
      <div class="col">
        <h1>Tambah Data Produk</h1>
      </div>
    </div>
    <!-- card -->
    <di class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card bg-add">
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="text" name="gambar" id="gambar" class="form-control" placeholder="Masukan gambar" required>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis:</label>
                <select class="form-control" name="jenis" required>
                  <option disabled selected>---Pilih Jenis---</option>
                  <option value="T-shirt">T-shirt</option>
                  <option value="Polo shirt">Polo Shirt</option>
                  <option value="Hoodie">Hoodie</option>
                  <option value="Jacket">Jacket</option>
                  <option value="Bomber Jacket">Bomber Jacket</option>
                  <option value="Celana">Celana</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan nama" required>
              </div>
              <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" name="brand" id="brand" class="form-control" placeholder="Masukan brand" required>
              </div>
              <div class="form-group">
                <label for="bahan">Bahan:</label>
                <input type="text" name="bahan" id="bahan" class="form-control" placeholder="Masukan bahan" required>
              </div>
              <div class="form-group">
                <label for="ukuran">Ukuran:</label>
                <input type="text" name="ukuran" id="ukuran" class="form-control" placeholder="Masukan ukuran" required>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukan Deskripsi" required></textarea>
              </div>
              <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukan harga" required>
              </div>
              <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
              <a class="btn btn-danger" href="admin.php" role="button">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </di>
    <!-- akhir card -->

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
  <script src="../js/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>