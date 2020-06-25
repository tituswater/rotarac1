@foreach ($clubs as $club)
@extends('layout.app2')
@include('pages.header')
@include('meta::manager', [
    'title'         => $club_name,
    'description'   => 'This is my example description',
    'image'         => 'Url to the image',
])
@section('banner')
<!-- Banner -->
<div class="charity-subheader pb-0 ">
    <span class="black-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Rotaract Club<br> {{ $club_name}}</h1>
                <p> {{ $club->state_name }} State Zone {{   $club->zone_title }}, District 9125 Nigeria</p>

                </div>
                <div class="col-md-12 pb-1">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Members <span class="badge badge-light">{{ $memberNo }}</span></a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Project(s)</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                        </div>
                      </nav>

                </div>

        </div>
    </div>
</div>
<!-- Banner -->

@endsection

@section('content')
<div class="container">
<div class="tab-content " id="nav-tabContent">
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

    <div class="charity-team charity-classic-team">

            <ul class="row">
                @foreach ($members as $member )
                <li class="col-md-3 mt-2">
                    <figure><a href="{{ route('members.show', $member->name) }}"><img src="{{ asset
                    ('extra-images/simple-team-1.jpg') }}" alt=""></a>
                        <figcaption><a href="{{ route('members.show', $member->name) }}"
                                       class="charity-classic-team-hover charity-bgcolor"><i class="fa fa-link"></i></a></figcaption>
                    </figure>
                    <div class="charity-classic-team-text">
                        <h2><a href="{{ route('members.show', $member->name) }}">{{ $member->name }}</a></h2>
                        <span>Co-director</span>
                        <p>Lorem ipsum dor sit adipi adipisc elit Etia vas</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>

       </div>

    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    </div>
</div>
</div>

@endsection
@endforeach
