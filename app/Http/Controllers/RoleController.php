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
		    return view('settings.user_management.roles',compact('roles'));
    }

    public function store(Request $request)
    {   
      if (request()->has('role_id_edit')){
        $roleId = $request['role_id_edit'];
        $roleversion =  role::where('id', '=', $roleId )->pluck('version')->first();
        $update_role = role::where('id', $roleId)->update([
          'name' => $request['role_name_edit'],
          'updated_at' => Carbon::now(),
          'version'=> ($roleversion + 1)
        ]);
        return back()->with('success','Role Editted'); 
      }else{
        $role = new role;
        $role->name = $request['role_name'];
        $role->created_at = Carbon::now();
        $role->updated_at = Carbon::now();
        $role->version="1";
        $role->save();
        return back()->with('success','New Role Added'); 
      }                                                                                                                                   

    }
    public function delete($roleId){
     	$delete_role = role::where('id', $roleId)->update([
          	'deleted_at'=> Carbon::now()
        ]);
     	$roles = role::where('deleted_at', '=', NULL )->get();
		   return back()->with('success','Role Deleted Successfully'); 
   }
}
