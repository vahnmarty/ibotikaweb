@extends('frontend.layouts.app')

@section('title', app_name() . ' | About')

@section('content')
<div class="feature">
    <div class="">
        <h4 class="font-bold mb16">About iBotika Web</h4>
        <hr class="pink-line">
    </div>
    <div class="feature feature-3 boxed news-holder-latest">
        <div class="col-sm-12 pad32">
            <h4 class="text-center color-skyblue font-bold mb32">iBotika Web the fastest and easiest way to find<br>and compare medicines near you.</h4>

            <p class="text-center">Our mission is to to provide the public an easy access to medicine information<br>and availability by connecting them to local pharmacies.</p>
            
            <div class="col-sm-6 text-center mb24">
                <img src="img/search.png">
                <h5 class="font-bold mb8">Search</h5>
                <p>Search medicines by brand or generic name. You can also search for specific pharmacies.</p>
            </div>
            <div class="col-sm-6 text-center mb24">
                <img src="img/compare.png">
                <h5 class="font-bold mb8">Compare</h5>
                <p>You can compare prices of medicines by pharmacy so you can get the value for your money.</p>
            </div>

            <div class="col-sm-6 text-center mb24">
                <img src="img/location.png">
                <h5 class="font-bold mb8">Location</h5>
                <p>View list of pharmacies by location so you will find the ones near you.</p>
            </div>
            <div class="col-sm-6 text-center mb24">
                <img src="img/mims.png">
                <h5 class="font-bold mb8">Powered by MIMS</h5>
                <p>MIMS is a multi-channel provider of drug information which is integrated on the app.</p>
            </div>

            <div class="col-sm-6 text-center mb24">
                <img src="img/direction.png">
                <h5 class="font-bold mb8">Get Directions</h5>
                <p>View pharmacy’s actual location on map view and get directions on how to get there.</p>
            </div>
            <div class="col-sm-6 text-center mb24">
                <img src="img/bookmark.png">
                <h5 class="font-bold mb8">Contact or Bookmark</h5>
                <p>You can contact the pharmacy directly via direct phone call, email or message. You can also bookmark a pharmacy for future reference.</p>
            </div>

            <div class="col-sm-6 text-center mb24">
                <img src="img/news.png">
                <h5 class="font-bold mb8">Read News</h5>
                <p>Read the latest news and udpates from the healthcare world directly on the web and the app.</p>
            </div>
            <div class="col-sm-6 text-center mb24">
                <img src="img/events.png">
                <h5 class="font-bold mb8">Browse Events</h5>
                <p>View the recent and upcoming medical events near you. </p>
            </div>
        </div>
    </div>
    
</div>

    <div class="text-center mt48 mb48">
        <a href=""><img src="img/ad-1.jpg"> </a>
    </div>

@endsection