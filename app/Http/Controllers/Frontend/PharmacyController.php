<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plus\{Pharmacy, Branch};

class PharmacyController extends Controller
{
	public function show(Branch $branch, $slug, Request $request)
	{
		$nearby = Branch::nearby($branch->latitude, $branch->longitude)->where('branches.id', '!=', $branch->id)->get()->take(5);;

		return view('frontend.pharmacy.show', compact('branch', 'nearby'));
	}

}
