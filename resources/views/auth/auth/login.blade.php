<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ 'LSDM | Login' }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/google_fonts.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/toastr/toastr.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="card card-outline card-dark">
      <div class="col-12" style="text-align: center">
        {{-- <span class="col-12 " style=" text-align: center; background-color:white;font-size:17px;text-shadow:0.2px 0.2px 0.2px #4C4B4D;
            font-family: 'Seta Reta NF';
            font-weight: 600;
            color: #4C4B4D; !important">
            Laravel Sail Docker MySQL
        </span> --}}
      </div>
      <div class="card-header text-center">
        <img src="/images/lsdm-logo.png" alt="" style="width:70px;height:70px"> <br>
        <span class="col-12 " style="text-align: center; background-color:white;font-size:17px;text-shadow:0.2px 0.2px 0.2px #4C4B4D;
            font-family: 'Seta Reta NF',serif;
            font-weight: bold;
            color: #4C4B4D; !important">
            LSDM
        </span>
      </div>
      <div class="card-body">
        <p class="login-box-msg"></p>
        <form action="{{ route('login.perform') }}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          {{-- Messages --}}
          @include('layouts.partials._messages')

          {{-- {{ include "auth/views/auth/partials/_login_form" }} --}}
          @include('auth.auth.partials._login_form')
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <div class="footer">
    <hr style="width: 350px">
    <div class="text-center">&copy; {{ date('Y') }} LSDM</div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('/adminlte/dist/js/adminlte.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('/adminlte/plugins/toastr/toastr.min.js') }}"></script>

   <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye / eye slash icon
      this.classList.toggle('bi-eye');
    });
  </script>
</body>

</html>
