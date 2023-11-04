<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
// use Spatie\Permission\Models\Role;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Spatie\Permission\Models\Permission;
use App\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::whereNull('deleted_at')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view(config('system.paths.dashboard.base') . 'roles.index', compact('roles'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view(config('system.paths.dashboard.base') . 'roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required|array',
        ]);

        $role = Role::create([
            'name' => $request->get('name'),
            'created_by' => Auth::id(), // Set the creator
        ]);

        $role->syncPermissions($request->get('permission', []));

        return redirect()
            ->route('roles.index')
            ->withSuccess(__('Role created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions;

        return view(config('system.paths.dashboard.base') . 'roles.show', compact('role', 'rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        $permissions = Permission::get();

        return view(config('system.paths.dashboard.base') . 'roles.edit', compact('role', 'rolePermissions', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Role $role, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required|array',
        ]);

        $role->update([
            'name' => $request->get('name'),
            'updated_by' => Auth::id(), // Set the updater
        ]);

        $role->syncPermissions($request->get('permission', []));

        return redirect()
            ->route('roles.index')
            ->withSuccess(__('Role updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->update([
            'deleted_by' => Auth::id(), // Set the deleter
        ]);

        $role->delete();

        return redirect()
            ->route('roles.index')
            ->withSuccess(__('Role deleted successfully'));
    }
}
