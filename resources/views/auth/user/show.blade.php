@extends('layouts.master')

@section('content')
<!-- content to be displayed here -->
<div class="card">
    <div class="card-header">
        <h3 class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;User :{{-- {{$.data.Name }} --}}</h3>

        <div class="float-right">
            <div class="btn-group btn-group-sm" role="group">
                <a href="/auth/users/list" class="btn btn-primary" title="List all">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                </a>

                <a href="/auth/users/create" class="btn btn-success" title="Add New">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Name :</b> {{-- {{$.data.Name }} --}}</li>
            <li class="list-group-item"><b>Email :</b> {{-- {{ .data.Email}} --}}</li>
            <li class="list-group-item"><b>Created At:</b> {{-- {{ .data.CreatedAt}} --}}</li>
            <li class="list-group-item"><b>Updated At:</b> {{-- {{ .data.UpdatedAt}} --}}</li>
        </ul>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection

