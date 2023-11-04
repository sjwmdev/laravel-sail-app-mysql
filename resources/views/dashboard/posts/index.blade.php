@extends(config('system.paths.dashboard.layouts') . 'master')

@section('title')
    - Posts
@endsection

@section('css')
    <!-- DataTables js-->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;All Posts</h3>
            @can('posts.create')
                <div class="btn-group btn-group-sm float-right" role="group">
                    <a href="{{ route('posts.create') }}" class="btn btn-outline-success" title="Add New">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            @endcan
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">S/N</th>
                        <th>Name</th>
                        <th width="5%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $postID = 0; ?>
                    @foreach ($posts as $key => $post)
                        <tr>
                            <td scope="row">{{ $postID += 1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <div class="btn-group btn-group-sm float-right" role="group">
                                    @can('posts.show')
                                        <a href="{{ route('posts.show', $post->id) }}">
                                            <button class="btn btn-default btn-sm" title="Show">
                                                <i class=" fas fa-fw fa-eye text-info" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    @endcan
                                    @can('posts.edit')
                                        <a href="{{ route('posts.edit', $post->id) }}">
                                            @csrf
                                            <button class="btn btn-default btn-sm" title="Update">
                                                <i class=" fas fa-fw fa-pencil-alt fa-sm text-primary" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    @endcan
                                    @can('posts.destroy')
                                        <!-- Modal for Confirmation -->
                                        <div class="modal fade" id="deleteModal{{ $post->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this post?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button to trigger the modal -->
                                        <button class="btn btn-default btn-sm" title="Delete" data-toggle="modal"
                                            data-target="#deleteModal{{ $post->id }}">
                                            <i class="fas fa-fw fa-trash fa-sm text-danger" aria-hidden="true"></i>
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
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
    <script>
        $(function() {
            $("#datatable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
