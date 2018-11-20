@extends('frontend.layouts.app')

@section('title', app_name() . ' | Diseases')

@section('content')
<div class="page-content">

	<div class="feature">
	    <div class="">
	        <h4 class="font-bold mb16">{{ $request->keyword }} 
			</h4>
	        
	        <hr class="pink-line">
	    </div>
	    <div class="feature  boxed p10 ">

	        <div class="row">
	        	<div class="col-sm-9 p20">
	        		<p class="text-danger">Sorry, we have not yet implemented this feature.</p>
	            </div>
	        </div>
	    </div>
	    
	</div>

    <div class="text-center mt48">
    	<a href=""><img src="../../img/ad-1.jpg"> </a>
    </div>
</div>
@endsection