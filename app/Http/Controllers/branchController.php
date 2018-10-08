<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use DB;
use App\company;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class branchController extends Controller
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
		->where('authentications.name','Branch')
		->get();

<<<<<<< HEAD
        $names = [];
        foreach($auths as $auth)
    {
      $names[] = $auth->name ; 
    } 
    Auth::user()->authorizeRoles($names); 
    $company_id = Auth::user()->company_id;
        $branch = DB::table('company')
         ->join('branch' , 'company.id', '=','branch.company_id')
         ->select('company.name as name2','branch.name','branch.code','branch.id')
         ->where('branch.deleted_at',NULL)
         ->where('branch.company_id',$company_id)
         ->get();
       $company = company::where('deleted_at',NULL)->get();
      
	 return view('settings.general_settings.branches',compact('branch','company'));
   }
=======
		$names = [];
		foreach($auths as $auth)
		{
			$names[] = $auth->name ; 
		} 
		Auth::user()->authorizeRoles($names); 
		$company_id = Auth::user()->company_id;
		$branch = DB::table('company')
		->join('branch' , 'company.id', '=','branch.company_id')
		->select('company.name as name2','branch.name','branch.code','branch.id')
		->where('branch.deleted_at',NULL)
		->where('branch.company_id',$company_id)
		->get();
>>>>>>> a80c333d7a3e2f4c785acebcdb01df31d2cf4488

		$company = company::where('deleted_at',NULL)->get();
		return view('settings.general_settings.branches',compact('branch','company'));
	}

<<<<<<< HEAD
   public function delete(Request $request){
     $branchID = $request['branch_id_delete'];
   	 $delete_branch = Branch::where('id', $branchID)->update([
           'deleted_at' =>  Carbon::now()
        ]);
       return back()->with('success','Deleted Successfully');
   }
=======
	public function store(Request $request){
		if (request()->has('branch_id_edit')){
			$branchID = $request['branch_id_edit'];
			$update_branch = Branch::where('id', $branchID)->update([
				'name'=>$request['branch_name_edit'],
				'code'=>$request['branch_code_edit'],
				'company_id'=>$request['company_id_edit'] 
			]);
			return back()->with('success','Branch Editted');
		}
		else{
			$branch = new Branch;
			$branch->name=$request['branch_name'];
			$branch->code=$request['branch_code'];
			$branch->company_id=$request['company_id'];
			$branch->save();

			return back()->with('success','New Branch Created');
		}
	}

	public function delete(Request $request){
		$branchID = $request['batches_id_delete'];

		$delete_branch = Branch::where('id', $branchID)->update([
			'deleted_at' =>  Carbon::now()
		]);
		return back()->with('success','Deleted Successfully');
	}
>>>>>>> a80c333d7a3e2f4c785acebcdb01df31d2cf4488
}
