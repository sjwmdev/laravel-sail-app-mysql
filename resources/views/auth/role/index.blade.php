@extends('layouts.master')

@section('css')
<!-- DataTables js-->
<link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
<div class="card">
    <div class="card-header">

        <h3 class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;All Roles</h3>
        <div class="btn-group btn-group-sm float-right" role="group">
            <a href="/auth/roles/create" class="btn btn-success" title="Add New">
                <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
            </a>
        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S/no</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{range $index, $value := .data}} --}}
                <tr>
                    <th scope="row">{{-- {{add $index 1}} --}}</th>
                    <th>{{-- {{$value.Name}} --}}</th>
                    <th>{{-- {{$value.Description}} --}}</th>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group">
                            <form action="/auth/roles/show" method="post">
                                <input type="hidden" name="csrf" value="{{-- {{$.csrf }} --}}">
                                <input type="hidden" name="id" value="{{-- {{ $value.ID }} --}}">
                                <button type="submit" class="btn btn-info btn-sm" title="Show">
                                <i class=" fas fa-fw fa-eye" aria-hidden="true"></i>
                            </button>
                            </form>
                            <form action="/auth/roles/edit" method="post">
                                <input type="hidden" name="csrf" value="{{-- {{$.csrf }} --}}">
                                <input type="hidden" name="id" value="{{-- {{ $value.ID }} --}}">
                                <button class="btn btn-primary btn-sm" title="Update">
                                  <i class=" fas fa-fw fa-pencil-alt fa-sm" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form action="/auth/roles/delete" method="post">
                                <input type="hidden" name="csrf" value="{{-- {{$.csrf }} --}}">
                                <input type="hidden" name="id" value="{{-- {{ $value.ID }} --}}">
                                <button class="btn btn-danger btn-sm" title="Delete">
                                  <i class=" fas fa-fw fa-trash fa-sm" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form action="/auth/role-permissions/list" method="post">
                                <input type="hidden" name="csrf" value="{{-- {{$.csrf }} --}}">
                                <input type="hidden" name="id" value="{{-- {{ $value.ID }} --}}">
                                <button class="btn btn-primary btn-sm" title="Permissions">
                                  <i class=" fas fa-fw fa-list fa-sm" aria-hidden="true"></i>
                                </button>
                            </form>


                        </div>

                    </td>
                </tr>

                {{-- {{end}} --}}

            </tbody>
        </table>
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
