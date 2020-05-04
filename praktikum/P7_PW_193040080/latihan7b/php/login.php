<?php
session_start();
require 'functions.php';
//melakukan pengecekan apakah user sudah melakukan login. jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>



<!doctype html>
<html lang="en">

<head>
  <title>Login | IndoDistro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      /* background-color: #212121; */
      background-image: url(../assets/img/jumbotron-bg.jpg);
      background-size: 100%;
      background-position: center;
      height: 100vh;
    }

    #login-box {
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

    #login-form {
      padding: 20px;
    }

    .btn {
      background-image: linear-gradient(to bottom right, cyan, magenta);
    }
  </style>
</head>

<body>
  <div id="login">
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="" method="post">
              <h2 class="text-center text-primary">Login</h2>
              <?php if (isset($error)) : ?>
                <p style="color: red; font-size: italic;">Username atau Password salah!</p>
              <?php endif; ?>
              <div class="form-group">
                <label for="username" class="text-primary">Username:</label><br>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="text-primary">Password:</label><br>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input name="remember" type="checkbox" class="custom-control-input" id="remember">
                  <label class="custom-control-label" for="remember">Remember me</label>
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="remember">
                  <span><input id="remember" name="remember" type="checkbox">
                    <span>Remember me</span> 
                  </span>
                </label>
                <br>
              </div> -->
              <button type="submit" name="submit" class="btn btn-info btn-md">LOGIN</button>
              <div id="register-link" class="text">
                <p class="">Belum punya akun? Registrasi <a href="registrasi.php" class="text-primary">disini</a></p>
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