@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

                    <div class="feature">
                        <div class="">
                            <h4 class="font-bold mb16">
                                Contact Us
                            </h4>
                            
                            <hr class="pink-line">
                        </div>
                        <div class="feature feature-3 boxed p10 ">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    
                                    <p class="mb8">
                                        Do you have any suggestions, recommendations or any other inquiries? Don't hesitate to contact us with the info or the contact form below. We'll be glad to you talk to you!
                                    </p>
                                    <hr>
                                    <p>
                                        Dreamstar Bldg., Zamora St., Poblacion
                                        <br> Iligan City, Philippines
                                        <br> 9200
                                    </p>
                                    <hr>
                                    <p>
                                        <strong>E:</strong> info@ibotika.com
                                        <br>
                                        <strong>P:</strong> +63 228 2808 
                                        <br>
                                        <strong>M:</strong> +63 906 382 8690
                                    </p>
                                    <hr>
                                    <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
                                    <input type="text" class="validate-required input-border" name="name" placeholder="Your Name">
                                    <input type="text" class="validate-required validate-email input-border" name="email" placeholder="Email Address">
                                    <textarea class="validate-required input-border" name="message" rows="4" placeholder="Message"></textarea>
                                    <input type="submit" value="Send Message">
                                </form>
                                </div>
                            </div>
                           
                            <hr class="mt16 mb16">
                        </div>
                        
                    </div>

                        <div class="text-center mt48">
                            <a href=""><img src="img/ad-1.jpg"> </a>
                        </div>
@endsection
