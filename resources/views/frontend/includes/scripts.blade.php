<script src="{{ url('css/j-components/helpers.min.js') }}"></script>         
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/flexslider.min.js') }}"></script>
<script src="{{ url('js/lightbox.min.js') }}"></script>
<script src="{{ url('js/masonry.min.js') }}"></script>
<script src="{{ url('js/twitterfetcher.min.js') }}"></script>
<script src="{{ url('js/spectragram.min.js') }}"></script>
<script src="{{ url('js/ytplayer.min.js') }}"></script>
<script src="{{ url('js/countdown.min.js') }}"></script>
<script src="{{ url('js/smooth-scroll.min.js') }}"></script>
<script src="{{ url('js/parallax.js') }}"></script>
<script src="{{ url('js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ url('js/functions.js?') . mt_rand() }}"></script>
<script type="text/javascript">
	var placeSearch, autocomplete;
	var componentForm = {
	   neighborhood: 'long_name',
	   locality: 'long_name',
	   administrative_area_level_1: 'short_name',
	   country: 'long_name'
	 };

	function initAutocomplete() {
	  // Create the autocomplete object, restricting the search to geographical
	  // location types.
	  autocomplete = new google.maps.places.Autocomplete(
	      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
	      {types: ['geocode']});

	  // When the user selects an address from the dropdown, populate the address
	  // fields in the form.
	  autocomplete.addListener('place_changed', fillInAddress);
	}

	function fillInAddress() {
	  // Get the place details from the autocomplete object.
	  var place = autocomplete.getPlace();
	  console.log(place);
	  var coordinates = autocomplete.getPlace().geometry.location;

	  // added by Vahn
	  console.log(coordinates);
	  $('#latitude').val(coordinates.lat());
	  $('#longitude').val(coordinates.lng());
	  //

	  for (var component in componentForm) {
	    document.getElementById(component).value = '';
	    document.getElementById(component).disabled = false;
	  }

	  // Get each component of the address from the place details
	  // and fill the corresponding field on the form.
	  for (var i = 0; i < place.address_components.length; i++) {
	    var addressType = place.address_components[i].types[0];
	    if (componentForm[addressType]) {
	      var val = place.address_components[i][componentForm[addressType]];
	      document.getElementById(addressType).value = val;
	    }
	  }
	}

	// Bias the autocomplete object to the user's geographical location,
	// as supplied by the browser's 'navigator.geolocation' object.
	function geolocate() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(function(position) {
	      var geolocation = {
	        lat: position.coords.latitude,
	        lng: position.coords.longitude
	      };
	      var circle = new google.maps.Circle({
	        center: geolocation,
	        radius: position.coords.accuracy
	      });
	      autocomplete.setBounds(circle.getBounds());
	    });
	  }
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqGsrOpbMgrGhXcBlL5ImYyu82kdFdmjU&libraries=places&callback=initAutocomplete"></script>