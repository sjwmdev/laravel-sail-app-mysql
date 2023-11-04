@extends(config('system.paths.dashboard.layouts') . 'master')

@section('title')
    - Post
@endsection

@section('css')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="my-1 float-left"><i class="fas fa-info-circle text-info"></i>&nbsp;Update Post</h3>
            @can('posts.index')
                <div class="btn-group btn-group-sm float-right" role="group">
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-info" title="List All">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    </a>
                </div>
            @endcan
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <div class="col-md-12">
                <form action="{{ route('posts.update', $post->id) }}" method="post" class="form">
                    @method('patch')
                    @csrf
                    @include(config('system.paths.dashboard.base') . 'posts.form')
                </form>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
