<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plus\{Pharmacy, Branch};

class PharmacyController extends Controller
{

	public function autocomplete(Request $request)
	{
		$data = Pharmacy::join('branches', 'branches.pharmacy_id', 'pharmacies.id')
		->select('pharmacies.*', 'branches.name as branch', 'address1')
		->where('pharmacies.name', 'LIKE', '%' . $request->keyword . '%')
		->orWhere('branches.name', 'LIKE', '%' . $request->keyword . '%')
		->orWhere('address1', 'LIKE', '%' . $request->keyword . '%')
		->get();

		return $data;
	}

	public function show(Branch $branch, $slug, Request $request)
	{
		$nearby = Branch::nearby($branch->latitude, $branch->longitude)->where('branches.id', '!=', $branch->id)->get()->take(5);;

		return view('frontend.pharmacy.show', compact('branch', 'nearby'));
	}

}
