@extends('frontend.layouts.app')

@section('title', app_name() . ' | Browse')

@section('content')

<div class="feature">
    <div class="">
        <h4 class="font-bold mb16">Specialties</h4>
        <hr class="pink-line">
    </div>
    <div class="feature feature-3 boxed news-holder-latest">
        <div class="col-sm-6 pad32">
            <a href="">
                <h5 class="font-bold color-skyblue"><img src="img/multi.png"> Multidisciplinary</h5>
            </a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/cardio.png"> Cardiology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/derma.png"> Dermatology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/endo.png"> Endocrinology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/gastro.png"> Gastroenterology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/hepa.png"> Hepatology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/infect.png"> Infectious Diseases</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/neuro.png"> Neurology</h5></a>
            <hr>
            
        </div>
        <div class="col-sm-6 pad32">
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/obgyn.png"> Obstetrics & Gynaecology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/onco.png"> Oncology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/optha.png"> Ophthalmology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/pedia.png"> Paedistrics</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/psych.png"> Psychiatry</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/respi.png"> Respirology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/rheuma.png"> Rheumatology</h5></a>
            <hr>
            <a href=""><h5 class="font-bold color-skyblue"><img src="img/uro.png"> Urology</h5></a>
            <hr>
        </div>
    </div>
    
</div>

    <div class="text-center mt48 mb48">
        <a href=""><img src="img/ad-1.jpg"> </a>
    </div>

    <div class="">
        <h4 class="font-bold mb16">Drugs</h4>
        <hr class="pink-line">
    </div>
    <div class="feature feature-3 boxed news-holder-latest">
        <div class="col-sm-12 pad32">
            <h5 class="font-bold color-skyblue mb16">By Brand</h5>
            @foreach (range('A', 'Z') as $char)
            <a href="" class="btn btn-alphabet">
                {{ $char }}
            </a>
            @endforeach
            <hr class="mt16 mb16">
            
            <h5 class="font-bold color-skyblue mb16">By Generic</h5>

            @foreach (range('A', 'Z') as $char)
            <a href="" class="btn btn-alphabet">
                {{ $char }}
            </a>
            @endforeach
        </div>
    </div>
@endsection
