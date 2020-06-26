@extends('layout.app')
{{--@include('pages.header')--}}
@section('page_title')
    Home
@endsection
@section('css')
    {{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet"/>--}}
    {{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet"/>--}}
    {{--    <style>--}}
    {{--        .main-slider {--}}
    {{--            overflow: hidden;--}}
    {{--            display: block;--}}
    {{--            overflow: hidden;--}}
    {{--            width: 100%;--}}
    {{--        }--}}

    {{--        s.welcome-font {--}}
    {{--            color: red;--}}
    {{--        }--}}

    {{--        .slide-box {--}}
    {{--            position: relative;--}}
    {{--        }--}}

    {{--        .text-box-slider {--}}
    {{--            position: absolute;--}}
    {{--            top: 50%;--}}
    {{--            left: 0;--}}
    {{--            text-align: center;--}}
    {{--            width: 100%;--}}
    {{--            transform: translateY(-50%);--}}
    {{--            line-height: 36px;--}}
    {{--        }--}}

    {{--        samp.welcome-font {--}}
    {{--            font-family: 'Great Vibes', cursive;--}}
    {{--            color: #FFF;--}}
    {{--            font-size: 44px;--}}
    {{--            font-weight: 600;--}}
    {{--        }--}}

    {{--        .text-box-slider h1 {--}}
    {{--            color: red;--}}
    {{--            text-transform: uppercase;--}}
    {{--            margin-top: 13px;--}}
    {{--            background: yellow;--}}
    {{--            width: 26%;--}}
    {{--            margin: auto;--}}
    {{--            font-size: 51px;--}}
    {{--            font-weight: 600;--}}
    {{--            display: block;--}}
    {{--            line-height: 71px;--}}
    {{--            margin-bottom: 21px;--}}
    {{--            margin-top: 14px;--}}
    {{--        }--}}

    {{--        .text-box-slider p {--}}
    {{--            color: red;--}}
    {{--            font-size: 17px;--}}
    {{--            text-align: center;--}}
    {{--            width: 51%;--}}
    {{--            margin: auto;--}}
    {{--            font-weight: 300;--}}
    {{--            line-height: 24px;--}}
    {{--            margin-bottom: 20px;--}}
    {{--        }--}}

    {{--        .btn-slider {--}}
    {{--            background: yellow;--}}
    {{--            color: red;--}}
    {{--            padding: 10px 30px;--}}
    {{--            border: solid 1px;--}}
    {{--            display: inline-block;--}}
    {{--            margin-top: 13px;--}}
    {{--            font-size: 18px;--}}
    {{--            transition: all ease-in-out 0.5s;--}}
    {{--            text-transform: uppercase;--}}
    {{--            font-weight: normal;--}}
    {{--        }--}}

    {{--        .btn-slider:hover {--}}
    {{--            background: transparent;--}}
    {{--            color: white;--}}
    {{--            transition: all ease-in-out 0.5s;--}}
    {{--            color: #fff;--}}
    {{--            border: solid 1px;--}}
    {{--        }--}}

    {{--        @media (min-width:999px) {--}}
    {{--           .main-slider img {--}}
    {{--               width: 100%;--}}
    {{--               height: 738px;--}}
    {{--               object-fit: cover;--}}
    {{--           }--}}

    {{--       }--}}
    {{--        @media (max-width:400px) {--}}
    {{--            .main-slider img {--}}
    {{--                width: 100%;--}}
    {{--                height: auto;--}}
    {{--                object-fit: cover;--}}
    {{--            }--}}

    {{--        }--}}

    {{--    </style>--}}
@endsection
@include('meta::manager', [
            'title'         => 'Home - Rotaract District 9125, Nigeria',
            'description'   => 'Official website of Rotaract District 9125, Nigeria',
        ])
@section('header')
    @include('pages.header')
@endsection
@section('banner')
    <br/><br/><br/><br/>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('extra-images/banner-1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('extra-images/banner-2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('extra-images/bans.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{--    <section class="main-slider mt-md-5 p-0 bg-danger ">--}}
    {{--        <div class="lazy slider mb-0 p-0" data-sizes="50vw">--}}
    {{--            <div class="slide-box">--}}
    {{--                <img src="{{asset('extra-images/bans.jpg')}}">--}}
    {{--                <div class="text-box-slider">--}}
    {{--                    <samp class="welcome-font text-danger">Welcome To</samp>--}}
    {{--                    <h2>Rotaract District 9125 Nigeria</h2>--}}
    {{--                    <p>Specialists in design and manufacture of all types of window applications and furnishings for--}}
    {{--                        both residential and commercial projects.</p>--}}
    {{--                    <a href="#" class="btn-slider">Contact Us</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="slide-box">--}}
    {{--                <img class="img-fluid" src="{{asset('extra-images/banner-1.jpg')}}">--}}
    {{--                <div class="text-box-slider">--}}
    {{--                    <samp class="welcome-font text-danger">Welcome To</samp>--}}
    {{--                    <h2>Rotaract District 9125 Nigeria</h2>--}}
    {{--                    <p>Specialists in design and manufacture of all types of window applications and furnishings for--}}
    {{--                        both residential and commercial projects.</p>--}}
    {{--                    <a href="#" class="btn-slider">Contact Us</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}



    {{--        </div>--}}
    {{--    </section>--}}


@endsection

@section('content')
    <!-- Content -->

    <!-- Main Section -->

    <!-- Main Section -->

    <div class="charity-main-content ">
        <!-- Main Section -->

        <div class="charity-main-section charity-aboutus-text-full bg-white pb-4 ">
            <div class="container">
                <div class="row">
                    {{--                    <div class="col-md-12">--}}
                    {{--                        <figure class="chrity-thumb-style">--}}
                    {{--                            <img src="{{asset('extra-images/aboutus-img.png')}}" height="100" alt="">--}}
                    {{--                        </figure>--}}
                    {{--                    </div>--}}
                    <div class="col-md-12">


                        <div class="bg-primary p-5 text-white">
                            <h2 class="display-4 text-white">What is Rotaract</h2>
                            <hr/>
                            <p>Rotaract brings together people of ages 18 and above together to exchange ideas with
                                leaders in the community, develop leadership and professional skills, and have fun
                                through service. In communities worldwide, Rotary and Rotaract members work side by side
                                to take action through service. </p>
                            <a href="/about" class="btn  btn-outline-light">Read more..</a>
                        </div>

                    </div>


                </div>
            </div>
        </div>


        <div class="charity-main-section charity-aboutus-text-full bg-danger text-white pb-5 pt-5">
            <div class="container">
                <div class="row justify-content-center mt-4 mb-4">
                    <div class="col-md-12">
                        <h1 class="display-4 pb-3 text-white">Rotaract
                            <strong class="text-light   ">FOUR WAY TEST</strong></h1>
                        </strong></h1>
                        <ol class="text-white">
                            <li>
                                <h2 class="text-white">Is it the&nbsp;<strong class="text-white">TRUTH</strong>?</h2>
                            </li>
                            <li>
                                <h2 class="text-white">Is it&nbsp;<strong class="text-white">FAIR&nbsp;</strong>all
                                    concerned?</h2>
                            </li>
                            <li>
                                <h2 class="text-white">Will it build&nbsp;<strong
                                        class="text-white">GOODWILL&nbsp;</strong>and&nbsp;
                                    <strong class="text-white">BETTER</strong>&nbsp;friendship?
                                </h2>
                            </li>
                            <li>
                                <h2 class="text-white">Will it be&nbsp;<strong class="text-white">BENEFICIAL</strong>&nbsp;to
                                    all
                                    concerned?</h2>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="charity-main-section charity-aboutus-text-full bg-light pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class=" text-secondary">
                            <h1 class="text-dark display-4">About Rotaract District 9125 Nigeria</h1>
                            <hr/>
                            <p style="font-size: 18pt; line-height: 35pt;">The defunct Rotary Districts 9120 and 9130
                                birthed our
                                present
                                District
                                9125
                                following a
                                decision by Rotary International Board in their February 2006 meeting for a merger of
                                the two Districts as a result of their respective shortfall in membership strength as
                                obtainable per district as required by Rotary International. This necessitated the two
                                Districts, 9120 and 9130 to work out modalities on the sustenance of the merger
                                officially announced in 2008 and became a reality on 2009/2010 Rotary Year.</p>
                            <a href="/about" class="btn  btn-outline-danger btn-lg">Read more..</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="charity-main-section charity-aboutus-text-full bg-white pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="display-4 text-center" > <strong>ROTARACT</strong> <br/>Avenues of Service </h2>

                    <div class="col-md-6">
                        <div class=" text-secondary text-center">
                            <h2>Club Service</h2>
                            <h2>Vocational Service</h2>
                            <h2>Community Service</h2>
                            <h2>International Service</h2>
                            <h2>Youth Service</h2>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="charity-main-section charity-aboutus-text-full bg-light pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 p-3">
                        <h1 class="display-4 text-center">Our Causes</h1>

                        <p class="text-center" style="font-family: 'Century Gothic'; font-size:14pt;
                        line-height:25pt;color:grey">
                            Rotary is dedicated to six areas of focus to build international relationships, improve
                            lives, and create a better world to support our peace efforts and end polio forever.
                        </p>

                    </div>


                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 550px">
                            <img class="card-img-top" src="{{asset('images/promote_peace.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Promoting peace</h5>
                                <p class="card-text">Rotary encourages conversations to foster understanding within and
                                    across cultures. We train adults and young leaders to prevent and mediate conflict
                                    and help refugees who have fled dangerous areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 550px">
                            <img class="card-img-top" src="{{asset('images/prevent_disease.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Fighting disease</h5>
                                <p class="card-text">We educate and equip communities to stop the spread of
                                    life-threatening diseases like polio, HIV/AIDS, and malaria. We improve and expand
                                    access to low-cost and free health care in developing areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 550px">
                            <img class="card-img-top" src="{{asset('images/clean_water.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Providing clean water, sanitation, and hygiene</h5>
                                <p class="card-text">We support local solutions to bring clean water, sanitation, and
                                    hygiene to more people every day. We don’t just build wells and walk away. We share
                                    our expertise with community leaders and educators to make sure our projects succeed
                                    long-term.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 550px">
                            <img class="card-img-top" src="{{asset('images/mother.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Saving mothers and children</h5>
                                <p class="card-text">Nearly 6 million children under the age of five die each year
                                    because of malnutrition, poor health care, and inadequate sanitation. We expand
                                    access to quality care, so mothers and their children can live and grow
                                    stronger.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 550px">
                            <img class="card-img-top" src="{{asset('images/education.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Supporting education</h5>
                                <p class="card-text">More than 775 million people over the age of 15 are illiterate. Our
                                    goal is to strengthen the capacity of communities to support basic education and
                                    literacy, reduce gender disparity in education, and increase adult literacy.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 550px">
                            <img class="card-img-top" src="{{asset('images/economi.jpg')}}" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title"> Growing local economies</h5>
                                <p class="card-text">We carry out service projects that enhance economic and community
                                    development and create opportunities for decent and productive work for young and
                                    old. We also strengthen local entrepreneurs and community leaders, particularly
                                    women, in impoverished communities.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="charity-main-section bg-danger charity_counter_full m-0">
            <span class="black-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="charity-counter" id="counter">
                            <ul class="row">
                                <li class="col-md-3">
                                    <i class="icon-globe charity-bgcolor"></i>
                                    <span class="counter-value" data-count="{{ $statesNo  }}">0</span>
                                    <small>States</small>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-home charity-bgcolor"></i>
                                    <span class="counter-value" data-count="{{ $clubsNo  }}">0</span>
                                    <small>Clubs</small>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-people charity-bgcolor"></i>
                                    <span class="counter-value" data-count="{{ $memberNo  }}"></span>
                                    <small>Rotaractors</small>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-vine charity-bgcolor"></i>
                                    <span class="counter-value" data-count="120">0</span>
                                    <small>Event Held</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->
        <div class="charity-main-section charity-donation-parallex-full mb-0">
            <span class="light-black-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="charity-donation-parallex">
                            <h2>With your help, we can make lives better in your community and around the world</h2>
                            <p>Donating to Rotary means clean water and sanitation. Health and hope in areas that were
                                once
                                ravaged by diseases like polio. Economic development and new opportunities. Your
                                financial
                                help makes all this happen, and more. </p>
                            <div class="clearfix"></div>
                            {{--                        <div class="charity-causestrip-section">--}}
                            {{--                            <span class="charity-left-section">Raised: <small>3250$</small></span>--}}
                            {{--                            <span class="charity-right-section">Goal: <small>5000$</small></span>--}}
                            {{--                            <div data-width='30' class="charity-cause-progressbar"></div>--}}
                            {{--                        </div>--}}
                            <div class="clearfix"></div>
                            <a href="#" class="charity-donation-parallex-btn">Make Donation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->


        <!-- Main Section -->
        {{--        Clubs--}}
        @if($clubs->count() > 0)
            <div class="charity-main-section latest_causes_full mt-0 bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="charity-fancy-title">
                                <h2>Clubs across the District </h2><br>
                                <span class="muted text-warning">Note: Only Three Clubs are selected randomly</span>
                            </div>
                            <div class="charity-causes charity-cause-grid">
                                <ul class="row">
                                    @foreach ($clubs as $club )
                                        <li class="col-md-4 ">
                                            <figure><a href="#"><img src="{{asset('images/rotaract_district9125.png') }}"
                                                                     alt="{{ $club->club_name }}"></a>
                                                <figcaption><a href="#" class="charity-cause-grid-hover">Open </a>
                                                </figcaption>
                                            </figure>
                                            <div data-width='90' data-target='95' class="charity-cause-progressbar"></div>
                                            <div class="charity-cause-grid-text bg-light">
                                                <small class="charity-cause-raised text-center">Zone <br>
                                                    <strong> {{ $club->zone_title }} </strong></small>
                                                <small class="charity-cause-raised text-center">State <br>
                                                    <strong>{{ $club->state_name }}</strong>&nbsp;</small>
                                                <div class="clearfix"></div>
                                                <h2><a href="#">Rotaract Club of {{ $club->club_acronym }}</a></h2>
                                                <p>President: {{ $club->name}}<br/>
                                                    Venue: {{ $club->meeting_venue }} <br/>
                                                    Time: {{ $club->meeting_time }} <br/>
                                                    Phone: {{ $club->phone }}</p>
                                                <a href="{{ route('clubs.show', $club->club_name) }}"
                                                   class="charity-more-btn"><i class="fas fa-arrow-right"></i> View</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                            <div class="charity-loadbtn"><a href="{{ route('clubs.index') }}">Load More </a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="charity-main-section charity-simple-team-full pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="charity-fancy-title">
                            <h2>Our District Leaders</h2>
                        </div>
                        <div class="charity-team charity-simple-team ">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/cleo.png')}}" alt="DRR Washima
                                    Cleopatra"></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Washima Cleopatra</a></h2>
                                                <span>District Rotaract Representative</span>
                                                {{--                                            <p>Rotary Opens Oppurtunities </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/olowu.png')}}" alt="IPDRR Peter
                                    Olowu"></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Peter Olowu</a></h2>
                                                <span>Immediate Past District Rotaract Representative</span>
                                                {{--                                            <p>Rotary Connect the World</p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/jumoke.png')}}" alt="DRRE "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Rot. Jumoke Bamgboye</a></h2>
                                                <span>District Governor, 2020-21</span>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>

                            </ul>
                        </div>
                        <div class="charity-loadbtn"><a href="/about">Load More</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->


        <!-- Main Section -->
        <div class="charity-main-section charity-event-grid-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="charity-fancy-title">
                            <h2>Upcoming Events</h2>
                        </div>
                        <div class="charity-event charity-event-grid">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('extra-images/event-grid-1.jpg')}}" alt=""></a>
                                        <figcaption>
                                            15 <span>Oct<br/>2020</span>
                                        </figcaption>
                                        <a href="#" class="charity-caption-btn"><span>View Detail</span></a>
                                    </figure>
                                    <div class="charity-event-grid-text">
                                        <h2><a href="#">AYATUTU 2020</a></h2>
                                        <p>Connecting the world through Rotary was indeed a succes and its time for us
                                            to also open oppurtunities through Rotary.</p>
                                        <ul class="charity-event-grid-option">
                                            <li><span>Start Time :</span>On review</li>
                                            <li><span>Venue:</span> Public Institute of Nigeria, Abuja</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('extra-images/event-grid-1.jpg')}}" alt=""></a>
                                        <figcaption>
                                            15 <span>Feb <br/>2021</span>
                                        </figcaption>
                                        <a href="#" class="charity-caption-btn"><span>View Detail</span></a>
                                    </figure>
                                    <div class="charity-event-grid-text">
                                        <h2><a href="#">ROTACULTURE 2020</a></h2>
                                        <p>Connecting the world through Rotary was indeed a succes and its time for us
                                            to also open oppurtunities through Rotary.</p>
                                        <ul class="charity-event-grid-option">
                                            <li><span>Start Time :</span>On review</li>
                                            <li><span>Venue:</span> Ondo state</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('extra-images/event-grid-1.jpg')}}" alt=""></a>
                                        <figcaption>
                                            15 <span> Mar <br/>2021</span>
                                        </figcaption>
                                        <a href="#" class="charity-caption-btn"><span>View Detail</span></a>
                                    </figure>
                                    <div class="charity-event-grid-text">
                                        <h2><a href="#">Rotary FOundation 2020</a></h2>
                                        <p> its time for us
                                            to also open oppurtunities through Rotary.</p>
                                        <ul class="charity-event-grid-option">
                                            <li><span>Start Time :</span>On review</li>
                                            <li><span>Venue:</span> Ondo state</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Section -->

        {{--    <!-- Main Section -->--}}
        {{--    <div class="charity-main-section charity-simple-gallery-full">--}}
        {{--        <div class="container-fluid">--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-md-12">--}}
        {{--                    <div class="charity-fancy-title">--}}
        {{--                        <h2>Our Gallery</h2>--}}
        {{--                    </div>--}}
        {{--                    <div class="charity-gallery charity-simple-gallery">--}}
        {{--                        <ul class="row">--}}
        {{--                            <li class="col-md-2 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="{{asset('extra-images/home-gallery-1.jpg')}}" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-1.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-4 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="extra-images/home-gallery-5.jpg" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-5.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-2 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="extra-images/home-gallery-2.jpg" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-2.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-4 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="extra-images/home-gallery-6.jpg" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-6.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-4 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="extra-images/home-gallery-7.jpg" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-7.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-2 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="extra-images/home-gallery-3.jpg" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-3.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-2 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="extra-images/home-gallery-4.jpg" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-4.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-4 px-0">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="extra-images/home-gallery-8.jpg" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <span></span>--}}
        {{--                                        <a data-fancybox="gallery" href="extra-images/home-gallery-8.jpg"><i--}}
        {{--                                                class="fa fa-search-plus"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                            </li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        {{--    <!-- Main Section -->--}}

        {{--    <!-- Main Section -->--}}
        {{--    <div class="charity-main-section charity-simple-blog-full">--}}
        {{--        <div class="container">--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-md-12">--}}
        {{--                    <div class="charity-fancy-title">--}}
        {{--                        <h2>Our Blogs</h2>--}}
        {{--                    </div>--}}
        {{--                    <div class="charity-blog charity-simple-blog">--}}
        {{--                        <ul class="row">--}}
        {{--                            <li class="col-md-6">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="{{asset('extra-images/blog-simple-1.jpg')}}" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <time datetime="2008-02-14 20:00" class="charity-bgcolor">18 <span>AUG</span>--}}
        {{--                                        </time>--}}
        {{--                                        <a href="#" class="blog-link-hover"><i class="fa fa-link"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                                <div class="charity-simple-blog-text">--}}
        {{--                                    <ul class="charity-simple-blog-options">--}}
        {{--                                        <li><i class="fa fa-map-marker-alt"></i> George Street, London United</li>--}}
        {{--                                        <li><i class="fa fa-comments"></i> <a href="#">5 Comments</a></li>--}}
        {{--                                        <li><i class="far fa-heart"></i> <a href="#">Like</a></li>--}}
        {{--                                    </ul>--}}
        {{--                                    <h2><a href="#">Monsoon floods world vision warns of spkie in child</a></h2>--}}
        {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nibh,--}}
        {{--                                        fringilla.</p>--}}
        {{--                                    <a href="#" class="charity-simple-blog-btn">Read More</a>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                            <li class="col-md-6">--}}
        {{--                                <figure>--}}
        {{--                                    <a href="#"><img src="{{asset('extra-images/blog-simple-2.jpg')}}" alt=""></a>--}}
        {{--                                    <figcaption>--}}
        {{--                                        <time datetime="2008-02-14 20:00" class="charity-bgcolor">12 <span>JAN</span>--}}
        {{--                                        </time>--}}
        {{--                                        <a href="#" class="blog-link-hover"><i class="fa fa-link"></i></a>--}}
        {{--                                    </figcaption>--}}
        {{--                                </figure>--}}
        {{--                                <div class="charity-simple-blog-text">--}}
        {{--                                    <ul class="charity-simple-blog-options">--}}
        {{--                                        <li><i class="fa fa-map-marker-alt"></i> George Street, London United</li>--}}
        {{--                                        <li><i class="fa fa-comments"></i> <a href="#">7 Comments</a></li>--}}
        {{--                                        <li><i class="far fa-heart"></i> <a href="#">Like</a></li>--}}
        {{--                                    </ul>--}}
        {{--                                    <h2><a href="#">charity fears that soth suda nese refugee children</a></h2>--}}
        {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nibh,--}}
        {{--                                        fringilla.</p>--}}
        {{--                                    <a href="#" class="charity-simple-blog-btn">Read More</a>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                    <div class="charity-loadbtn"><a href="#">See All</a></div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        {{--    <!-- Main Section -->--}}

    </div>
    <!-- Content -->

@endsection
@section('bmm')
    <script>
        jQuery(document).ready(function ($) {
            // $(".lazy").slick({
            //     lazyLoad: 'ondemand', // ondemand progressive anticipated
            //     infinite: true,
            //     arrows: true,
            //     autoplay: true,
            //     autoplaySpeed: 5000,
            // });

        });
        // Counter
        var a = 0;
        $(window).scroll(function () {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function () {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 5000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }

        });


    </script>

    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
@endsection
