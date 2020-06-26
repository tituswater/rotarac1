@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage Club</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

@endsection
@section('content')
    <div class="container  mb-5">
        <div class="row pt-2 justify-content-center">
            <div class="col-md-8">
                <div class="col-md-12 mb-2 ">
                    <ul class="nav nav-tabs ">
                        <p class="nav-item">
                            <a class="nav-link active " href="{{ route('clubs.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link " href="{{ route('clubs.create') }}">Create</a>
                        </p>
                    </ul>
                </div>


                <div class="col-md-12">
                    <div class="card rounded-0 ">
                        <div class="card-body">
                            <h5 class="card-title">Clubs in District 9125</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="list-group ">

                                        @foreach($clubs as $club)
                                            <a href="{{ route('clubs.show', $club->club_name) }}" class=" mb-2 list-group-item list-group-item-action flex-column align-items-start
            rounded-0 bg-light       border-0">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">Rotaract Club
                                                        of @if($club->club_acronym == "")
                                                            {{ $club->club_name }}
                                                        @else
                                                            {{$club->club_acronym }}
                                                        @endif
                                                        <small class="text-danger p-2">from Zone {{ $club->zone_title }}
                                                            , {{
                                            $club->state_name
                                            }}</small>
                                                    </h5>
                                                </div>
                                                <p class="font-weight-bold small">President: {{$club->name}} | Phone
                                                    Number
                                                    : {{ $club->phone == null ?  '-':
                        $club->phone }}</p>

                                            </a>


                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            {!! $clubs->links() !!}

                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>

@endsection


