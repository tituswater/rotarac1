@extends('layout.app2')
@section('page_title')
    Club
@endsection
@include('pages.header')

@section('banner')
    <!-- Banner -->
    <div class="charity-subheader">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1>List of all Rotaract Clubs</h1>
                    <p>Rotaract District 9125, Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

@endsection

@section('content')
    <!-- Content -->

    <div class="charity-main-content">
        <div class="charity-main-section charity-aboutus-text-full">
            <div class="container">
                <div class="charity-causes charity-cause-grid inner-wrap">

                        @if ($counst < 0)

                            <div class="col-md-12">
                                <div class="error-page-wrap">
                                    <div class="error-page-inner">
                                        <h2>Oops! </h2>
                                        <span>No Club found in the Database</span>
                                        {{--                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Sed urna nibh fringilla fermentum at.</p>--}}
                                        <a href="#" class="error-page-btn">Contact Admin</a>
                                        <form>
                                            <input type="text" placeholder="Enter your Keyword">
                                            <input type="submit" value="">
                                            <i class="fa fa-search"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @else
                        <ul class="row">
                            @foreach ($clubs as $club )

                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{ asset('images/rotaract_district9125.png') }}" alt=""></a>
                                        <figcaption><a href="#" class="charity-cause-grid-hover"><i
                                                    class="fa fa-users"></i> {{ $club->club_acronym }}</a></figcaption>
                                    </figure>
                                    <div data-width='90' data-target='95' class="charity-cause-progressbar"></div>
                                    <div class="charity-cause-grid-text">
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
                        @endif


                    </ul>
                    {!! $clubs->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <script>
        $('#element').toast('dispose')
    </script>
@endsection
