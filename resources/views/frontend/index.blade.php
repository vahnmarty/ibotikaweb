@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <section class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 height-40">
        <ul class="slides">
            <li class="overlay image-bg pt-xs-0 ">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/home-banner.png">
                </div>
                <div class="container">
                    <div class="row mt72 text-center">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 class="mb-xs-16 bold text-shadow">Find and compare medicines near you.</h2>
                            <form class="form-newsletter" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
                                <div class="col-sm-12">
                                <div class="col-sm-3">
                        <div class="select-option">
                                    <i class="ti-angle-down"></i>
                                    <select name="country">
                                        <option selected value="Default">Medicines</option>
                                        <option >Diseases</option>
                                        <option >Pharmacies</option>
                                    </select>
                                </div></div>
                        <div class="col-sm-6">
                        <input type="text" name="search" class="validate-required col-sm-6" placeholder="Search for brands or generic names"></div>
                        <div class="col-sm-3">
                        <input type="submit" value="Search"></div>
                    </div>
                        <p class="text-center">
                            <i class="ti-location-pin">&nbsp;</i> Poblacion, Iligan City, Philippines &nbsp; <a href=""><i class="ti-pencil-alt"></i></a>
                        </p>
                        
                    </form>
                        </div>
                    </div>
                    
                </div>
                
            </li>
        </ul>
    </section>
