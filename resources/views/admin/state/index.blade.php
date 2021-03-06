@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage state</p>
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
                            <a class="nav-link active bg-danger text-white " href="{{ route('states.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link " href="{{ route('states.create') }}">Create</a>
                        </p>
                    </ul>
                </div>


                <div class="col-md-12">
                    <div class="card rounded-0 ">
                        <div class="card-body">
                            <h5 class="card-title">states in District 9125</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="list-group ">

                                        @foreach($states as $state)
                                            <a href="{{ route('states.show', $state->state_name) }}" class=" mb-2 list-group-item list-group-item-action flex-column align-items-start
            rounded-0 bg-light       border-0">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">
                                                        @if($state->state_name != 'FCT')
                                                            {{ $state->state_name }} State of Zone {{
                                                            $state->zone_title }}
                                                        @else
                                                            {{ $state->state_name }}  of Zone {{
                                                            $state->zone_title }}
                                                        @endif
                                                    </h5>
                                                </div>


                                            </a>


                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            {{--                            {!! $states->links() !!}--}}

                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>

@endsection


