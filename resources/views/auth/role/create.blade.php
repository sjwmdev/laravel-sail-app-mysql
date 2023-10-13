@extends('layouts.master')

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
<!-- content to be displayed here -->
{{-- {{ if .errors }} {{range $index, $value := .errors}} --}}
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{-- {{ $value }} --}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
</div>
{{-- {{end}} {{end}} --}}

<div class="card">
    <div class="card-header">
        <h3 class="my-1 float-left"><i class="fas fa-info-circle blue"></i>&nbsp;{{ .title }}</h3>
        <div class="btn-group btn-group-sm float-right" role="group">
            <a href="/auth/roles/list" class="btn btn-primary" title="List All">
                <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- /.card-header -->


    <div class="card-body">
        <form action="/auth/roles/store" method="post" class="form">
            @include('auth.role.form')
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection

@section('js')
<!-- Select2 -->
<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
@endsection
