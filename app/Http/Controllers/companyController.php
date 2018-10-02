<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;

class companyController extends Controller
{
	public function index(){
		$company =  company::all()->get();
    	return view('pages.company.view',compact('company'));
	}
    public function edit($companyID)
    {
    	$company =  company::where('id', $companyID)->get();
    	return view('pages.company.edit',compact('company'));
    }
    public function update(Request $request,$companyID)
    {
    	$company =  company::all()->get();
		return view('pages.company.view',compact('company'));
    }
     public function delete($companyID){
     	$company =  company::all()->get();
		return view('pages.company.view',compact('company'));
     }
}
