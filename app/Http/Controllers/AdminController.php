<?php

namespace App\Http\Controllers;

use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function createRoleForm()
    {
        return view('admin.roles.createRole');
    }

    public function saveRole()
    {
        //Validation allready exists in Spatie (need to handle errors)
        //Role & Permission model is located in vendor/spatie

        $role = Role::create([
            'name' => request('role'),
        ]);

        return back();
    }

    public function showRoles()
    {
        $roles = Role::get();

        return view('admin.roles.showRoles', compact('roles'));
    }

    public function createPermissionForm()
    {
        return view('admin.permissions.createPermission');
    }

    public function savePermission()
    {
        $permission = Permission::create([
            'name' => request('permission'),
        ]);

        return back();
    }

    public function showPermissions()
    {
        $permissions = Permission::get();

        return view('admin.permissions.showPermissions', compact('permissions'));
    }

    public function assignPermissionToRoleForm()
    {
        $roles       = Role::get();
        $permissions = Permission::get();

        return view('admin.assignPermissionToRole', compact('roles', 'permissions'));
    }

    public function savePermissionsToRole()
    {
        $role_id       = request('role_id');
        $permission_id = request('permission_id');
        $role          = Role::findById($role_id);
        $permission    = Permission::findById($permission_id);
        $role->givePermissionTo($permission);
    }

    public function userSettings()
    {

        $users = User::get();
        return view('admin.userSettings', compact('users'));


    }

    public function assignRoleToUserForm($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();

        return view('admin.roles.assignRoleToUser', compact('user', 'roles'));


    }

    public function saveRoleToUser($id)
    {
        $role_id=request('role_id');
        $role          = Role::findById($role_id);
        $user = User::findOrFail($id);

        $user->assignRole($role);


    }


}
