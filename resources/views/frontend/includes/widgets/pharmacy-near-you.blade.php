<div class="feature feature-3 boxed">
        <h5 class="font-bold">PHARMACIES NEAR YOU</h5>

        @if(session()->has('location'))

            @foreach(pharmacy_nearby() as $pharmacy)
            <div class="pharmacy-near">
                <a href=""><h5 class="font-bold color-blue mb0">{{ $pharmacy->name }}y</h5></a>
                <p class="mb0">{{ $pharmacy->branch }}</p>
                <p class="color-lightgray"><em>{{ $pharmacy->distance }}km</em></p>
            </div>
            @endforeach
            <a href="" class="btn btn-lg btn-filled mt24 display-block">Search for Pharmacies</a>
        @else
        
        <p class="text-danger">We cannot fetch your address, please manually enter your address here for a better performance.</p>
        <form class="form-location" action="{{ url('location') }}">
            @csrf
            <input type="hidden" name="latitude" id="latitude">
            <input type="hidden" name="longitude" id="longitude">
            <input type="hidden" name="address1" id="neighborhood">
            <input type="hidden" name="city" id="locality">
            <input type="hidden" name="state" id="administrative_area_level_1">
            <input type="hidden" name="country" id="country">
            <input type="text" name="full_address" id="autocomplete" onfocus="geolocate()"  placeholder="Enter your address here" required style="border: 1px solid #ddd" />
            <input type="submit" class="btn-white mb0 btn btn-sm" value="Submit" />
        </form>        
        @endif
        
        
</div>