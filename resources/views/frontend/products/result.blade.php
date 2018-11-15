@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . $request->keyword)

@section('content')

                    <div class="feature">
                        <div class="">
                            <h4 class="font-bold mb16">Search Results for '{{ $request->keyword }}' <span class="font13">{{ count($data) }} results</span> <span class="float-right"><span class="font14">Sort by &nbsp;</span>
	                            	<div class="select-option inline-block select-sort mb8">
									<select name="country" class="select-sort">
										<option selected value="Default" class="font12">Nearest</option>
										<option class="font12">Alphabetical</option>
									</select>
								</div>
							</span>
							</h4>
                            
                            <hr class="pink-line">
                        </div>
                        <div class="feature feature-3 boxed p10 ">
                        	@foreach($data as $i => $item)
		                    <div class="row">
	                        	<div class="col-sm-9 p20">
	                        		<h4 class="font-bold color-blue mb0">{{ $item->product }}</h4>
		                            <p class="font-bold mb0">{{ $item->pharmacy }} ({{ $item->branch }})</p>
		                            <span class="color-lightgray font-bold"><em>{{ $item->distance }}km away</em></span>
		                            <p class="mb8">{{ $item->address }}</p>
		                            <div class="module left module-result"><a href="{{ url('product', $item->id) }}?product={{ $item->product }}" target="_blank" class="color-pink">
						            	<i class="ti-search bold color-lightgray">&nbsp;</i>
						            	View Details</a>
						            </div>
						            <div class="module left module-result"><a href="" class="color-pink">
						            	<i class="ti-location-arrow bold color-lightgray">&nbsp;</i>
						            	Get Directions</a>
						            </div>
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
		                    @endforeach
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
@endsection