<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\User;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $this->authorize('haveaccess', 'user.index');
        $users = User::with('roles')->orderBy('id', 'Desc')->paginate(10);

        return view('user.index', compact('users'));
    }

    public function show(User $user): View
    {
        $this->authorize('view', [$user, ['user.show', 'userown.show']]);
        $roles = Role::orderBy('name')->get();
        
        return view('user.show', compact('roles', 'user'));
    }

    public function edit(User $user): View
    {
        $this->authorize('update', [$user, ['user.edit', 'userown.edit']]);
        $roles = Role::orderBy('name')->get();
        
        return view('user.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $this->authorize('update', [$user, ['user.edit', 'userown.edit']]);

        $user->update($request->validated());

        if ($request->has('roles')) {
            $user->roles()->sync($request->input('roles'));
        } else {
            $user->roles()->sync([]);
        }
        
        return redirect()->route('user.index')->with('status_success', 'Usuario actualizado satisfactoriamente.');
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->authorize('haveaccess', 'user.destroy');
        $user->delete();

        return redirect()->route('user.index')->with('status_success', 'Usuario eliminado satisfactoriamente.');
    }
}
