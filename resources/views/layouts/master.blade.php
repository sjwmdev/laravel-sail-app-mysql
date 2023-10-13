<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LSDM@LSM1 | {{ date('Y') }}</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/google_fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <style>
        .icon-color {
            color: #C1892D;
            ;
        }

        .button-color {
            background-color: #C1892D;
            ;
        }

        .active {
            background-color: #C1892D;
        }

        .select2-selection__rendered {
            line-height: 31px !important;
        }

        .select2-container .select2-selection--single {
            height: 38px !important;
            padding-left: 0px;
            border-color: rgb(207, 204, 204);
        }

        .select2-selection__arrow {
            height: 34px !important;
        }

        .select2 {
            width: 100% !important;
        }
    </style>

    {{-- {{template "css" .}} --}}
    @yield("css")
</head>


<body class="hold-transition sidebar-mini layout-footer-fixed layout-navbar-fixed">

    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
            {{-- {{include "layouts/partials/_navbar"}} --}}
            @include('layouts.partials._navbar')
        </nav>

        <div id="leftsidebar">
            {{-- {{include "layouts/partials/_leftsidebar"}} --}}
            @include('layouts.partials._leftsidebar2')
        </div>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    {{-- {{include "layouts/partials/_breadcrumb"}} --}}
                    @include('layouts.partials._breadcrumb')
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="box-body">
                        {{-- {{template "content" .}} --}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            {{-- {{include "layouts/partials/_rightsidebar"}} --}}
            @include('layouts.partials._rightsidebar')
        </aside>

        <footer class="main-footer text-sm">
            {{-- {{include "layouts/partials/_footer"}} --}}
            @include('layouts.partials._footer')
        </footer>

    </div>

    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/fontawesome-free/js/all.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>

    {{-- {{template "js" .}} --}}
    @yield("js")

</body>

</html>
