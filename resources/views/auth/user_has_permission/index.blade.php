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
{{end}} {{end}} {{ if .errors }} {{ range $index, $value := .errors }}
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ $value }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
{{ end }} {{ end }} --}}

<!-- content to be displayed here -->
<div class="card card-info card-outline">
    <div class="card-header">

        <h3 class="my-1 float-left"><i class="fas fa-info-circle text-info"></i>&nbsp;All User Permissions</h3>
        <div class="btn-group btn-group-sm float-right" role="group">
            <form action="/auth/user-permissions/create" method="post">
                <input type="hidden" name="csrf" value="{{-- {{$.csrf }} --}}">
                <input type="hidden" name="id" value="{{-- {{ .userID }} --}}">
                <button type="submit" class="btn btn-info btn-sm" title="Show">
                <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
            </button>
            </form>
        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S/no</th>
                    <th>Path</th>
                    <th>Subsytem ID</th>
                    <th>Method</th>
                    <th>Service</th>
                    <th>Sub Service</th>
                    <th>Action</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ range $index, $value := .data }} --}}
                <tr>
                    <th scope="row">{{-- {{add $index 1}} --}}</th>
                    <th>{{-- {{$value.Path}} --}}</th>
                    <th>{{-- {{$value.SubSystemID}} --}}</th>
                    <th>{{-- {{$value.Method}} --}}</th>
                    <th>{{-- {{$value.Service}} --}}</th>
                    <th>{{-- {{$value.SubService}} --}}</th>
                    <th>{{-- {{$value.Action}} --}}</th>
                    <td>
                        <div class="btn-group btn-group-sm float-right" role="group">
                            <form action="/auth/permissions/show" method="post">
                                <input type="hidden" name="csrf" value="{{-- {{$.csrf }} --}}">
                                <input type="hidden" name="id" value="{{-- {{ $value.ID }} --}}">
                                <button type="submit" class="btn btn-info btn-sm" title="Show">
                                <i class=" fas fa-fw fa-eye" aria-hidden="true"></i>
                            </button>
                            </form>

                        </div>

                    </td>
                </tr>

                {{-- {{ end }} --}}

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
