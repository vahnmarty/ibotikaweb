@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . $data->product)

@section('content')
<div class="page-content">

	<div class="feature">
	    <div class="">
	        <h4 class="font-bold mb16">{{ $data->product }} <span class="font13">{{ $data->branch->pharmacy->name }}</span> 
			</h4>
	        
	        <hr class="pink-line">
	    </div>
	    <div class="feature  boxed p10 ">

	        <div class="row">
	        	<div class="col-sm-9 p20">
	        		<h4 class="font-bold color-blue mb0">{{ $data->product }} </h4>
	                <p class="font-bold mb0"><a href="{{ url('pharmacy/' . $data->branch->id . '/' . str_slug($data->branch->pharmacy->name .'-'. $data->branch->name) ) }}" class="color-gray">{{ $data->branch->pharmacy->name }} ({{ $data->branch->name }}) </a>
	                	<span class="ratings">
	                		<i class="fa fa-star-o text-warning"></i>
	                		<i class="fa fa-star-o text-warning"></i>
	                		<i class="fa fa-star-o text-warning"></i>
	                		<i class="fa fa-star-o text-warning"></i>
	                		<i class="fa fa-star-o text-warning"></i>
	                	</span>
	                </p>
	                @if(session()->has('location'))
	                <span class="color-lightgray font-bold"><em>0.3km away</em></span>
	                @endif
	                <p class="mb8">{{ $data->branch->address }}</p>
	                @auth
	                <div class="module left module-result"><a href="tel:{{ $data->branch->contact }}" class="color-pink">
		            	<i class="ti-mobile bold color-lightgray">&nbsp;</i>
		            	Contact</a>
		            </div>
		            <div class="module left module-result"><a href="" class="color-pink">
		            	<i class="ti-import bold color-lightgray">&nbsp;</i>
		            	Bookmark</a>
		            </div>
		            @endauth
		            @guest
		            <p class="lead text-danger">Please <a href="#" data-toggle="modal" data-target="#login_modal">log-in</a> to Contact or Bookmark Pharmacy</p>
		            @endguest

	            </div>
	            <div class="col-sm-3 pt64">
	            	<h3 class="font-bold color-pink pull-right">₱ {{ number_format($data->selling_price, 2) }}</h3>
	            </div>
	        </div>
	        <hr class="mt16 mb16">

	        <div class="row">

	        	<div class="col-sm-12">
	        		<div class="mapouter">
	        		    <div class="ajax-loader active">
	        		        <img src="{{ url('img/ajax-loader.gif') }}" class="center-image">
	        		    </div>
	        		    <div class="gmap_canvas">
	        		        <iframe width="100%" height="200" id="gmap_canvas" 
	        		        src="https://maps.google.com/maps?q={{ rawurlencode($data->branch->pharmacy->name . ' ' . $data->branch->address) }}&t=&z=17&ie=UTF8&iwloc=&output=embed" 
	        		        frameborder="0" 
	        		        scrolling="no" 
	        		        marginheight="0" 
	        		        marginwidth="0">
	        		        </iframe>
	        		    </div>
	        		</div>
	        	</div>

	        	<div class="col-sm-9 p20">
	        		
	        		<h5 class="type--bold mb0">Contents</h5>
	        		<p class="">{!! $details->details->BRIEFMONO->BC !!}</p>

	        		@if(!is_array($details->details->BRIEFMONO->BI))
	        		<h5 class="type--bold mb0">Indications / Uses</h5>
	        		<p class="">{!! $details->details->BRIEFMONO->BI !!}</p>
	        		@endif

	        		@auth
	                <a href="" class="btn btn-sm btn-filled simple-toggle inner-link" data-target="#details">More Details</a>
	                	@isset($details)
	                	<div id="details" style="display: none">
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

            	<div class="pharmacy-near">
            		<a href=""><h5 class="font-bold color-blue mb0">Tuseran</h5></a>
            	</div>

            	<div class="pharmacy-near mt16">
            		<a href=""><h5 class="font-bold color-blue mb0">Decolgen</h5></a>
            	</div>

            	<div class="pharmacy-near mt16">
            		<a href=""><h5 class="font-bold color-blue mb0">Ibuprofen</h5></a>
            	</div>
            </div>
        </div>

        <div class="col-sm-6">
    		<div class="feature feature-3 boxed">
            	<h5 class="font-bold">Related Diseases</h5>

            	<div class="pharmacy-near">
            		<a href=""><h5 class="font-bold color-blue mb0">Fever</h5></a>
            	</div>

            	<div class="pharmacy-near mt16">
            		<a href=""><h5 class="font-bold color-blue mb0">Headache</h5></a>
            	</div>

            	<div class="pharmacy-near mt16">
            		<a href=""><h5 class="font-bold color-blue mb0">Pain Relief</h5></a>
            	</div>
            </div>
        </div>

    </div>
</div>
@endsection