<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LSDM - Login</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/google_fonts.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-custom-b98b40">
            <div class="col-12 text-center">
                <br>
                <span class="col-12"
                    style="background-color:white; font-size:17px; text-shadow:0.2px 0.2px 0.2px #4C4B4D;
            font-family: 'Seta Reta NF'; font-weight: 600; color: #4C4B4D !important">
                    LSDM
                </span>
            </div>
            <div class="card-header text-center">
                <img src="/images/lsdm-logo.png" alt="lsdm-logo" style="width:70px; height:70px;" class="login-logo">
                <br>
                <span class="col-12"
                    style="background-color:white; font-size:17px; text-shadow:0.2px 0.2px 0.2px #4C4B4D;
            font-family: 'Seta Reta NF', serif; font-weight: bold; color: #4C4B4D !important">
                    Sign in to LSDM to Begin Your Session
                </span>
            </div>
            <div class="card-body">
                <div class="login-box-msg">
                    @include(config('system.paths.dashboard.auth_partials') . '_alert_messages')
                </div>
                <form action="{{ route('login.perform') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    @include(config('system.paths.dashboard.auth_partials') . '_login_form')
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="text-center mt-4">&copy;{{ date('Y') }} LSDM</div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('bi-eye');
        });
    </script>
</body>

</html>
