<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\violations;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class violationsController extends Controller
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
          ->where('authentications.name','Violation')
          ->get();
            $names = [];
            foreach($auths as $auth)
        {
          $names[] = $auth->name ; 
        } 
        Auth::user()->authorizeRoles($names);
		$violations =  violations::where('deleted_at',NULL)->get();
    	return  view('settings.ezpp.hris.violations',compact('violations'));
	}
	public function store(Request $request){
		if(request()->has('violations_id_edit')){
			$esID = $request['violations_id_edit'];
			$edit_es = violations::where('id', $esID)->update([
	        'code'=>$request['code_violations_edit'],
		 	'description'=>$request['description_violations_edit'],
	        ]);
			return back()->with('success','Violations Editted');
		}else{
			$violations = new violations;
		 	$violations->code=$request['violations_code'];
		 	$violations->description=$request['violations_description'];
		 	$violations->save();
	    	return back()->with('success','New Violation Added');
		}
		
	}
     public function delete(Request $request){
		 $esId = $request['violations_id_delete'];
	 		 $delete_es = violations::where('id', $esId)->update([
	         'deleted_at'  => Carbon::now()
	       ]);
    	 return back()->with('success','Violations Deleted');
     }
}
