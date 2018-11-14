@extends('frontend.layouts.app')

@section('title', app_name() . ' | Blog')

@section('content')
                            <div class="feature">
                                <div class="">
                                    <h4 class="font-bold mb16">Healthcare Blog</h4>
                                    <hr class="pink-line">
                                </div>
                                <div class="horizontal-tile">
                                <div class="tile-left">
                                    <a href="#">
                                        <div class="background-image-holder">
                                            <img alt="image" class="background-image" src="img/blog-1.jpg" />
                                        </div>
                                    </a>
                                </div>
                                <div class="tile-right bg-white">
                                    <div class="description">
                                        <h4 class="mb8">Doctors Come Clean on Salt Restriction for Heart Failure</h4>
                                        <span class="label">Nov 8</span> &nbsp; 
                                        <i class="ti-user"></i>
                                        <span>Written by
                                            <a href="#">Joe Graedon</a>
                                        </span>

                                        <p class="mt16 mb0"> 
                                            Do you watch your salt intake? The AHA tells everyone to cut back on sodium. Salt restriction for heart failure is a bedrock medical belief.
                                        </p>
                                        <a href="single-article.html">
                                            <h6 class="mt16 mb0">
                                                READ MORE >
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end of horizontal tile-->
                            <div class="horizontal-tile">
                                <div class="tile-left">
                                    <a href="#">
                                        <div class="background-image-holder">
                                            <img alt="image" class="background-image" src="img/blog-2.jpg" />
                                        </div>
                                    </a>
                                </div>
                                <div class="tile-right bg-white">
                                    <div class="description">
                                        <h4 class="mb8">Cinnamon Can Help Control Blood Sugar</h4>
                                        <span class="label">Nov 5</span> &nbsp; 
                                        <i class="ti-user"></i>
                                        <span>Written by
                                            <a href="#">Joe Graedon</a>
                                        </span>

                                        <p class="mt16 mb0"> 
                                            Spices were prized. The spice trade changed the world after all. Now, we take spices for granted but cinnamon can help control blood sugar.
                                        </p>
                                        <a href="">
                                            <h6 class="mt16 mb0">
                                                READ MORE >
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end of horizontal tile-->
                                
                            </div>

                                <div class="text-center mt48 mb48 ">
                                    <a href=""><img src="img/ad-1.jpg"> </a>
                                </div>

                                <div class="horizontal-tile">
                                <div class="tile-left">
                                    <a href="#">
                                        <div class="background-image-holder">
                                            <img alt="image" class="background-image" src="img/blog-3.jpg" />
                                        </div>
                                    </a>
                                </div>
                                <div class="tile-right bg-white">
                                    <div class="description">
                                        <h4 class="mb8">Should You Pay Less for Vicks VapoRub®?</h4>
                                        <span class="label">Nov 5</span> &nbsp; 
                                        <i class="ti-user"></i>
                                        <span>Written by
                                            <a href="#">Terry Graedon</a>
                                        </span>

                                        <p class="mt16 mb0"> 
                                            An irate reader discovered that a favorite rub now contains a synthetic ingredient instead of natural essential oil. Should we pay less for Vicks VapoRub?
                                        </p>
                                        <a href="">
                                            <h6 class="mt16 mb0">
                                                READ MORE >
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end of horizontal tile-->
                            <div class="horizontal-tile">
                                <div class="tile-left">
                                    <a href="#">
                                        <div class="background-image-holder">
                                            <img alt="image" class="background-image" src="img/blog-4.jpg" />
                                        </div>
                                    </a>
                                </div>
                                <div class="tile-right bg-white">
                                    <div class="description">
                                        <h4 class="mb8">Are Your Eyes the Window to Your Brain?</h4>
                                        <span class="label">Nov 1</span> &nbsp; 
                                        <i class="ti-user"></i>
                                        <span>Written by
                                            <a href="#">Terry Graedon</a>
                                        </span>

                                        <p class="mt16 mb0"> 
                                            New technology turns your eyes into the window to your brain. A non-invasive scan of the retina can tell who is headed for Alzheimer disease.
                                        </p>
                                        <a href="">
                                            <h6 class="mt16 mb0">
                                                READ MORE >
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
@endsection