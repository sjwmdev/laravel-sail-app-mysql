<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COSTECH RIMS | Reset Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-dark">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>COSTECH RIMS</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Change Your Password.</p>
        <form action="/auth/user-reset-password" method="post">
          <input type="hidden" name="csrf" value="{{ .csrf }}">
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="New Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa-solid fa-key"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Change password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mt-3 mb-1">
          <a href="/auth/login">Login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>
