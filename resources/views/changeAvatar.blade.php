@extends('layout.app')
@section('page_title')
    Club
@endsection
@include('pages.header')

@section('banner')
    <!-- Banner -->
    <div class="charity-subheader bg-light">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-6  m-auto justify-content-center">
                    <h1 class="mt-5">Update your profile</h1>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <img src="/images/members/{{ Session::get('file') }}">
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/save_avatar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <input type="file" name="file" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->



@endsection

@section('content')
    <!-- Content -->

@endsection
@section('bmm')

@endsection
