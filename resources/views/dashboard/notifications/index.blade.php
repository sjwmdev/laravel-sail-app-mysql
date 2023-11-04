@extends(config('system.paths.dashboard.layouts') . 'master')

@section('title')
    - Notifications
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Notifications</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if (count($notifications) > 0)
                <div class="row">
                    @foreach ($notifications as $notification)
                        @php
                            $parts = explode('_', $notification->type);
                            $action = end($parts); // Get the last part after the last underscore
                            $hideShowButton = $action == 'deleted';
                        @endphp
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{ ucfirst(str_replace('_', ' ', $notification->type)) }}</h3>
                                </div>
                                <div class="card-body">
                                    {{ $notification->message }}
                                    @hasrole('admin')
                                        @if ($notification->auth_id != null)
                                            @if (auth()->user()->id != $notification->auth_id)
                                                <div class="mb-1">By: <a
                                                        href="{{ route('users.show', $notification->auth_id) }}">{{ $notification->user->name }}</a>
                                                </div>
                                            @else
                                                <div class="mb-1">By: <span class="text-info">you</span></div>
                                            @endif
                                        @endif
                                    @endhasrole
                                </div>
                                <div class="card-footer">
                                    <span class="float-left">{{ $notification->created_at->diffForHumans() }}</span>
                                    @can('notifications.mark-as-read')
                                        @if ($notification->read_at == null)
                                            <button class="btn btn-sm btn-default text-primary mr-1 float-right mark-as-read"
                                                data-notification-id="{{ $notification->id }}">Mark as read</button>
                                        @endif
                                    @endcan
                                    @can('notifications.destroy')
                                        <!-- Modal for Confirmation -->
                                        <div class="modal fade" id="deleteModal{{ $notification->id }}" tabindex="-1"
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
                                                        Are you sure you want to delete this notification?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <form action="{{ route('notifications.destroy', $notification->id) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button to trigger the modal -->
                                        <button class="btn btn-sm btn-default text-danger mr-1 float-right" title="Delete"
                                            data-toggle="modal" data-target="#deleteModal{{ $notification->id }}">
                                            <i class="fas fa-trash fa-sm text-danger" aria-hidden="true"></i>
                                        </button>
                                    @endcan
                                    @can('notifications.show')
                                        @if ($notification->auth_id != null)
                                            @if (!$hideShowButton)
                                                <a href="{{ route($notification->table_name . '.show', $notification->model_id) }}"
                                                    class="btn btn-sm btn-default text-info mr-1 float-right show-notification-button"
                                                    data-notification-id="{{ $notification->id }}"><i
                                                        class="fas fa-eye"></i></a>
                                            @endif
                                        @endif
                                    @endcan
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">
                    You have no notifications.
                </div>
            @endif
        </div>

        @can('notifications.mark-all-as-read')
            @if (count($notifications) > 0)
                <div class="card-footer">
                    <a href="{{ route('notifications.mark-all-as-read') }}" class="btn btn-sm btn-primary">Mark all as read</a>
                    <form action="{{ route('notifications.delete-all') }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger float-right" title="Delete"
                            onclick="return confirm('Are you sure you want to delete all notifications?')">Delete All</button>
                    </form>
                </div>
            @endif
        @endcan
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.mark-as-read').click(function(e) {
                e.preventDefault();

                var notificationId = $(this).data('notification-id'); // Updated to data() method.

                $.ajax({
                    url: '/notifications/mark-as-read/' + notificationId, // Provide the actual URL.
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        // Mark the notification as read on the client-side.
                        $('#notification-' + notificationId).addClass('read');
                        $('.mark-as-read[data-notification-id="' + notificationId + '"]')
                            .remove();
                    }
                });
            });
        });
    </script>
    <script>
        $(function() {
            // Add an event listener to the button that redirects the user to the 'notifications.show' route
            $('.show-notification-button').on('click', function(e) {
                e.preventDefault();

                // Get the notification ID
                var notificationId = $(this).data('notification-id');

                // Update the read_at column in the notification table
                $.ajax({
                    url: '/notifications/mark-as-read/' + notificationId,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        // Update the unread notification count
                        $('#unread-notifications-count').text(response.unread_count);

                        // Hide the notification from the dropdown menu
                        $('.notification[data-notification-id="' + notificationId + '"]')
                            .remove();
                    }
                });

                // Redirect the user to the notification details page
                window.location.href = $(this).attr('href');
            });
        });
    </script>
@endsection
