<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Authentication;
use App\role;
use Carbon\Carbon;

class RoleController extends Controller
{
    public function index()
    {
        $roles = role::where('deleted_at', '=', NULL )->get();
		return view('pages.role.view',compact('roles'));
    }
    public function create()
    {
    	return view('pages.role.form');
    }
    public function store(Request $request)
    {
    	$user = $request->user();
    	$role = new role;

	 	$role->name = $request['role_name'];
	 	$role->created_at = Carbon::now();
	 	$role->updated_at = Carbon::now();
	 	$role->updated_by= $user;
	 	$role->version="1";
	 	$role->save();
	 	$roles = role::where('deleted_at', '=', NULL )->get();
		return view('pages.role.view',compact('roles'));
    }
     public function edit($roleId)
    {
    	$role =  role::where('id', '=', $roleId )->get();
    	return view('pages.role.edit',compact('role'));
    }
    public function update(Request $request,$roleId)
    {

    	$roleversion =  role::where('id', '=', $roleId )->pluck('version')->first();
    	$update_role = role::where('id', $roleId)->update([
          	'name' => $request['role_name_edit'],
		 	'updated_at' => Carbon::now(),
		 	'version'=> ($roleversion + 1)
        ]);
	 	$roles = role::where('deleted_at', '=', NULL )->get();
		return view('pages.role.view',compact('roles'));
    }
     public function delete($roleId){
     	$delete_role = role::where('id', $roleId)->update([
          	'deleted_at'=> Carbon::now()
        ]);
     	$roles = role::where('deleted_at', '=', NULL )->get();
		return view('pages.role.view',compact('roles'));
     }
}
