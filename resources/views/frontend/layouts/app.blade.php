
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>iBotika Web | Find and Compare drugs near you</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="dfVJxyesmtWxxmR6DnMa7DdnYnWF1KCbnJGk2j3ZyKM" />
        @include('frontend.includes.styles')
    </head>
    <body>
                
        @include('frontend.includes.navbar')
        
        <div class="main-container">
            <section class="bg-secondary pt0 pb0">
                @include('includes.partials.messages')
            </section>

            @include('frontend.includes.search-banner')
            @include('frontend.includes.login_modal')

            <section class="bg-secondary pb48">
                <div class="container">
                    <div class="row">

                        <!-- MAIN CONTENT -->
                        <div class="col-sm-12 col-md-8">
                            @yield('content')
                        </div>

                        <!-- SIDEBAR -->
                        <div class="col-sm-12 col-md-4 mt-sm-32">
                            @include('frontend.includes.sidebar')
                        </div>
                    </div>
                    
                </div>
                
            </section>

            @include('frontend.includes.platforms')

            @include('frontend.includes.footer')
            
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <!-- Your customer chat code -->
            <div class="fb-customerchat"
              attribution=setup_tool
              page_id="331524070975779"
              theme_color="#e31d3b">
            </div>
           

        </div>
        
    @include('frontend.includes.scripts')
    </body>
</html>
                