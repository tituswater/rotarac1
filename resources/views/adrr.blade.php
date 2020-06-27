@extends('layout.app')
{{--@include('pages.header')--}}
@section('page_title')
    Home
@endsection
@section('css')

@endsection
@include('meta::manager', [
            'title'         => 'Home - Rotaract District 9125, Nigeria',
            'description'   => 'Official website of Rotaract District 9125, Nigeria',
        ])
@section('header')
    @include('pages.header')
@endsection
@section('banner')
    <div class="charity-subheader">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1>Ass. District Rotaract Representatves</h1>
                    <p>Rotaract District 9125, Nigeria.</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')


    <div class="charity-main-content ">
        <div class="charity-main-section charity-simple-team-full pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="charity-team charity-simple-team ">
                            <ul class="row">
                                @foreach($adrrs as $adrr)
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="{{$adrr->avatar === null ? asset
                                                    ('images/members/default.jpg')  :
                                                asset('images/members/'.$adrr->avatar)}}" alt="DRR Washima
                                    Cleopatra"></a>
                                            <figcaption>
                                                <div class="charity-simple-team-media">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </div>
                                                <div class="charity-simple-team-text">
                                                    <h2><a href="#"> {{$adrr->name}}</a></h2>
                                                    <span>ADRR, Zone {{$adrr->zone_title.' '.
                                                            $adrr->state_name}} State</span>
                                                    {{--                                            <p>Rotary Opens Oppurtunities </p>--}}
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                        {{--                                <div class="charity-loadbtn"><a href="/about">Load More</a></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('bmm')

@endsection
