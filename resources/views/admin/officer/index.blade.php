@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage officer</p>
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
                               href="{{ route('officers.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link " href="{{ route('officers.create') }}">Create</a>
                        </p>
                    </ul>
                </div>


                <div class="col-md-12">
                    <div class="card rounded-0 ">
                        <div class="card-body">
                            <h5 class="card-title">officers in District 9125</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="list-group ">
                                        <table class="table table-striped ">

                                            <tbody>
                                            @if($officers->count() >0)
                                                @foreach($officers as $officer)
                                                    <tr >
                                                        <th class="text-left" scope="row">{{$officer->name}}</th>
                                                        <td class="text-left">{{$officer->office_title}}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <td  class="text-danger"  colspan="2">No President Added Yet</td>
                                            @endif
                                            </tbody>
                                        </table>




                                    </div>

                                </div>
                            </div>
                            {!! $officers->links() !!}

                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>

@endsection


