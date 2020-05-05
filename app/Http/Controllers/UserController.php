<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
// use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::paginate(5);
    	return view('users.index', compact('users'));
    }

    public function show($id)
    {
    	$user = User::findOrFail($id);
    	return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $roles = Role::get();
        $user = User::findOrFail($id);
        return view('users.edit', compact('roles', 'user'));
    }

    public function update(User $user)
    {
         request()->validate([
            'name' => 'required|min:2'
        ]);
        $user->update([
            'name' => request('name')
        ]);
        //actualizar roles
        $user->roles()->sync(request()->get('roles'));
        // $role = Role::findById(3);
        // $permission = Permission::findById(11);
        // $role->givePermissionTo($permission);
        return redirect()->route('users.index')->with('status', ' El usuario se ha actualizado con exito');
    }


}
