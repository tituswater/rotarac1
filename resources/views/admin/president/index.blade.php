@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Club Presidents in the District</p>
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
                            <a class="nav-link active bg-danger text-white "
                               href="{{ route('presidents.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link " href="{{ route('presidents.create') }}">Create</a>
                        </p>
                    </ul>
                </div>


                <div class="col-md-12">
                    <div class="card rounded-0 ">
                        <div class="card-body">
{{--                            <h5 class="card-title">Club Presidents in the District </h5>--}}
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}


                            <div class="row">
                                <div class="col-md-12">

                                    <table class="table table-striped ">
                                        <thead class="bg-danger  text-white text-left">
                                        <tr>
                                            <th class="text-left" scope="col">President</th>
                                            <th class="text-left" scope="col">Club</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($presidentsTotal >0)
                                            @foreach($presidents as $president)
                                                <tr >
                                                    <th class="text-left" scope="row">{{$president->name}}</th>
                                                    <td class="text-left">{{$president->club_name}}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <td  class="text-danger"  colspan="2">No President Added Yet</td>
                                        @endif
                                        </tbody>
                                    </table>
                                    @foreach($presidents as $president)



                                    @endforeach


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


