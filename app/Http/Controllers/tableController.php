<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class tableController extends Controller
{		

    public function create()
    {
    	return view('pages.database.create');
    }
    public function store(Request $request)
    {
    	$name = $request['database_name'];
    	
    	Schema::create($name, function($table, $coliumn2_name)
		{
		    $table->increments('id');
		   
		});
		return view('pages.database.create');
    }
}
