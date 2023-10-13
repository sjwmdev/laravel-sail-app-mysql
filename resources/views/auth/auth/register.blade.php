<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ 'LSDM | Register' }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/google_fonts.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-dark">
      <div class="col-12" style="text-align: center">
      </div>
      <div class="card-header text-center">
        <img src="/images/lsdm-logo.png" alt="" style="width:70px;height:70px"> <br>
        <span class="col-12 " style=" text-align: center; background-color:white;font-size:17px;text-shadow:0.2px 0.2px 0.2px #4C4B4D;
          font-family: 'Seta Reta NF',serif;
          font-weight: bold;
          color: #4C4B4D; !important">
          LSDM
        </span>
      </div>
      <div class="card-body">
        <p class="login-box-msg"></p>
        <form action="{{ route('register.perform') }}" method="POST" id="myForm">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          {{-- Messages --}}
          @include('layouts.partials._messages')

          {{-- {{ include "auth/views/auth/partials/_register_form" }} --}}
          @include('auth.auth.partials._register_form')
        </form>
        <a href="/login" class="text-center" style="color:#b98b40 !important;">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  <div class="footer">
    <hr>
    &copy; {{ date('Y') }} LSDM
  </div>


  <!-- jQuery -->
  <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

  <script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
  <!-- InputMask -->
  <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('adminlte/dist/js/custom.js') }}"></script>

  <!-- Toastr -->

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

  <script>
    const togglePassword1 = document.querySelector('#togglePassword1');
    const password1 = document.querySelector('#confirm-password');
    togglePassword1.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
      password1.setAttribute('type', type);
      // toggle the eye / eye slash icon
      this.classList.toggle('bi-eye');
    });
  </script>
</body>

</html>