<section class="bg-secondary pb48">
        <div class="container">
            <div class="row">

                <!-- MAIN CONTENT -->
                <div class="col-sm-12 col-md-8">
                    <div class="feature">
                        <div class="">
                            <h4 class="font-bold mb16">Healthcare News</h4>
                            <hr class="pink-line">
                        </div>
                        <div class="feature feature-3 boxed news-holder-latest">
                            <div class="col-sm-6 pl0 pr0 news-holder-latest">
                                <div class="background-image-holder">
                                    <img alt="image" class="background-image" src="img/news-1.jpg">
                                </div>
                                <!-- <img src="img/news-1.jpg"> -->
                            </div>
                            <div class="col-sm-6 pad32">
                                <a href=""><h5 class="font-bold color-blue mb16">High dose vitamin B combination therapy: Proven effective in treating peripheral neuropathy</h5></a>
                                <p>
                                    Neuropathy is a very common, and mostly chronic, clinical condition afflicting the general population. At a dinner symposium on 21st March 2018 held as part of the Nerve Care Forum sponsored by Merck Philippines, Dr Rizaldy Pinzon – 
                                </p>
                            </div>
                        </div>

                        <div class="feature feature-3 boxed news-holder">
                            <div class="col-sm-3 pl0 pr0 news-holder">
                                <div class="background-image-holder">
                                    <img alt="image" class="background-image" src="img/news-2.jpg">
                                </div>
                                <!-- <img src="img/news-1.jpg"> -->
                            </div>
                            <div class="col-sm-9 p24">
                                 <a href=""><h5 class="font-bold color-blue mb16">PH urged to have ‘open discussion’ on sexuality to fight HIV spread</h5></a>
                                <p class="">
                                    The World Health Organization (WHO) urged the Philippines to have an “open discussion” about sexuality and on the solutions to combat the spread of the
                                </p>
                            </div>
                        </div>

                        <div class="feature feature-3 boxed news-holder">
                            <div class="col-sm-3 pl0 pr0 news-holder">
                                <div class="background-image-holder">
                                    <img alt="image" class="background-image" src="img/news-3.jpg">
                                </div>
                                <!-- <img src="img/news-1.jpg"> -->
                            </div>
                            <div class="col-sm-9 p24">
                                 <a href=""><h5 class="font-bold color-blue mb16">WHO vows tighter, broader actions against tobacco</h5></a>
                                <p class="">
                                    GENEVA -- The World Health Organization (WHO) unveiled a global strategy on Saturday to scale up the tobacco control agenda over the next few years, and to 
                                </p>
                            </div>
                        </div>


                        <div class="feature feature-3 boxed news-holder">
                            <div class="col-sm-3 pl0 pr0 news-holder">
                                <div class="background-image-holder">
                                    <img alt="image" class="background-image" src="img/news-4.jpg">
                                </div>
                                <!-- <img src="img/news-1.jpg"> -->
                            </div>
                            <div class="col-sm-9 p24">
                                 <a href=""><h5 class="font-bold color-blue mb16">World far from ending TB by 2030 with 1.6-M deaths in 2017: WHO</h5></a>
                                <p class="">
                                    MANILA -- After realizing the value of donated blood to an ailing loved one, Sharmila Navarro decided to be a regular blood donor.“I started almost two years
                                </p>
                            </div>
                        </div>

                        <div class="feature feature-3 boxed news-holder">
                            <div class="col-sm-3 pl0 pr0 news-holder">
                                <div class="background-image-holder">
                                    <img alt="image" class="background-image" src="img/news-5.jpg">
                                </div>
                                <!-- <img src="img/news-1.jpg"> -->
                            </div>
                            <div class="col-sm-9 p24">
                                 <a href=""><h5 class="font-bold color-blue mb16">E-cigarettes not scientifically proven safe: ASEAN alliance</h5></a>
                                <p class="">
                                    MANILA -- An alliance promoting tobacco control said the use of electronic cigarettes (e-cigarettes) is not scientifically proven to be less harmful than 
                                </p>
                            </div>
                        </div>

                        <div class="text-center mt32">
                            <a href=""><h5 class="font-bold color-blue mb16">View All Healthcare News <i class="ti-angle-right bold"></i></h5> </a>
                        </div>
                    </div>

                        <div class="text-center mt48">
                            <a href=""><img src="img/ad-1.jpg"> </a>
                        </div>
                    
                    <div class="feature mt48">
                        <div class="mb32">
                            <h4 class="font-bold mb16">Medical Events</h4>
                            <hr class="pink-line">
                        </div>

                        <div class="event-holder mt24 mb16">
                            <p class="mb0">Philippine Medical Association</p>
                            <a href=""><h5 class="font-bold color-blue mb0">Second Scientific Forum with a theme “Changing Horizons in Pediatric Health Care in the New Millenium”</h5></a>
                            <p><span class="font-bold">October 18, 2018</span> &nbsp; | &nbsp; Manila Diamond Hotel </p>
                            
                        </div>
                        <hr>

                        <div class="event-holder mt24 mb16">
                            <p class="mb0">Philippine Medical Association</p>
                            <a href=""><h5 class="font-bold color-blue mb0">19th Annual Convention of the Philippine Society of Clinical and Occupational Toxicology with a theme “ Revisiting Toxic threats from the Womb to the Tomb”</h5></a>
                            <p><span class="font-bold">October 18-19, 2018</span> &nbsp; | &nbsp; Waterfront Insular Hotel, Davao City</p>
                        </div>
                        <hr>

                        <div class="event-holder mt24 mb16">
                            <p class="mb0">American Academy of Family Medicine (AAFM)</p>
                            <a href=""><h5 class="font-bold color-blue mb0">American Academy of Family Medicine (AAFM) Multi-Specialty Conference</h5></a>
                            <p><span class="font-bold">October 28-29, 2018</span> &nbsp; | &nbsp; Makati, Metro Manila, Philippines</p>
                        </div>
                        <hr>

                        <div class="event-holder mt24 mb16">
                            <p class="mb0">CITC International Training Center</p>
                            <a href=""><h5 class="font-bold color-blue mb0">Fellowship in Cosmetic Gynaecology (Non-Surgical Course)</h5></a>
                            <p><span class="font-bold">Nov 05-09, 2018</span> &nbsp; | &nbsp; Makati, Metro Manila, Philippines</p>
                        </div>
                        <hr>

                        <div class="event-holder mt24 mb16">
                            <p class="mb0">Academic Fora</p>
                            <a href=""><h5 class="font-bold color-blue mb0">Manila 26th International Conference on “Medical, Medicine and Health Sciences” (MMHS- 2018 Manila)</h5></a>
                            <p><span class="font-bold">Nov 14-15, 2018</span> &nbsp; | &nbsp; Makati, Metro Manila, Philippines</p>
                        </div>
                        <hr>
                        <div class="text-center mt32">
                            <a href=""><h5 class="font-bold color-blue mb16">View All Medical Events <i class="ti-angle-right bold"></i></h5> </a>
                        </div>
                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="col-sm-12 col-md-4">
                    <div class="feature">
                        <div class="feature feature-3 boxed">
                            <h5 class="font-bold">PHARMACIES NEAR YOU</h5>

                            <div class="pharmacy-near">
                                <a href=""><h5 class="font-bold color-blue mb0">FK Pharmacy</h5></a>
                                <p class="mb0">General Aguinaldo Branch</p>
                                <p class="color-lightgray"><em>0.2km</em></p>
                            </div>

                            <div class="pharmacy-near mt16">
                                <a href=""><h5 class="font-bold color-blue mb0">Loys Pharmacy</h5></a>
                                <p class="mb0">Quezon Avenue Branch</p>
                                <p class="color-lightgray"><em>0.3km</em></p>
                            </div>

                            <div class="pharmacy-near mt16">
                                <a href=""><h5 class="font-bold color-blue mb0">Pharmville Pharmacy</h5></a>
                                <p class="mb0">General Aguinaldo Branch</p>
                                <p class="color-lightgray"><em>0.3km</em></p>
                            </div>

                            <div class="pharmacy-near mt16">
                                <a href=""><h5 class="font-bold color-blue mb0">Get Well Pharmacy</h5></a>
                                <p class="mb0">Tibanga Branch</p>
                                <p class="color-lightgray"><em>0.4km</em></p>
                            </div>

                            <div class="pharmacy-near mt16">
                                <a href=""><h5 class="font-bold color-blue mb0">Rose Pharmacy</h5></a>
                                <p class="mb0">Tibanga Branch</p>
                                <p class="color-lightgray"><em>0.4km</em></p>
                            </div>

                            
                            <a href="" class="btn btn-lg btn-filled mt24 display-block">Search for Pharmacies</a>
                        </div>

                        <div class="text-center mt48 mb48">
                            <a href=""><img src="img/ad-2.jpg"> </a>
                        </div>

                        <div class="feature feature-3 boxed">
                            <h5 class="font-bold">TOP SEARCHED MEDICINES</h5>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Humira (adalimumab) </h5></a>
                                <p class="mb0 inline-block">1,201 views</p>
                            </div>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Abilify (aripiprazole) </h5></a>
                                <p class="mb0 inline-block">1,124 views</p>
                            </div>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Sovaldi (sofosbuvir) </h5></a>
                                <p class="mb0 inline-block">1,098 views</p>
                            </div>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Crestor (rosuvastatin) </h5></a>
                                <p class="mb0 inline-block">980 views</p>
                            </div>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Enbrel (etanercept) </h5></a>
                                <p class="mb0 inline-block">978 views</p>
                            </div>
                            
                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Harvoni (ledipasvir)  </h5></a>
                                <p class="mb0 inline-block">960 views</p>
                            </div>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Nexium (esomeprazole)</h5></a>
                                <p class="mb0 inline-block"> 934 views</p>
                            </div>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Advair Diskus (fluticasone)</h5></a>
                                <p class="mb0 inline-block">911 views</p>
                            </div>

                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Lantus Solostar (insulin)</h5></a>
                                <p class="mb0 inline-block"> 908 views</p>
                            </div>
                            
                            <div class="mt8">
                                <a href=""><h5 class="font-bold color-blue mb0 inline-block">Remicade (infliximab)</h5></a>
                                <p class="mb0 inline-block"> 889 views</p>
                            </div>
                        </div>

                        <div class="feature feature-3 boxed">

                            <div class="col-sm-12 mb16 v-align-children">
                                <div class="col-sm-3 pl0 pr0">
                                    <img class="image-md" src="img/pharmacy.png">
                                    
                                </div>

                                <div class="col-sm-9 pl-xs-0 mt-xs-8">
                                    <p class="mb0 lead line-h13">Are you a</p>
                                    <h5 class="font-bold mb8 line-h13 font17">PHARMACY OWNER?</h5>
                                    <a href="" class="font-bold font12">See how iBotika Plus can help.</a>
                                </div>
                            </div>

                            <hr>

                            <div class="col-sm-12 mb16 v-align-children">
                                <div class="col-sm-3 pl0 pr0">
                                    <img class="image-md" src="img/doctor.png">
                                    
                                </div>

                                <div class="col-sm-9 pl-xs-0 mt-xs-8">
                                    <p class="mb0 lead line-h13">Are you a</p>
                                    <h5 class="font-bold mb8 line-h13 font17">DOCTOR?</h5>
                                    <a href="" class="font-bold font12">See how iBotika App can help.</a>
                                </div>
                            </div>

                            <hr>

                            <div class="col-sm-12 mb16 v-align-children">
                                <div class="col-sm-3 pl0 pr0">
                                    <img class="image-md" src="img/pharma.png">
                                    
                                </div>

                                <div class="col-sm-9 pl-xs-0 mt-xs-8">
                                    <p class="mb0 lead line-h13">Do you work in a</p>
                                    <h5 class="font-bold mb8 line-h13 font17">PHARMACEUTICAL?</h5>
                                    <a href="" class="font-bold font12 line-h11">See how to reach thousands of potential customers.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </section>
    <section class="image-bg pt96 pb96 pt-xs-80 pb-xs-80">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/banner-1.jpg">
        </div>
        
        <div class="container">
            <div class="row v-align-children">
                <div class="col-md-4 col-sm-6 text-center-sm">
                    <h3>The fastest and easiest way to find and compare medicines near you</h3>
                    <p class="mb32 mb-xs-32">
                        To provide the public an easy access to medicine information and availability by connecting them to local pharmacies.
                    </p>
                    <a href="" class="font-bold">Discover the iBotika Family</a>
                </div>

                <div class="col-md-3 col-sm-6 mt43 mt-sm-0 text-center">
                    <img src="img/web.png">
                    <h4 class="mt32 mb8 font-bold">WEB</h4>
                    <h6 class="mb24 mb-xs-32">
                        WEB-BASED ONLINE<br>MEDS FINDER
                    </h6>
                    <a href="" class="btn btn-white-bg font-bold">Learn More</a>
                </div>

                <div class="col-md-2 col-sm-6 mt-sm-48 text-center">
                    <img src="img/app.png">
                    <h4 class="mt32 mb8 font-bold">APP</h4>
                    <h6 class="mb24 mb-xs-32">
                        MOBILE APP ONLINE<br>MEDS FINDER
                    </h6>
                    <a href="" class="btn btn-white-bg font-bold">Learn More</a>
                </div>

                <div class="col-md-3 col-sm-6 mt16 mt-sm-64 text-center">
                    <img src="img/plus.png">
                    <h4 class="mt32 mb8 font-bold">PLUS</h4>
                    <h6 class="mb24 mb-xs-32">
                        PHARMACY INVENTORY<br>+ POS SYSTEMS
                    </h6>
                    <a href="" class="btn btn-white-bg font-bold">Learn More</a>
                </div>
            </div>
            
        </div>
        
    </section>
@endsection
