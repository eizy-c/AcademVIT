<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RoleController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        Gate::authorize('haveaccess', 'role.index');
        $permissions = Permission::get();
        $roles = Role::orderBy('id', 'desc')->paginate();
        
        return view('admin.roles.index', compact('roles', 'permissions'));
    }
    
    public function store(StoreRoleRequest $request): RedirectResponse
    {
        // Authorization is handled in StoreRoleRequest
        // Validation is handled in StoreRoleRequest

        $role = Role::create($request->validated());

        if ($request->has('permission')) {
            $role->permissions()->sync($request->input('permission'));
        }

        return redirect()->route('role.index')->with('success', 'Rol registrado satisfactoriamente.');
    }

    public function edit(Role $role): View
    {
        $this->authorize('haveaccess', 'role.edit');

        $permission_role = $role->permissions->pluck('id')->toArray();
        $permissions = Permission::get();
        
        return view('admin.roles.edit', compact('role', 'permissions', 'permission_role'));
    }

    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        // Authorization is handled in UpdateRoleRequest
        // Validation is handled in UpdateRoleRequest

        $role->update($request->validated());

        if ($request->has('permission')) {
            $role->permissions()->sync($request->input('permission'));
        } else {
            $role->permissions()->sync([]);
        }

        return redirect()->route('role.index')->with('success', 'Rol actualizado satisfactoriamente.');
    }

    public function destroy(Role $role): RedirectResponse
    {
        $this->authorize('haveaccess', 'role.destroy');

        if ($role->users()->count() >= 1) {
            return redirect()->route('role.index')->with('danger', 'Este rol se encuentra en uso.');
        }

        $role->delete();
        return redirect()->route('role.index')->with('success', 'Rol eliminado satisfactoriamente.');
    }
}
