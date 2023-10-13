@extends('layouts.master')

{{-- {{define "css"}} --}}
@section('css')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
{{-- {{ end }} --}}
@endsection

{{-- {{define "content"}} --}}
@section('content')
<div class="card" style="margin-top: -3rem;">
    <div class="card-body">
        <div class="col-md-12">
         <h4 class="m-0">Dashboard</h4>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@include('layouts.partials._small_boxes')
@include('layouts.partials._charts')
{{-- {{end}} --}}
@endsection

{{-- {{define "js"}} {{ end }} --}}
@section('js')
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte/dist/js/pages/dashboard3.js') }}"></script>
@endsection
