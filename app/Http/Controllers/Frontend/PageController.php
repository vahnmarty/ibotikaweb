<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function browse()
    {
    	return view('frontend.pages.browse');
    }

    public function news()
    {
    	return view('frontend.pages.news');
    }

    public function events()
    {
    	return view('frontend.pages.events');
    }

    public function blog()
    {
    	return view('frontend.pages.blog');
    }

    public function about()
    {
    	return view('frontend.pages.about');
    }

    public function search(Request $request)
    {
        switch ($request->type) 
        {
            case 'medicines':
                $url = url('/product/search') . '?keyword=' . $request->medicine . '&reference=' . $request->reference ;
                break;

            case 'pharmacies':
                $url = url('/pharmacy/search?') ;
                break;

            case 'diseases':
                $url = url('/health/search?');
                break;
            
            default:
                $url = url('/product/search?');
                break;
        }

        return redirect($url);
    }
}
