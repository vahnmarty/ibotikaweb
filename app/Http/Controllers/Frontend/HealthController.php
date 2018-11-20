<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{
    public function search(Request $request)
    {
    	return view('frontend.health.search', compact('request'));
    }
}
