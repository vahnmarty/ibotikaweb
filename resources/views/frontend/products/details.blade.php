@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . $request->product)

@section('content')
<div class="page-content">

	<div class="feature">
	    <div class="">
	        <h4 class="font-bold mb16">{{ $request->product }} </h4>
	        
	        <hr class="pink-line">
	    </div>
	    <div class="feature  boxed p10 ">

	        <div class="row">

	        	<div class="col-sm-9 p20">
	        		
	        		<h5 class="type--bold mb0">Contents</h5>
	        		<p class="">{!! $details->details->BRIEFMONO->BC !!}</p>

	        		@if(!is_array($details->details->BRIEFMONO->BI))
	        		<h5 class="type--bold mb0">Indications / Uses</h5>
	        		<p class="">{!! $details->details->BRIEFMONO->BI !!}</p>
	        		@endif

	        		@auth
	                	@isset($details)
	                	<div id="details">
	                		<h4>Source: <a href="http://www.mims.com" target="_blank">MIMS</a></h4>
	                		<h5 class="type--bold mb-0">Manufacturer</h5>
	                		<p>{{ $details->company[0]->name }}</p>

	                		<h5 class="type--bold mb-0">Distributor</h5>
	                		<p>{{ $details->company[1]->name }}</p>

	                		@if(isset($details->details->MONOGRAPH))
	                		    @if(!is_array($details->details->MONOGRAPH->GDOSE))
	                		    <h5 class="type--bold mb-0">Dosage / Direction for Use</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GDOSE !!}</p>
	                		    @endif

	                		    @if(!is_array($details->details->MONOGRAPH->GPPPA))
	                		    <h5 class="type--bold mb-0">Administration</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GPPPA !!}</p>
	                		    @endif
	                		    
	                		    @if(!is_array($details->details->MONOGRAPH->GCI))
	                		    <h5 class="type--bold mb-0">Contraindications</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GCI !!}</p>
	                		    @endif

	                		    @if(!is_array($details->details->MONOGRAPH->GSP))
	                		    <h5 class="type--bold mb-0">Special Precautions</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GSP !!}</p>
	                		    @endif

	                		    @if(!is_array($details->details->MONOGRAPH->GAR))
	                		    <h5 class="type--bold mb-0">Side Effects / Adverse Reactions</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GAR !!}</p>
	                		    @endif

	                		    @if(!is_array($details->details->MONOGRAPH->GDI))
	                		    <h5 class="type--bold mb-0">Interactions</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GDI !!}</p>
	                		    @endif

	                		    @if(!is_array($details->details->MONOGRAPH->GATC1))
	                		    <h5 class="type--bold mb-0">ATC1 Classification</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GATC1 !!}</p>
	                		    @endif

	                		    @if(!is_array($details->details->MONOGRAPH->GCLS))
	                		    <h5 class="type--bold mb-0">MIMS Class</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GCLS !!}</p>
	                		    @endif

	                		    @if(!is_array($details->details->MONOGRAPH->GATC2))
	                		    <h5 class="type--bold mb-0">ATC2 Classification</h5>
	                		    <p>{!! $details->details->MONOGRAPH->GATC2 !!}</p>
	                		    @endif
	                		@endif
	                	</div>
	                	@endisset
		            @endauth
		            @guest
		            <p class="lead text-danger">Please <a href="#" data-toggle="modal" data-target="#login_modal">log-in</a> to view more details.</p>
		            @endguest
	        		
	            </div>
	        </div>
	        <hr class="mt16 mb16">
	    </div>
	    
	</div>

    <div class="text-center mt48">
    	<a href=""><img src="../../img/ad-1.jpg"> </a>
    </div>

    <div class="row mt32">
    	<div class="col-sm-6">
    		<div class="feature feature-3 boxed">
            	<h5 class="font-bold">Related Drugs</h5>

            	@forelse($related_drugs as $i => $drug)
            	<div class="pharmacy-near">
            		<a href="{{ url('/product/search') . '?keyword=' . $drug->name . '&reference=' . $drug->reference }}"><h5 class="font-bold color-blue mb0">{{ $drug->name }}</h5></a>
            	</div>
            	@empty
            	<p>Sorry, we cannot fetch drugs related to {{ $data->product }}</p>
            	@endforelse
            </div>
        </div>

        <div class="col-sm-6">
    		<div class="feature feature-3 boxed">
            	<h5 class="font-bold">Related Diseases</h5>

            	<p class="text-danger">Widget not available.</p>
            </div>
        </div>

    </div>
</div>
@endsection