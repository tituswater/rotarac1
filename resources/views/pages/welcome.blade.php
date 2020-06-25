@extends('layout.app')
{{--@include('pages.header')--}}
@section('page_title')
    Home
@endsection
@include('meta::manager', [
            'title'         => 'Home - Rotaract District 9125, Nigeria',
            'description'   => 'Official website of Rotaract District 9125, Nigeria',
        ])
@section('header')
    @include('pages.header')
@endsection
@section('banner')
    <img src="{{asset('extra-images/banner-1.jpg')}}" alt="">
    {{--    <div class="charity-subheader ">--}}
    {{--        <span class="black-transparent"></span>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}

    {{--                    <h1>This is the Official Website of ROtaract District 9125, Nigeria</h1>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection

@section('content')
    <!-- Content -->

    <!-- Main Section -->
    <div class="charity-main-section charity-modren-services-full bg-warning mb-0">
        <div class="container-fluid">
            <div class="charity-services charity-modren-services">
                <ul class="row">
                    <li class="col px-0">
                        <div class="charity-modren-services-wrap">
                            <i class="fas fa-users"></i>
                            <h2>The FOUR WAY TEST</h2>
                            <p>1. Is it the <strong>TRUTH</strong>?</p>
                            <p>2. Is is <strong>FAIR </strong> all concerned?</p>
                            <p>3. Will it build <strong>GOODWILL </strong> and <strong>BETTER</strong> friendship</p>
                            <p>4. Will it be <strong>BENEFICIAL</strong> to all concerned?</p>
                        </div>
                    </li>
                    <li class="col px-0">
                        <div class="charity-modren-services-wrap">
                            <i class="fas fa-book"></i>
                            <h2>Area of Focus</h2>
                            <p>1. Peace Building and Conflict Resolution</p>
                            <p>2. Disease Prevention and Treatment</p>
                            <p>3. Water, Sanitation and Hygiene</p>
                            <p>4. Maternal and child health</p>
                            <p>5. Basic education and literacy</p>
                            <p>6. Community Economic Development</p>
                        </div>
                    </li>
                    <li class="col px-0">
                        <div class="charity-modren-services-wrap">
                            <i class="fas fa-handshake"></i>
                            <h2>Avenues of Service</h2>
                            <p>1. Club Service</p>
                            <p>2. Vocational Service</p>
                            <p>3. Community Service</p>
                            <p>4. International Service</p>
                            <p>5. Youth Service</p>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Main Section -->


    <div class="charity-main-content">
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="charity-main-section charity-aboutus-text-full bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <figure class="chrity-thumb-style">
                            <img src="{{asset('extra-images/aboutus-img.png')}}" alt="">
                        </figure>
                    </div>
                    <div class="col-md-7">
                        <div class="charity-aboutus-text">
                            <h2>What is Rotaract</h2>
                            <p>Rotaract brings together people of ages 18 and above together to exchange ideas with
                                leaders in the community, develop leadership and professional skills, and have fun
                                through service. In communities worldwide, Rotary and Rotaract members work side by side
                                to take action through service. </p>
                            <div class="bg-danger p-5 text-white">
                                <h2 class="text-white">About Rotaract District 9125 Nigeria</h2>
                                <p>The defunct Rotary Districts 9120 and 9130 birthed our present District 9125
                                    following a
                                    decision by Rotary International Board in their February 2006 meeting for a merger
                                    of
                                    the two Districts as a result of their respective shortfall in membership strength
                                    as
                                    obtainable per district as required by Rotary International. This necessitated the
                                    two
                                    Districts, 9120 and 9130 to work out modalities on the sustenance of the merger
                                    officially announced in 2008 and became a reality on 2009/2010 Rotary Year. </p>
                                <a href="/about" class="btn  btn-outline-light">Read more..</a>
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
                                            <small class="charity-cause-raised">Zone <br>
                                                <strong> {{ $club->zone_title }} </strong></small>
                                            <small class="charity-cause-raised">State <br>
                                                <strong>{{ $club->state_name }}</strong>&nbsp;</small>
                                            <div class="clearfix"></div>
                                            <h2><a href="#">Rotaract Club of {{ $club->club_acronym }}</a></h2>
                                            <p>President: <br/>
                                                Venue: <br/>
                                                Time:
                                                Phone:</p>
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
        <!-- Main Section -->

        <!-- Main Section -->
        <div class="charity-main-section charity-simple-team-full pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="charity-fancy-title">
                            <h2>Our Leaders</h2>
                        </div>
                        <div class="charity-team charity-simple-team">
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
        });
    </script>
@endsection
