<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Role & Permission model is located in vendor/spatie
        //$role = Role::create(['name' => 'writer']);
        //$permission = Permission::create(['name' => 'edit articles']);
        //$role = Role::findById(1);
        //$permission = Permission::findById(5);
        //$role->givePermissionTo($permission); //writer can edit articles
       // auth()->user()->givePermissionTo('edit articles');
       // $permissions = auth()->user()->getDirectPermissions();
        //dd($permissions);
        return view('home');
    }
}
