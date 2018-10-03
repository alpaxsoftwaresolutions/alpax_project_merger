<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class branchController extends Controller
{
   public function index(){
   	 $branch = Branch::where('deleted_at',NULL)->get();
	 return view('pages.branch.view',compact('branch'));
   }
   public function create(){
   	return view('pages.branch.form');
   }
   public function store(Request $request){
   	 $branch = Branch::where('deleted_at',NULL)->get();
	 return view('pages.branch.view',compact('branch'));
   }
   public function edit($branchID){
   }
   public function update($branchID,Request $request){
   	 $branch = Branch::where('deleted_at',NULL)->get();
	 return view('pages.branch.view',compact('branch'));
   }
   public function delete($branchID){
   	 $branch = Branch::where('deleted_at',NULL)->get();
	 return view('pages.branch.view',compact('branch'));
   }
}
