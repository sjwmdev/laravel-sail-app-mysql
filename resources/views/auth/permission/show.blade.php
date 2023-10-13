@extends('layouts.master')

@section('content')
<!-- content to be displayed here -->
<div class="card">
    <div class="card-header">
        <h3 class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;Permission</h3>

        <div class="float-right">
            <div class="btn-group btn-group-sm" role="group">
                <a href="/auth/permissions/list" class="btn btn-primary" title="List all">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Path :</b> {{-- {{ .data.Path}}--}}</li>
            <li class="list-group-item"><b>SubSystem ID :</b> {{-- {{ .data.SubSystemID}}--}}</li>
            <li class="list-group-item"><b>Method :</b> {{-- {{ .data.Method}}--}}</li>
            <li class="list-group-item"><b>Service :</b> {{-- {{ .data.Service}}--}}</li>
            <li class="list-group-item"><b>SubService :</b> {{-- {{ .data.SubService}}--}}</li>
            <li class="list-group-item"><b>Action :</b> {{-- {{ .data.Action}}--}}</li>
            <li class="list-group-item"><b>Created By :</b> {{-- {{ .data.CreatedBy}}--}}</li>
            <li class="list-group-item"><b>Created At:</b> {{-- {{ .data.CreatedAt}}--}}</li>
            <li class="list-group-item"><b>Updated At:</b> {{-- {{ .data.UpdatedAt}}--}}</li>
        </ul>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection

{{-- {{end}} {{define "js"}} {{ end }} --}}
