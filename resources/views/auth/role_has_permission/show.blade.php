@extends('layouts.master')

@section('css')
<!-- DataTables js-->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
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
<!-- content to be displayed here -->
<div class="card card-info card-outline">
    <div class="card-header">

        <h3 class="my-1 float-left"> <i class="fas fa-info-circle text-info"></i>&nbsp;Details for Role Permission</h3>
        <div class="btn-group btn-group-sm float-right" role="group">
            <a href="/auth/role-permissions/list" class="btn btn-info mr-2" title="List All">
                <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
            </a>

            <a href="/auth/role-permissions/create" class="btn btn-success" title="Add New">
                <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
            </a>
        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Role :</b> {{-- {{ .data.ID}} --}}</li>
            <li class="list-group-item"><b>Permission :</b> {{-- {{ .data.PermissionID}} --}}</li>
            <li class="list-group-item"><b>Created By:</b> {{-- {{ .data.CreatedBy}} --}}</li>
            <li class="list-group-item"><b>Created At:</b> {{-- {{ .data.CreatedAt}} --}}</li>
        </ul>
    </div>
    <!-- /.card-body -->
</div>

<!-- /.card -->
@endsection

@section('js')
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- page script -->
<script>
    $(function() {
        $("#datatable").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
@endsection
