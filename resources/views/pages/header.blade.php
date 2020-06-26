<header id="charity-header" class="charity-header-one ">

    <!-- Top Strip -->
    <div class="charity-top-strip ">
        <div class="container">
            <div class="row ">
                <aside class="col-6 charity-strip-text">

                    <p>
                        @guest
                            <span>Email: <a href="mailto:name@email
                        .com">info@rotaractdistrict9125.org.ng</a></span>
                        @else

                            <img src="{{asset('images/members/rac11.png')}}" class="img-fluid" width="30"
                                 style="border-radius:100px;"> logged in as:
                            {{ Auth::user()->nickname == null ? Auth::user()->name :
                       Auth::user()->nickname }}

                            <a class="btn  btn-outline-light btn-sm" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>̀

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                    @endguest
                    </p>


                </aside>
                <aside class="col-6">

                    <div class="float-right">
                        <ul class="charity-social-network text-white">
                            <li>
                                <a href="#" class="fab fa-facebook-f"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-pinterest-p"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-linkedin-in"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                        </ul>
                        {{--                        <a href="#" class="charity-strip-btn charity-bgcolor">Donate Now</a>--}}

                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Top Strip -->

    <!-- Main Header -->
    <div class="charity-main-header " style="background: #fff">
        <div class="container">
            <div class="row">
                <aside class="col-2">
                    <a href="index.html" class="charity-logo"><img src="{{asset('images/rotaract_logo.png')}}"

                                                                   alt="Rotaract District 9125, Nigeria logo"></a>
                </aside>
                <aside class="col-10">
                    <div class="float-right">
                        <a href="#menu" class="menu-link active"><span></span></a>
                        <nav id="menu" class="menu charity-navigation">
                            <ul>
                                <li class=""><a href="/">Home</a></li>
                                <li><a href="/about">About US</a>
                                    <ul class="children">
                                        <li><a href="{{route('officers.index')}}">District Officers</a></li>
                                        <li><a href="{{route('adrrs.index')}}">Ass. Dist. Reps (ADRRs)</a></li>
                                        <li><a href="#">Past Distric Oficers</a></li>
                                        <li><a href="#"> </a></li>

                                    </ul>
                                </li>
                                <li><a href="/#">Our Causes</a>
                                    <ul class="children">
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Events</a>
                                            <ul class="children">
                                                @for($i=0; $i<4; $i++)
                                                    <li><a href="#">Event {{$i}}</a></li>
                                                @endfor
                                            </ul>
                                        </li>

                                    </ul>
                                </li>


                                <li><a href="#">Member Center</a>
                                    <ul class="children">
                                        @guest
                                            <li>
                                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li>
                                                <a href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                            </li>
                                        @endguest
                                        <li><a href="{{ route('clubs.index') }}">Clubs</a></li>
                                        <li><a href="#">Events</a>
                                            <ul class="children">
                                                <li><a href="#">Event List</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact</a></li>
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Admin</a>
                                    <ul class="children">
                                        <li><a href="{{route('clubs.index')}}">Manage Clubs </a></li>

                                        <li><a href="{{route('officers.index')}}">District Officers</a></li>
                                        <li><a href="{{route('adrrs.index')}}">Ass. Dist. Reps (ADRRs)</a></li>
                                        <li><a href="{{route('presidents.index')}}">Manage Presidents </a></li>
                                        <li><a href="{{route('members.index')}}">Manage members </a></li>
                                        <li><a href="{{route('offices.index')}}">Manage Offices </a></li>
                                        <li><a href="{{route('officers.index')}}">Manage Officers </a></li>
                                        <li><a href="{{route('zones.index')}}">Manage Zones </a></li>
                                        <li><a href="{{route('states.index')}}">Manage States </a></li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <ul class="charity-header-options">
                            <li><a href="#" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-opencart"></i></a>
                                <div class="charity-cart-box">
                                    <p>No products in the cart.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Main Header -->

</header>
