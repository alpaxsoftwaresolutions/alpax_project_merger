<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Permission;
use App\Role;
use App\RoleUser;
use App\User;

class RoleController extends Controller
{
     public function index()
    {
        $roles=Role::all();
        $role_user_table=RoleUser::all();
        $permissions=Permission::all();
        $users = User::pluck('empID', 'user_id');
        
        return view('pages.role',compact('roles', 'permissions', 'role_user_table', 'users'));
    }
}
