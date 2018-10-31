<div class="nav-container">
            <nav>
                <div class="nav-utility">
                    <div class="module left module-1">
                        <span class="sub">Powered by <strong>MIMS Philippines</strong></span>
                    </div>
                    <div class="module left">
                        <i class="ti-mobile">&nbsp;</i>
                        <span class="sub">+63 906 382 8690</span>
                    </div>
                    <div class="module left">
                        <i class="ti-email">&nbsp;</i>
                        <span class="sub">info@ibotika.com</span>
                    </div>
                    <div class="module right top10" style="padding: 0;">
                        <a class="btn btn-active mt10" href="#">iBotika Web</a>
                        <a class="btn mt10" href="#">iBotika App</a>
                        <a class="btn mt10" href="#">iBotika Plus</a>
                    </div>
                </div>
                <div class="nav-bar">
                    <div class="module left">
                        <a href="{{ url('/') }}">
                            <img class="logo logo-light" alt="Foundry" src="img/logo-light.png">
                            <img class="image-xs logo-dark" alt="Foundry" src="img/logo-light.png">
                        </a>
                    </div>
                    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="module-group right">
                        <div class="module left">
                            <ul class="menu">
                                <li>
                                    <a href="#">Browse</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                @guest
                                <li>
                                    <a href="{{ url('register') }}" class="color-skyblue">Register</a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}" class="color-pink">Login</a>
                                </li>
                                @endguest
                                @auth
                                <li class="has-dropdown dropdown-btn">
                                    <a href="#" class="btn btn-filled" style="color: white; padding-right: 35px">
                                        <img class="" src="{{ $logged_in_user->picture }}" alt="Profile Picture" width="30" style="margin-right: 15px; border-radius: 50%"> {{ $logged_in_user->first_name }}</a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('logout') }}">
                                                Logout
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('account') }}">
                                                My Account
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    
                                </li>
                                @endauth


                            </ul>
                        </div>
                    </div>
                    
                </div>
            </nav>
        
        </div>