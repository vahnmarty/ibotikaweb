<footer class="footer-2 bg-lightgray bg-dark text-center-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <a href="#"><img class="" alt="Pic" src="../../img/footer-logo.png"></a>
                        </div>
                    
                        <div class="col-md-2 col-sm-2 col-xs-6 mt-xs-24">
                            <p class="font-bold mb0">Browse</p>
                            <a href=""><p class="mb0">Browse</p></a>
                            <a href=""><p class="mb0">News</p></a>
                            <a href=""><p class="mb0">Events</p></a>
                            <a href=""><p class="mb0">Blog</p></a>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-6  mt-xs-24">
                            <p class="font-bold mb0">Pages</p>
                            <a href=""><p class="mb0">About</p></a>
                            <a href=""><p class="mb0">Contact</p></a>
                            <a href=""><p class="mb0">Register</p></a>
                            <a href=""><p class="mb0">Login</p></a>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-6  mt-xs-24">
                            <p class="font-bold mb0">Explore</p>
                            <a href=""><p class="mb0">iBotika App</p></a>
                            <a href=""><p class="mb0">iBotika Plus</p></a>
                            <a href=""><p class="mb0">iBotika Web</p></a>
                            <a href=""><p class="mb0">iBotika Connect</p></a>
                        </div>
                    
                        <div class="col-md-2 col-sm-3 col-xs-6  mt-xs-24">
                            <p class="font-bold mb0">Connect</p>
                            <a href=""><p class="mb0">iBotika on Facebook</p></a>
                            <a href=""><p class="mb0">iBotika on Twitter</p></a>
                            <a href=""><p class="mb0">iBotika on Linkedin</p></a>
                            <a href=""><p class="mb0">iBotika on Instagram</p></a>
                        </div>
                    </div>

                    <hr class="mt48 mb48">

                    <div class="row">
                        <div class="col-sm-6">
                            <p>Copyright {{ date('Y') }} iBotika Software Services. All Rights Reserved.</p>
                        </div>

                        <div class="col-sm-6 text-right text-center-xs">
                            <p>Powered by <a href="">MIMS Philippines</a></p>
                        </div>
                    </div>
                </div>
            </footer>

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