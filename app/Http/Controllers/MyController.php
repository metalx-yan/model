<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public fungtion store(Request $request) 
    {
    	$this->validate($request, [
		'name' => 'required',
		'age' => 'required|numeric|min:20'
		]);


    }
}
