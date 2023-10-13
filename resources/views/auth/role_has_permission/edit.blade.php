@extends('layouts.master')

@section('css')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection

@section('content')
<!-- content to be displayed here -->
{{-- {{ if .infos }} {{range $index, $value := .infos}}
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $value }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
{{end}} {{end}} {{ if .errors }} {{range $index, $value := .errors}}
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ $value }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
{{end}} {{end}} --}}
<div class="card card-info card-outline">
    <div class="card-header">
        <h3 class="my-1 float-left"><i class="fas fa-info-circle text-info"></i>Update </h3>
        <div class="btn-group btn-group-sm float-right" role="group">
            <a href="/auth/role-permissions/list" class="btn btn-info" title="List All">
                <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
        <div class="col-md-12">
            <form action="/auth/role-permissions/update" method="post" class="form">
                {{-- {{include "views/role_has_permission/form"}} --}}
                @include('auth.role_has_permission.form')
            </form>

        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
