<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index(){
		
		return view('admin.layouts.default');
	}
	public function brandcreate(){
		
		return view('admin.brand.create');
	}

    
}
