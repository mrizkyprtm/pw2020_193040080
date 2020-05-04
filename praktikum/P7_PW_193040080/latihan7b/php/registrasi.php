<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal!');
          </script>";
  }
  
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Registrasi | IndoDistro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      /* background-color: #17a2b8; */
      background-image: url(../assets/img/jumbotron-bg.jpg);
      background-size: 100%;
      background-position: center;
      height: 100vh;
    }

    #regist-box {
      margin-top: 120px;
      margin-bottom: 120px;
      max-width: 600px;
      min-height: 320px;
      border: 2px solid #9C9C9C;
      border-radius: 25px;
      background-color: rgba(255, 255, 255, 0.8);
      box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.2), 
                  0 6px 20px 0 rgba(0, 0, 0, 0.2);
    }

    #regist-form {
      padding: 20px;
    }
    .btn {
      background-image: linear-gradient(to bottom right, cyan, magenta);
    }
  </style>
</head>

<body>
  <div id="regist">
    <div class="container">
      <div id="regist-row" class="row justify-content-center align-items-center">
        <div id="regist-column" class="col-md-6">
          <div id="regist-box" class="col-md-12">
            <form id="regist-form" class="form" action="" method="post">
              <h2 class="text-center text-primary">Register</h2>
              <div class="form-group">
                <label for="username" class="text-primary">Username:</label><br>
                <input class="form-control" type="text" name="username" id="username" required>
              </div>
              <div class="form-group">
                <label for="password" class="text-primary">Password:</label><br>
                <input class="form-control" type="password" name="password" id="password" required>
              </div>
              <div class="form-group">
                <input type="submit" name="register" class="btn btn-info btn-md" value="Register">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>