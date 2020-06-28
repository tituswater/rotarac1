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
                <div class="col-md-12 ">
                    <h1>Dashboard</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
@endsection

@section('content')
    <div class="charity-main-content">
        <div class="container pt-2 pb-5">
            <div class="row justify-content-center">
                @foreach($details as $detail)
                    @include('userProfileCheck')

                @endforeach
                <div class="col-md-9 mb-2 ">
                    <div class="card">
                        <div class="card-body">

                            <div class="template-demo text-center ">
                                <button type="button" class="btn btn-social-icon btn-facebook"><i
                                        class="fa fa-facebook"></i></button>
                                <button type="button" class="btn btn-social-icon btn-youtube"><i
                                        class="fa fa-youtube"></i></button>
                                <button type="button" class="btn btn-social-icon btn-twitter"><i
                                        class="fa fa-twitter"></i></button>
                                <button type="button" class="btn btn-social-icon btn-linkedin"><i
                                        class="fa fa-linkedin"></i></button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-9 left bio">
                    <div class="card">
                        <div class="card-body">
                            @foreach($details as $detail)
                                <div class="float-md-right mb-2 text-center">

                                    @if(Auth::user()->avatar != null)
                                        <img src="{{asset('images/members/'. Auth::user()->avatar.'')}}"
                                             class="img-thumbnail rounded"
                                             alt="{{Auth::user()->name}}">
                                    @else
                                        <img src="{{asset('images/members/default.jpg')}}"
                                             class="img-thumbnail rounded "
                                             alt="{{Auth::user()->name}}">
                                    @endif<br/>
                                    <a href="user/change_avatar" class="btn btn-danger btn-block">
                                        <i class="fa fa-edit fa-lg"></i>
                                        Change Picture
                                    </a>
                                    <a href="{{route('users.edit',Auth::user()->id)}}" class="btn btn-danger
                                        btn-block">
                                        <i class="fa fa-edit fa-lg"></i>
                                        Edit Profile
                                    </a>

                                </div>

                                <div class="text-left ">
                                    <span class="font-weight-bold text-danger">Name:</span>
                                    <h3>{{Auth::user()->name}}</h3>
                                    <span class="font-weight-bold text-danger">Nick:</span>
                                    <h3>@if (Auth::user()->nickname != null)
                                            {{Auth::user()->nickname}}
                                        @else
                                            <small class="text-muted">Not yet Updated</small>
                                        @endif
                                    </h3>
                                    <!! --------- !!>
                                    <span class="font-weight-bold text-danger">Date of Birth:</span>
                                    <h3>
                                        @if (Auth::user()->user_dob != null)
                                            <h3>{{Auth::user()->user_dob}}</h3>
                                        @else
                                            <small class="text-muted">Not yet Updated</small>
                                        @endif
                                    </h3>

                                    <!! --------- !!>
                                    <span class="font-weight-bold text-danger">Club:</span>
                                    <h3>
                                        @if (Auth::user()->member_club != null)
                                            <h3>{{$detail->club_name}} <br/> <small><i>Zone {{$detail->zone_title}},
                                                        {{$detail->state_name}} State</i></small></h3>
                                        @else
                                            <<small class="text-muted">Not yet Updated</small>
                                        @endif
                                    </h3>
                                    <!! --------- !!>
                                    <span class="font-weight-bold text-danger">Phone:</span>
                                    <h3>
                                        @if (Auth::user()->phone != null)
                                            {{Auth::user()->phone}}
                                        @else
                                            <small class="text-muted">Not yet Updated</small>
                                        @endif
                                    </h3>
                                    <!! --------- !!>
                                    <!! --------- !!>

                                    <span class="font-weight-bold text-danger">Office Held:</span>
                                    <h3>
                                        @foreach($isOfficer as $office)
                                            @if($office != '')
                                                <small> {{$office->office_title}}</small> <br/>
                                            @else
                                            @endif
                                        @endforeach
                                    </h3>
                                    <span class="font-weight-bold text-danger">About me:</span>
                                    <h3>
                                        @if (Auth::user()->bio != null)
                                            {!! Auth::user()->bio !!}
                                        @else
                                            <small class="text-muted">Not yet Updated</small>
                                        @endif
                                    </h3>
                                </div>

                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>


@endsection
@section('bmm')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector: 'textarea'});</script>
@endsection

