<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ .title }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/adminlte/dist/css/google_fonts.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">

</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="card">
            <br>
            <div class="col-12" style="text-align: center">
                <span class="col-12 " style=" text-align: center; background-color:white;font-size:17px;text-shadow:0.2px 0.2px 0.2px #4C4B4D;
            font-family: 'Seta Reta NF';
            font-weight: 600;
            color: #4C4B4D; !important">
                    Tanzania Commission for Science and Technology
                </span>
            </div>
            <div class="card-header text-center">
                <img src="/images/costech-logo.png" alt="" style="width:70px;height:70px"> <br>
                <span class="col-12 " style="text-align: center; background-color:white;font-size:17px;text-shadow:0.2px 0.2px 0.2px #4C4B4D;
            font-family: 'Seta Reta NF',serif;
            font-weight: bold;
            color: #4C4B4D; !important">
                    COSTECH RIMS
                </span>
            </div>
            <div class="card-body">
                <p class="login-box-msg">
                    Reset Password
                    {{ if .infos }}
                    {{range $index, $value := .infos}}
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $value }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{end}}{{end}}


                {{ if .errors }} {{range $index, $value := .errors}}
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $value }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{end}} {{end}}
                </p>
                <form action="/auth/reset-password" method="POST">
                    <input type="hidden" name="csrf" value="{{ .csrf }}">
                    <input type="hidden" name="token" value="{{ .token }}">
                    {{ include "auth/views/auth/partials/_reset_password_form" }}
                    <div class="social-auth-links text-center mt-4">
                        <button class="btn btn-block" style="background-color:#ab8342 !important">
                            <i class=""></i> <span class="text-white">Change Password</span>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <div class="footer">
        <hr>
        &copy; {{ copy }} COSTECH
    </div>

    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/dist/js/adminlte.min.js"></script>

</body>

</html>
