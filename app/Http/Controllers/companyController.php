<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;
use Carbon\Carbon;
class companyController extends Controller
{
	public function index(){
		$company =  company::where('deleted_at',NULL)->get();
    	return view('settings.company_profile',compact('company'));
	}
	public function store(Request $request){
		if(request()->has('company_id_edit')){
			$companyID = $request['company_id_edit'];
			$edit_company = company::where('id', $companyID)->update([
	        'name'=>$request['company_name'],
		 	'Unit'=>$request['company_unit'],
		 	'Bldg'=>$request['company_bldg'],
		 	'Street'=>$request['company_street'],
		 	'City'=>$request['company_city'],
		 	'Province'=>$request['company_province'],
		 	'ZIP_Code'=>$request['company_zip'],
		 	'Country'=>$request['company_country'],
		 	'Contact_Person'=>$request['company_contact'],
		 	'Telephone'=>$request['company_telephone'],
		 	'Mobile'=>$request['company_mobile'],
		 	'Website'=>$request['company_website'],
		 	'Email'=>$request['company_email'],
		 	'Tin'=>$request['company_tin'],
		 	'SSS'=>$request['company_sss'],
		 	'Pagibig'=>$request['company_pagibig'],
		 	'Philhealth'=>$request['company_philhealth']
	        ]);
			return back()->with('success','Company Editted');
		}else{
			$company = new company;
		 	$company->name=$request['company_name'];
		 	$company->Unit=$request['company_unit'];
		 	$company->Bldg=$request['company_bldg'];
		 	$company->Street=$request['company_street'];
		 	$company->City=$request['company_city'];
		 	$company->Province=$request['company_province'];
		 	$company->ZIP_Code=$request['company_zip'];
		 	$company->Country=$request['company_country'];
		 	$company->Contact_Person=$request['company_contact'];
		 	$company->Telephone=$request['company_telephone'];
		 	$company->Mobile=$request['company_mobile'];
		 	$company->Website=$request['company_website'];
		 	$company->Email=$request['company_email'];
		 	$company->Tin=$request['company_tin'];
		 	$company->SSS=$request['company_sss'];
		 	$company->Pagibig=$request['company_pagibig'];
		 	$company->Philhealth=$request['company_philhealth'];
		 	$company->save();
	    	return back()->with('success','New Company Added');
		}
		
	}
     public function delete(Request $request){
		 $cmpId = $request['company_id_delete'];
	 		 $delete_auths = company::where('id', $cmpId)->update([
	         'deleted_at'  => Carbon::now()
	       ]);
    	 return back()->with('success','Company Deleted');
     }
}
