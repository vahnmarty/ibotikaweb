<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plus\Inventory;

class ProductController extends Controller
{
    public function search(Request $request)
    {
    	$location = get_location();
    	$data = Inventory::searchSortedByDistance($request->keyword, $location['latitude'], $location['longitude'])->paginate(5);
    	return view('frontend.products.result', compact('data', 'request'));

    }

    public function show(Inventory $product, Request $request)
    {
    	return view('frontend.products.show', compact('request'))->withData($product);
    }
}
