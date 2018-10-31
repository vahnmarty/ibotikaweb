
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>iBotika Web | Find and Compare drugs near you</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('frontend.includes.styles')
    </head>
    <body>
                
        @include('frontend.includes.navbar')
        
        <div class="main-container">
            <section class="bg-secondary pt0 pb0">
                @include('includes.partials.messages')
            </section>

            @yield('content')

            @include('frontend.includes.footer')
            
        </div>
        
    @include('frontend.includes.scripts')
    </body>
</html>
                