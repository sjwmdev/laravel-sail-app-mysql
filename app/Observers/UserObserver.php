<?php

// namespace App\Observers;

// use App\Models\Log;
// use App\Models\User;

// class UserObserver
// {
//     /**
//      * Handle the User "created" event.
//      */
//     public function created(User $user): void
//     {
//         $log = new Log();
//         $log->action = 'created';
//         $log->user_id = auth()->id();
//         $log->table_name = 'users';
//         $log->row_id = $user->id;
//         $log->old_data = json_encode([]);
//         $log->new_data = json_encode($user->getAttributes());

//         $log->request_url = request()->fullUrl();
//         $log->request_method = request()->method();
//         // $log->status_code = response()->getStatusCode();
//         $log->remote_address = request()->ip();
//         $log->path = request()->path();
//         $log->host = request()->getHttpHost();

//         $log->save();
//     }

//     /**
//      * Handle the User "updated" event.
//      */
//     public function updated(User $user): void
//     {
//         $log = new Log();
//         $log->action = 'updated';
//         $log->user_id = auth()->id();
//         $log->table_name = 'users';
//         $log->row_id = $user->id;
//         $log->old_data = json_encode($user->getOriginal());
//         $log->new_data = json_encode($user->getAttributes());

//         $log->request_url = request()->fullUrl();
//         $log->request_method = request()->method();
//         // $log->status_code = response()->getStatusCode();
//         $log->remote_address = request()->ip();
//         $log->path = request()->path();
//         $log->host = request()->getHttpHost();

//         $log->save();
//     }

//     /**
//      * Handle the User "deleted" event.
//      */
//     public function deleted(User $user): void
//     {
//         $log = new Log();
//         $log->action = 'deleted';
//         $log->user_id = auth()->id();
//         $log->table_name = 'users';
//         $log->row_id = $user->id;
//         $log->old_data = json_encode($user->getOriginal());
//         $log->new_data = json_encode([]); // No new data available for a deleted user

//         $log->request_url = request()->fullUrl();
//         $log->request_method = request()->method();
//         // $log->status_code = response()->getStatusCode();
//         $log->remote_address = request()->ip();
//         $log->path = request()->path();
//         $log->host = request()->getHttpHost();

//         $log->save();
//     }

//     /**
//      * Handle the User "restored" event.
//      */
//     public function restored(User $user): void
//     {
//         $log = new Log();
//         $log->action = 'restored';
//         $log->user_id = auth()->id();
//         $log->table_name = 'users';
//         $log->row_id = $user->id;
//         $log->old_data = json_encode([]);
//         $log->new_data = json_encode($user->getAttributes());

//         $log->request_url = request()->fullUrl();
//         $log->request_method = request()->method();
//         // $log->status_code = response()->getStatusCode();
//         $log->remote_address = request()->ip();
//         $log->path = request()->path();
//         $log->host = request()->getHttpHost();

//         $log->save();
//     }

//     /**
//      * Handle the User "force deleted" event.
//      */
//     public function forceDeleted(User $user): void
//     {
//         $log = new Log();
//         $log->action = 'force_deleted';
//         $log->user_id = auth()->id();
//         $log->table_name = 'users';
//         $log->row_id = $user->id;
//         $log->old_data = json_encode($user->getOriginal());
//         $log->new_data = json_encode([]); // No new data available for a force deleted user

//         $log->request_url = request()->fullUrl();
//         $log->request_method = request()->method();
//         // $log->status_code = response()->getStatusCode();
//         $log->remote_address = request()->ip();
//         $log->path = request()->path();
//         $log->host = request()->getHttpHost();

//         $log->save();
//     }
// }
