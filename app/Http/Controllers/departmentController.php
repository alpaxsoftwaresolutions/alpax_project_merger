<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class departmentController extends Controller
{
	public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(){
		$auths = DB::table('authentication_items')
	 		->join('authentications' , 'auth_id', '=','authentications.id')
	 		->join('roles' , 'authentication_items.role', '=','roles.id')
	 		->select('roles.name')
	 		->where('authentications.deleted_at',NULL)
	 		->where('authentications.name','Departments')
	 		->get();
        $names = [];
        foreach($auths as $auth)
		{
			$names[] = $auth->name ; 
		} 
		Auth::user()->authorizeRoles($names);
    	$department = Department::where('deleted_at',NULL)->get();
		return view('settings.ezpp.hris.departments',compact('department'));
    }
    public function store(Request $request){
    	if(request()->has('department_id_edit')){
			 $deptId = $request['department_id_edit'];
	 		 $update_auths = Department::where('id', $deptId)->update([
	         'name'  => $request['department_name_edit'],
	         'description' =>  $request['department_description_edit']
	       ]);
	 		return back()->with('success','Department Editted');
    	}else{
    		$department = new Department;
		 	$department->name=$request['code'];
		 	$department->description=$request['description'];
		 	$department->save();
	    	return back()->with('success','New Department Added');
    	}
			
    }
    public function delete(Request $request){
    	 $deptId = $request['department_id_delete'];
	 		 $delete_auths = Department::where('id', $deptId)->update([
	         'deleted_at'  => Carbon::now()
	       ]);
    	 return back()->with('success','Department Deleted');
    }
}
