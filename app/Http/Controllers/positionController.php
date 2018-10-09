<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;

class positionController extends Controller
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
	 		->where('authentications.name','Position')
	 		->get();
        $names = [];
        foreach($auths as $auth)
		{
			$names[] = $auth->name ; 
		} 
		Auth::user()->authorizeRoles($names);
		$position = Position::where('deleted_at',NULL)->get();
    	return  view('settings.ezpp.hris.positions',compact('position'));
   	}
	public function store(Request $request){
		if(request()->has('id_edit')){
			$esID = $request['id_edit'];
			$edit_es = Position::where('id', $esID)->update([
	        'code'=>$request['code_edit'],
		 	'description'=>$request['description_edit'],
	        ]);
			return back()->with('success','Position Editted');
		}else{
			$position = new Position;
		 	$position->code=$request['code'];
		 	$position->description=$request['description'];
			$position->company_id = Auth::user()->company_id;
		 	$position->save();
	    	return back()->with('success','New Position Added');
		}
		
	}
     public function delete(Request $request){
		 $esId = $request['id_delete'];
	 		 $delete_es = Position::where('id', $esId)->update([
	         'deleted_at'  => Carbon::now()
	       ]);
    	 return back()->with('success','Position Deleted');
     }
}
