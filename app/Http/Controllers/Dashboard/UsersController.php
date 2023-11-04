<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display all users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve only users where deleted_at is null
        $users = User::latest()
            ->whereNull('deleted_at')
            ->get();

        return view(config('system.paths.dashboard.base') . 'users.index', compact('users'));
    }

    /**
     * Show form for creating user
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(config('system.paths.dashboard.base') . 'users.create');
    }

    /**
     * Store a newly created user
     *
     * @param User $user
     * @param StoreUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        // For demo purposes only. When creating a user or inviting a user
        // You should create a generated random password and email it to the user
        $user = new User(
            array_merge($request->validated(), [
                'password' => '1234',
                'created_by' => Auth::id(), // Set the creator
            ]),
        );

        $user->save();

        return redirect()
            ->route('users.index')
            ->withSuccess(__('User created successfully.'));
    }

    /**
     * Show user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view(config('system.paths.dashboard.base') . 'users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Edit user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view(config('system.paths.dashboard.base') . 'users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get(),
        ]);
    }

    /**
     * Update user data
     *
     * @param User $user
     * @param UpdateUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        $user->update($request->validated());
        $user->syncRoles($request->get('role'));
        $user->updated_by = Auth::id(); // Set the updater
        $user->save();

        return redirect()
            ->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Delete user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->deleted_by = auth()->id(); // Set the user who deleted
        $user->save();
        $user->delete();

        return redirect()
            ->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }

    /**
     * Force delete a log entry.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($id)
    {
        DB::transaction(function () use ($id) {
            $user = User::withTrashed()->findOrFail($id);
            $user->forceDelete();
        });

        return redirect()
            ->route('users.index')
            ->withSuccess(__('User permanently deleted.'));
    }
}
