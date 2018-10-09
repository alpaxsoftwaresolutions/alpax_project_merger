<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class batchController extends Controller
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
	 		->where('authentications.name','Batches')
	 		->get();

        $names = [];
        foreach($auths as $auth)
		{
			$names[] = $auth->name ; 
		} 
		Auth::user()->authorizeRoles($names);
		$company_id = Auth::user()->company_id;
		$batch =  Batch::where('deleted_at',NULL)->where('company_id', $company_id)->get();
    	return view('settings.ezpp.hris.batches',compact('batch'));
	}
	public function store(Request $request){
		if(request()->has('batches_id_edit')){
			$companyID = $request['batches_id_edit'];
			$edit_company = Batch::where('id', $companyID)->update([
				'name'=>$request['code_edit'],
		 		'description'=>$request['description_edit']
		 ]);
			return back()->with('success','Batch Editted');
		}else{
			$batch = new Batch;
			$batch->name=$request['code_view'];
		 	$batch->description=$request['description_view'];
		 	$batch->company_id=Auth::user()->company_id;
		 	$batch->save();
	    	return back()->with('success','New Batch Added');
		}
	}
	 public function delete(Request $request){
		 $cmpId = $request['batches_id_delete'];
	 		 $delete_auths = Batch::where('id', $cmpId)->update([
	         'deleted_at'  => Carbon::now()
	       ]);
    	 return back()->with('success','Batch Deleted');
     }
}
