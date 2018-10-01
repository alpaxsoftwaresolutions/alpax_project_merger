<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function insert_module(){
    	return view('pages.insert_module')->with('title','Insert Module');
    }
}
