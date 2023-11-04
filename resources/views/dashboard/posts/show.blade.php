@extends(config('system.paths.dashboard.layouts') . 'master')

@section('title')
    - Post
@endsection

@section('content')
    <!-- content to be displayed here -->
    <div class="card">
        <div class="card-header">
            <h3 class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;Post Details</h3>

            <div class="float-right">
                <div class="btn-group btn-group-sm" role="group">
                    @can('posts.index')
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-primary" title="List all">
                            <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        </a>
                    @endcan
                    @can('posts.create')
                        <a href="{{ route('posts.create') }}" class="btn btn-outline-success" title="Add New">
                            <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        </a>
                    @endcan
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Title :</b> {{ $post->title }} </li>
                <li class="list-group-item"><b>Description :</b> {{ $post->description }} </li>
                <li class="list-group-item"><b>Body :</b> {{ $post->body }} </li>
                @role('admin')
                    <li class="list-group-item"><b>Created By:</b> {{ $post->createdBy->name ?? 'N/A' }}
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Created At:</b> {{ $post->created_at ?? 'N/A' }}</li>
                        </ul>
                    </li>
                    <li class="list-group-item"><b>Updated By:</b> {{ $post->updatedBy->name ?? 'N/A' }}
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Updated At:</b> {{ $post->updated_at ?? 'N/A' }}</li>
                        </ul>
                    </li>
                @endrole
            </ul>

            <div class="float-left ml-4 mt-4">
                @can('posts.edit')
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                @endcan
                @can('posts.index')
                    <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
                @endcan
            </div>

            @hasrole('admin')
                @can('posts.forceDelete')
                    <div class="float-right mt-4">
                        <div class="modal fade" id="deleteModal{{ $post->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Pressing the delete button will permanently delete the post. Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form action="{{ route('posts.forceDelete', $post->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button to trigger the modal -->
                        <button class="btn btn-danger" title="Delete" data-toggle="modal"
                            data-target="#deleteModal{{ $post->id }}">
                            Delete Permanently
                        </button>
                    </div>
                @endcan
            @endhasrole

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
