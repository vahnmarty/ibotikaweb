@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . $request->keyword)

@section('content')
<div class="page-content">
    <div class="feature">
        <div class="">
            <h4 class="font-bold mb16">Search Results for '{{ $request->keyword }}' <span class="font13">{{ count($data) }} results</span> <span class="float-right"><span class="font14">Sort by &nbsp;</span>
                	<div class="select-option inline-block select-sort mb8">
					<select name="country" class="select-sort">
						<option selected value="nearest">Nearest</option>
						<option value="name_asc">A-Z</option>
                        <option value="name_desc">Z-A</option>
                        <option value="price_asc">Price  &uarr;</option>
                        <option value="price_desc">Price &darr;</option>
					</select>
				</div>
			</span>
			</h4>
            
            <hr class="pink-line">
        </div>
        <div class="feature feature-3 boxed p10 sortable">
        	@forelse($data as $i => $item)
            <div class="sortable-item" data-name="{{ $item->pharmacy }}" data-distance="{{ $item->distance }}" data-price="{{ $item->selling_price }}">
                <div class="row">
                    <div class="col-sm-9 p20">
                        <h4 class="font-bold color-blue mb0">{{ $item->product }}</h4>
                        <p class="font-bold mb0">{{ $item->pharmacy }} ({{ $item->branch }})</p>
                        @if($item->distance)
                        <span class="color-lightgray font-bold"><em>{{ $item->distance }}km away</em></span>
                        @endif
                        <p class="mb8">{{ $item->address }}</p>
                        <div class="module left module-result"><a href="{{ url('product', $item->id) }}?product={{ $item->product }}" target="_blank" class="color-pink">
                            <i class="ti-search bold color-lightgray">&nbsp;</i>
                            View Details</a>
                        </div>
                        @if(1==2)
                        <div class="module left module-result"><a href="" class="color-pink">
                            <i class="ti-location-arrow bold color-lightgray">&nbsp;</i>
                            Get Directions</a>
                        </div>
                        @endif
                        <div class="module left module-result"><a href="" class="color-pink">
                            <i class="ti-import bold color-lightgray">&nbsp;</i>
                            Bookmark</a>
                        </div>

                    </div>
                    <div class="col-sm-3 pt64">
                        <h3 class="font-bold color-pink pull-right">₱ {{ number_format($item->selling_price, 2) }}</h3>
                    </div>
                </div>
                <hr class="mt16 mb16">
            </div>
            @empty
            <div>
                <p class="text-danger">There are no pharmacies selling <strong>{{ $request->keyword  }}</strong>.</p>
                @if($request->reference)
                    <div class=""><a href="{{ url('product/detail') }}?product={{ rawurlencode($request->keyword) }}&reference={{ $request->reference }}" target="_blank" class="color-skyblue">
                        <i class="ti-search bold color-lightgray">&nbsp;</i>
                        View Details about {{ $request->keyword }}</a>
                    </div>
                @endif
            </div>
            @endforelse
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
                <p>No related drugs available</p>
                @endforelse
            </div>
        </div>

        <div class="col-sm-6">
    		<div class="feature feature-3 boxed">
            	<h5 class="font-bold">Related Diseases</h5>

            	<p class="text-danger">This widget is not available yet.</p>
            </div>
        </div>

    </div>
</div>
@endsection