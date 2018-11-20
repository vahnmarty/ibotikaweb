<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plus\Inventory;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Models\{Action, Activity};
use App\Repositories\Frontend\ActivityRepository;

class ProductController extends Controller
{

    public $activity;

    public function __construct(ActivityRepository $activityRepository)
    {
        $this->activity = $activityRepository;
    }

    public function search(Request $request)
    {

        if(session()->has('location')){
            $location = get_location();
            $data = Inventory::searchSortedByDistance($request->keyword, $location['latitude'], $location['longitude'])->paginate(5);
        }else{
            $data = Inventory::search($request->keyword)->paginate(5);
        }

        $this->activity->pharmacy_view($data, $request, $this->address(), $request->reference);
        $this->activity->medicine_view($request, $this->address(), $request->reference);
    	
        $related_drugs = [];

        if($request->reference){
            $related_drugs = json_decode($this->related_drugs($request->keyword));     
        }        

    	return view('frontend.products.result', compact('data', 'request', 'related_drugs'));

    }

    public function show(Inventory $product, Request $request)
    {       
        if($product->reference){
            $details = json_decode($this->details($product->reference));
        }
        $related_drugs = json_decode($this->related_drugs($product->product));       

        $branch = $product->branch_id;
        $this->activity->pharmacy_click($branch, $request, $this->address(), $product->reference);
        $this->activity->product_click($product, $request, $this->address(), $product->reference);

    	return view('frontend.products.show', compact('request', 'details', 'related_drugs'))->withData($product);
    }

    public function detail(Request $request)
    {        
        //$this->activity->details_click($request, $this->address());

        $details = json_decode($this->details($request->reference));
        $related_drugs = json_decode($this->related_drugs($request->product)); 

        return view('frontend.products.details', compact('request', 'details', 'related_drugs'));
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

    public function address(){
        $address = null;
        if(session()->has('location'))
            $address = get_address();

        return $address;
    }

    

}
