<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Monitoring Rain Shelter</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="conf/regis.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="fullname" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="custom-select" id="inputGroupSelect01" name="level" required>
            <option selected disabled>Pilih Level</option>
            <option value="Penggunjung">Penggunjung</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>
      <a href="index.php" class="text-center">I already have a membership</a>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>

<?php
if (isset($_GET['error'])) {
  $x = $_GET['error'];
  if ($x == 1) {
    echo "<script>
      Swal.fire({
        icon: 'error',
        title: 'Username Telah Terdaftar',
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
      });
    </script>";
  } elseif ($x == 2) {
    echo "<script>
      Swal.fire({
        icon: 'warning',
        title: 'Konfirmasi Password Tidak Sesuai',
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
      });
    </script>";
  } elseif ($x == 3) {
    echo "<script>
      Swal.fire({
        icon: 'info',
        title: 'Masukan Full Name, Username, Password, Dan Retype Password',
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
      });
    </script>";
  }
}
?>
</body>
</html>
