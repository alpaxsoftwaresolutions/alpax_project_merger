<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empstatus;
use Carbon\Carbon;

class empstatusController extends Controller
{
   	public function index(){
		$status =  empstatus::where('deleted_at',NULL)->get();
    	return  view('settings.ezpp.hris.employment_status',compact('status'));
	}
	public function store(Request $request){
		if(request()->has('es_id_edit')){
			$esID = $request['es_id_edit'];
			$edit_es = empstatus::where('id', $esID)->update([
	        'code'=>$request['es_code_edit'],
		 	'description'=>$request['es_description'],
	        ]);
			return back()->with('success','Employment Status Editted');
		}else{
			$empstatus = new empstatus;
		 	$empstatus->code=$request['es_code'];
		 	$empstatus->description=$request['es_description'];
		 	$empstatus->save();
	    	return back()->with('success','New Employment Status Added');
		}
		
	}
     public function delete(Request $request){
		 $esId = $request['violations_id_delete'];
	 		 $delete_es = empstatus::where('id', $esId)->update([
	         'deleted_at'  => Carbon::now()
	       ]);
    	 return back()->with('success','Employment Status Deleted');
     }
}
