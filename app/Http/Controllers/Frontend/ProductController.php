<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plus\Inventory;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        if(session()->has('location')){
            $location = get_location();
            $data = Inventory::searchSortedByDistance($request->keyword, $location['latitude'], $location['longitude'])->paginate(5);
        }else{
            $data = Inventory::search($request->keyword)->paginate(5);
        }
    	
    	return view('frontend.products.result', compact('data', 'request'));

    }

    public function show(Inventory $product, Request $request)
    {       
        if($product->reference){
            $details = json_decode($this->details($product->reference));
        }
        $related_drugs = json_decode($this->related_drugs($product->product));       

    	return view('frontend.products.show', compact('request', 'details', 'related_drugs'))->withData($product);
    }

    public function details($reference){
        $url = api_url(). '/mims/details?reference=' . $reference;
        $client = new Client(); 
        $result = $client->get($url);
        return $result->getBody();
    }

    public function related_drugs($product, $max = 5){
        $url = api_url().'/mims/related/'. $max .'?name=' . rawurlencode($product);
        $client = new Client(); 
        $result = $client->get($url);
        return $result->getBody();
    }
}
