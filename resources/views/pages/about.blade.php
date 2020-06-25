@extends('layout.app')
@include('pages.header')

@include('meta::manager', [
            'title'         => 'About - Rotaract District 9125 Nigeria.',
            'description'   => 'About Rotarct District 9125,nigeria',
            'image'         => '{{ asset("extra-images\aboutus-img.png") }}',
        ])
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1>About Us</h1>
                    <p>Rotaract District 9125, Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
@endsection

@section('content')
    <div class="charity-main-content">
        <div class="charity-main-section charity-aboutus-text-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <figure class="chrity-thumb-style">
                            <img src="extra-images/aboutus-img.png" alt="Rotaract Districk 9125 logo">
                        </figure>
                    </div>
                    <div class="col-md-7">
                        <div class="charity-aboutus-text text-justify  ">
                            <h2>About Rotaract district 9125</h2>
                            <p>
                                The defunct Rotary Districts 9120 and 9130 birthed our present District 9125 following a
                                decision by Rotary International Board in their February 2006 meeting for a merger of
                                the two Districts as a result of their respective shortfall in membership strength as
                                obtainable per district as required by Rotary International. This necessitated the two
                                Districts, 9120 and 9130 to work out modalities on the sustenance of the merger
                                officially announced in 2008 and became a reality on 2009/2010 Rotary Year.
                            </p>
                            <p>
                                Prior to the merger, the District 9120 clubs comprised of clubs from states in the North
                                namely; Benue, Kogi, Kaduna, Gombe, Katsina, Nassarawa, Plateau, Sokoto, Bauchi, Borno,
                                Kwara, Adamawa, Taraba, Kebbi, Zamfara, Kano, Jigawa, Yobe, Niger and the Federal
                                Capital Territory. District 9130 comprised of clubs from South Western States namely;
                                Ondo, Ekiti, Oyo and Osun. But today, virtually all the twenty three states and the FCT,
                                Abuja make up District 9125.
                            </p>
                            <p>
                                The Rotary District inarguably characterize the Rotaract Districting, hence Rotaract
                                Districts 9120 and 9130 has evolved same cycle to Rotaract District 9150. Rotaract
                                District 2195 is one of the four Districts in Nigeria with the largest coverage area of
                                twenty three states including the Fed. Capital Territory, Abuja out of the 36 states of
                                the federation.
                            </p>
                            <p>
                                Consequent on the aforementioned, the District estimably occupies 70% the land mass of
                                Nigeria. Comprises of over 60% of Rotaractors in Nigeria as the district with the
                                highest number of Rotaractors of about Five Thousand membership from over a hundred and
                                fifty participating community, institutional based and electronic clubs.
                            </p>
                            <p>
                                The array of leadership of the District 9125 had PDR Jibrin Mohammed as the pioneer
                                District Rotaract Representative and PDR Waheed Shittu as his successor 2009-2010 and
                                2010-2011 respectively. This was as a result of a resolution that since they were the
                                emerging District Rotaract Representatives of their respective Districts (PDR Mohammed-
                                9120 and PDR Shittu- 9130) to lead and take over in the successive manner of numerical
                                array.
                            </p>
                            <p>
                                In 2011/2012, when Rotary asked members to ‘Reach Within to Embrace Humanity’, Rotaract
                                District 9125 had her first elected District Rotaract Representative, -PDR Isaiah Ohaba
                                and since then, Rotaract District 9125 has had her successive train of leadership thus:
                            </p>
                            <p><strong>2012/2013 &ndash; PDR Shittu Wasiu</strong></p>
                            <p><strong>2013/2014 &ndash; PDR Abdul Malik Ali-Keller Marvis</strong></p>
                            <p><strong>2014/2015 &ndash; PDR Philip Ojo</strong></p>
                            <p><strong>2015/2016 &ndash; PDR Abdulsalam Afolabi Olaniyi</strong></p>
                            <p><strong>2016/2017 &ndash; PDR Oladimeji Jubril</strong></p>
                            <p><strong>2017/2018 &ndash; PDR Oyewole Michael</strong></p>
                            <p><strong>2018/2019 &ndash;PDR David Bello</strong></p>
                            <p><strong>2019/2020 &ndash; PDR Olowu Olanrewaju Peter</strong></p>
                            <p><strong>2020/2021 &ndash; DRR Washima B.C. Iornder</strong></p>

                            {{-- <a href="#" class="charity-about-btn">Become a Volunteer</a> --}}
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Main Section -->
        <!-- Main Section -->
        <div class="charity-main-section charity-modren-services-full bg-warning mb-0">
            <div class="container-fluid">
                <div class="charity-services charity-modren-services">
                    <ul class="row">
                        <li class="col px-0">
                            <div class="charity-modren-services-wrap">
                                <i class="fas fa-users"></i>
                                <h2>The FOUR WAY TEST</h2>
                                <p>Is it the <strong>TRUTH</strong>?</p>
                                <p>Is is <strong>FAIR </strong> all concerned?</p>
                                <p>Will it build <strong>GOODWILL </strong> <strong>BETTER</strong></p>
                                <p>Will it be <strong>BENEFICIAL</strong> to all concerned?</p>
                            </div>
                        </li>
                        <li class="col px-0">
                            <div class="charity-modren-services-wrap">
                                <i class="fas fa-book"></i>
                                <h2>Area of Focus</h2>
                                <p> Peace Building and Conflict Resolution</p>
                                <p> Disease Prevention and Treatment</p>
                                <p> Water, Sanitation and Hygiene</p>
                                <p> Maternal and child health</p>
                                <p> Basic education and literacy</p>
                                <p> Community Economic Development</p>
                            </div>
                        </li>
                        <li class="col px-0">
                            <div class="charity-modren-services-wrap">
                                <i class="fas fa-handshake"></i>
                                <h2>Avenues of Service</h2>
                                <p>Club Service</p>
                                <p>Vocational Service</p>
                                <p>Community Service</p>
                                <p>International Service</p>
                                <p>Youth Service</p>

                            </div>
                        </li>
                    </ul>
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
                            <h2>Our Distric Officers</h2>
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
                                        <a href="#"><img src="{{asset('images/members/cleo.png')}}" alt="DRRE "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> </a></h2>
                                                <span> </span>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/olayemi.png')}}" alt="Olayemi,
                                    Deputy Secretary "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#">Olayemi Suave</a></h2>
                                                <span>Deputy District Secretary</span>
                                                {{--                                            <p>RAC - </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/alex.png')}}" alt="prince alex
                                    district polio Chair "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Prince Okpanachi Alexander</a></h2>
                                                <span>District Polio Chairman</span>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/kemilade.png')}}" alt="kemilade
                                    Mustapha dts secretary "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Mustapha Samirah Kemilade</a></h2>
                                                <span>Deputy District Admin</span>
                                                {{--                                            <p>RAC - </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/ade.png')}}" alt="Ade DRR specia aid
"></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Ade </a></h2>
                                                <span>DRR Special Aid</span>
                                                {{--                                            <p>RAC - </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/akintayo.png')}}" alt="akintayo
                                    orisoa Distric trainer "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Akintayo Orisoga</a></h2>
                                                <span>District Trainer</span>
                                                {{--                                            <p>RAC - </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/muyideen.png')}}" alt="myideen "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> </a></h2>
                                                <span> </span>
                                                {{--                                            <p>RAC - </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/hamdalat.png')}}" alt="Hamdalat "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#">Hamdalat AYoola Yusuf</a></h2>
                                                <span>Nigerota Vice Chairman</span>
                                                {{--                                            <p>RAC - </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/abraham.png')}}" alt="Abraham
                                    Ocheja Chairman, DTS 2020 "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Usman Abraham Ocheja</a></h2>
                                                <span>Chairman, DTS 2020.</span>
                                                {{--                                            <p>RAC - </p>--}}
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/kazeem.png')}}" alt="kazeem "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Balogun Kazeem Ayotunde</a></h2>
                                                <span>Director of Media & Publicity</span>
                                                <p></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/zainab.png')}}" alt="DRRE "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Zainab Oluwadamilola Abayomi</a></h2>
                                                <span>Direct of Special Projects</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/ker.png')}}" alt="ker "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> Ushahemba Elijah</a></h2>
                                                <span>District Sergent at Arms II</span>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/rac1.png')}}" alt="DRRE "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> </a></h2>
                                                <span></span>
                                                <p></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/rac6.png')}}" alt="DRRE "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> </a></h2>
                                                <span></span>
                                                <p></p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/rac3.png')}}" alt="DRRE "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> </a></h2>
                                                <span></span>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="#"><img src="{{asset('images/members/rac7.png')}}" alt="DRRE "></a>
                                        <figcaption>
                                            <div class="charity-simple-team-media">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="charity-simple-team-text">
                                                <h2><a href="#"> </a></h2>
                                                <span></span>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>


                                {{--                            @foreach ($officers as $officer)--}}
                                {{--                                <li class="col-md-4">--}}
                                {{--                                    <figure>--}}
                                {{--                                        <a href="#"><img src="extra-images/simple-team-1.jpg" alt=""></a>--}}
                                {{--                                        <figcaption>--}}
                                {{--                                            <div class="charity-simple-team-media">--}}
                                {{--                                                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
                                {{--                                                <a href="#"><i class="fab fa-twitter"></i></a>--}}
                                {{--                                                <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="charity-simple-team-text">--}}
                                {{--                                                <h2><a href="#">{{ $officer->member_email }}</a></h2>--}}
                                {{--                                                <span>{{ $officer->office_held }}</span>--}}
                                {{--                                                <p>RAC - </p>--}}
                                {{--                                            </div>--}}
                                {{--                                        </figcaption>--}}
                                {{--                                    </figure>--}}
                                {{--                                </li>--}}
                                {{--                            @endforeach--}}
                            </ul>
                        </div>
                        <div class="charity-loadbtn"><a href="#">Load More</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Section -->


    </div>

@endsection
