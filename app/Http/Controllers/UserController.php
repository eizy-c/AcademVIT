<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('haveaccess','user.index');
        $users =  User::with('roles')->orderBy('id','Desc')->paginate(10);

        return view('user.index',compact('users'));
    }

    public function show(User $user)
    {
        $this->authorize('view', [$user, ['user.show','userown.show'] ]);
        $roles= Role::orderBy('name')->get();
        return view('user.show', compact('roles', 'user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', [$user, ['user.edit','userown.edit'] ]);
        $roles= Role::orderBy('name')->get();
        return view('user.edit', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'          => 'required|max:50|unique:users,name,'.$user->id,
            'email'         => 'required|max:50|unique:users,email,'.$user->id            
        ]);

        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('user.index')->with('status_success','Usuario actualizado satisfactoriamente.');
    }

    public function destroy(User $user)
    {
        $this->authorize('haveaccess','user.destroy');
        $user->delete();

        return redirect()->route('user.index')->with('status_success','Usuario eliminado satisfactoriamente.');
    }
}
