<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role = Role::create(['name' => 'product manager']);
        // $permission = Permission::create(['name' => 'edit product']);
        // $permission = Permission::create(['name' => 'destroy product']);
       // $role = Role::findById(1);
       // $permission = Permission::findById(14);
       // $role->givePermissionTo($permission);
        // auth()->user()->assignRole('product manager');
        // auth()->user()->givePermissionTo('create products');
        return view('home');
    }
}
