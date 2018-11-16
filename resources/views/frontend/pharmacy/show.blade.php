@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . $branch->pharmacy->name . ' ' . $branch->name)

@section('content')
<div class="page-content">

<div class="feature">
    <div class="">
        <h4 class="font-bold mb16">{{ $branch->pharmacy->name }}
		</h4>
        
        <hr class="pink-line">
    </div>
    <div class="feature feature-3 boxed p10 ">
    	<div class="row">
        	<div class="col-sm-4">
        		<img class="image-result" alt="{{ $branch->pharmacy->name }}" src="http://plus.ibotika.com/uploads/pharmacy/{{ $branch->pharmacy->image }}">
        	</div>
        	<div class="col-sm-8 p20">
                <h5 class="font-bold mb0">{{ $branch->name }}</h5>
                @if(session()->has('location'))
                <span class="color-lightgray font-bold"><em>0.4km away</em></span>
                @endif
                <p class="mb16">
                	{{ $branch->address }}
                </p>
                @auth
                <div class="module left module-result"><a href="tel:{{ $branch->contact }}" class="color-pink">
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
                        src="https://maps.google.com/maps?q={{ rawurlencode($branch->pharmacy->name . ' ' . $branch->address) }}&t=&z=17&ie=UTF8&iwloc=&output=embed" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0">
                        </iframe>
                    </div>
                </div>
        	</div>

        	<div class="col-sm-12 mt32">
        		<h4 class="font-bold">Reviews</h4>

        		<div class="user-comment mb24">
            		<div class="col-sm-2">
                		<img class="user-avatar" src="../../img/avatar.png">
                	</div>
                	<div class="col-sm-9">
                        <h5 class="font-bold color-blue mb0">Jose Rizal</h5>
                        <img src="../../img/star.png">
                        <p class="mt24 pb32">
                        	This branch is very clean!
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-filled text-center">Add a Review</a>
                </div>
            	</div>
        	</div>
        </div>
        
    
</div>

    <div class="text-center mt48">
    	<a href=""><img src="../../img/ad-1.jpg"> </a>
    </div>

    <div class="row mt32">
    	<div class="col-sm-6">
    		<div class="feature feature-3 boxed">
            	<h5 class="font-bold">Other Branches</h5>

                @forelse($branch->pharmacy->branches()->where('id', '!=', $branch->id)->get() as $other_branch)
            	<div class="pharmacy-near">
            		<a href=""><h5 class="font-bold color-blue mb0">{{ $other_branch->name }}</h5></a>
            		<p class="color-lightgray"><em>{{ distance($branch->latitude, $branch->longitude, $other_branch->latitude, $other_branch->longitude, 'K') }}</em></p>
            	</div>
                @empty
                <div>
                    <p>No other branch.</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="col-sm-6">
    		<div class="feature feature-3 boxed">
            	<h5 class="font-bold">Pharmacies Near By</h5>

                @forelse($nearby as $i => $other_pharmacy)
            	<div class="pharmacy-near">
            		<a href=""><h5 class="font-bold color-blue mb0">{{ $other_pharmacy->name }}</h5></a>
            		<p class="mb0"> {{ $other_pharmacy->branch }}</p>
            	</div>
                @empty
                <div>
                    <p>No other pharmacy near this branch.</p>
                </div>
                @endforelse

            </div>
        </div>

    </div>
</div>
@endsection