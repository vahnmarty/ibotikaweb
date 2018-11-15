<section class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 height-40">
    <ul class="slides">
        <li class="overlay image-bg pt-xs-0 ">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="../../img/home-banner.png">
            </div>
            <div class="container">
                <div class="row mt72 text-center">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="mb-xs-16 bold text-shadow">Find and compare medicines near you.</h2>
                        <form class="form-search" action="{{ url('search') }}" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <div class="select-option">
                                            <i class="ti-angle-down"></i>
                                            <select name="type" class="select-type">
                                                <option selected value="medicines">Medicines</option>
                                                <option value="diseases">Diseases</option>
                                                <option value="pharmacies">Pharmacies</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="hidden" name="reference">
                                        <input type="text" name="medicine" class="validate-required col-sm-6 search" id="search-medicines" placeholder="Search for brands or generic names">
                                        <input type="text" name="disease" class="validate-required col-sm-6 search" id="search-diseases" placeholder="Search for diseases or symptoms" style="display: none;">
                                        <input type="text" name="pharmacy" class="validate-required col-sm-6 search" id="search-pharmacies" placeholder="Search for pharmacies or their branches" style="display: none;">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                @if(session()->has('location'))
                                <p class="text-center"><i class="ti-location-pin">&nbsp;</i> <span id="address">{{ get_address() }} <a href="#" class="simple-toggle" data-target="#form-location">&nbsp;<i class="ti-pencil-alt"></i></a></span> </p>
                                @else
                                <p class="text-center"><i class="ti-location-pin">&nbsp;</i> <span id="address">We cannot fetch your address right now. <a href="#" class="simple-toggle" data-target="#form-location">Click here</a> to update</span> </p>
                                @endif
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <form class="form-location" action="{{ url('location') }}" style="display: none" id="form-location">
                                    @csrf
                                    <input type="hidden" name="latitude" id="latitude">
                                    <input type="hidden" name="longitude" id="longitude">
                                    <input type="hidden" name="address1" id="neighborhood">
                                    <input type="hidden" name="city" id="locality">
                                    <input type="hidden" name="state" id="administrative_area_level_1">
                                    <input type="hidden" name="country" id="country">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <input type="text" name="full_address" id="autocomplete" onfocus="geolocate()" class="mb0 input-transparent toggle-focus" placeholder="Enter your address here" required style="border: 1px solid #ddd" />
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-success btn-square mb0"><strong class="ti-check"></strong></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>