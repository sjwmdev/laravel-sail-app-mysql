@extends(config('system.paths.dashboard.layouts') . 'master')

@section('title')
    - Dashboard
@endsection

@section('css')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <style>
        .card-header h3 {
            font-size: 1.5rem;
        }

        .card-body {
            font-size: 1rem;
        }

        .card-alert {
            transition: opacity 0.5s ease-in-out;
            opacity: 1;
        }

        .card-alert.hidden {
            opacity: 0;
        }
    </style>
@endsection

@section('content')
    <div class="card" style="margin-top: -3rem;">
        <div class="card-header">
            <h3 class="card-title">Dashboard</h3>
            <button class="btn btn-dark btn-sm float-right" id="btn-refresh">Refresh</button>
        </div>
        {{-- <div class="card-body card-alert" style="padding: 1rem;">
    @if (Auth::check())
      <div class="alert alert-dark">
        Welcome back, {{ Auth::user()->name }}!
      </div>
    @endif
  </div> --}}
    </div>

    @hasrole('admin')
        @include(config('system.paths.dashboard.partials') . '_quick_stats')
        @include(config('system.paths.dashboard.partials') . '_charts')
    @endhasrole
@endsection

@section('js')
    <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte/dist/js/pages/dashboard3.js') }}"></script>
    <script>
        const refreshButton = document.querySelector("#btn-refresh");
        refreshButton.addEventListener("click", () => {
            const confirmRefresh = window.confirm("Are you sure you want to refresh the page?");

            if (confirmRefresh) {
                location.reload();
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.card-alert').hide();
            }, 5000); // This will hide the card body after 5 seconds.
        });
    </script>
    @include(config('system.paths.dashboard.base') . 'charts.users_created')
    @include(config('system.paths.dashboard.base') . 'charts.posts_published')
@endsection
