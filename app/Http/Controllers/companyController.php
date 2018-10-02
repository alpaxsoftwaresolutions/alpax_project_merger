<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;

class companyController extends Controller
{
	public function index(){
		$company =  company::all();
    	return view('pages.company.view',compact('company'));
	}
	public function create(){
		return view('pages.company.form');
	}
	public function store(){
		$company = new company;

	 	$company->name=$request['auth_name'];
	 	$company->order_id=$request['auth_order'];
	 	$company->icon=$request['auth_icon'];
	 	$company->parent_id=$request['auth_parent'];
	 	$company->path=$request['auth_path'];
	 	$company->save();
	}
    public function edit($companyID)
    {
    	$company =  company::where('id', $companyID)->get();
    	return view('pages.company.edit',compact('company'));
    }
    public function update(Request $request,$companyID)
    {
    	$company =  company::all();
		return view('pages.company.view',compact('company'));
    }
     public function delete($companyID){

     	$company =  company::all();
		return view('pages.company.view',compact('company'));
     }
}
