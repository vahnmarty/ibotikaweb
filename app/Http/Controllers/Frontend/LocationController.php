<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function store(Request $request){
    	session()->put('location', $request->except('_token'));
    	$data = session()->get('location');
    	return $data;
    }
}
