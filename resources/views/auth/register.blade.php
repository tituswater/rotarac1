@extends('layouts.app')

@section('content')
<div class="limiter ">
    <div class="container-login100" >
        <div class="wrap-login100  bg-light border-2 border-success p-l-110 p-r-110 p-t-62 p-b-33">
            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form  flex-sb flex-w">
                <span class="login100-form-title p-b-53">
                    {{ __('Register with') }}
                </span>

                <a href="/login/facebook" class="btn-face m-b-20">
                    <i class="fa fa-facebook-official"></i>
                    Facebook
                </a>

                <a href="#" class="btn-google m-b-20">
                    {{-- <i class="fa fa-google"></i> --}}
                    <img src="{{ asset('setl/images/icons/icon-google.png') }}" alt="GOOGLE">
                    Google
                </a>

                    @csrf
                <div class="p-t-31 p-b-9">

{{-- name --}}
                    <span class="txt1">
                        {{ __('Name') }}
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "email is required">
                    <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="focus-input100"></span>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

{{-- name
     --}}
     <div class="p-t-31 p-b-9">


        <span class="txt1">
            {{ __('E-Mail Address') }}
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "email is required">

        <input id="email" type="email" class="input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
       <span class="focus-input100"></span>
    </div>
                <div class="p-t-13 p-b-9">
                    <span class="txt1">
                        {{ __('Password') }}
                    </span>

                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">

                   <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="p-t-13 p-b-9">
                    <span class="txt1">
                        {{ __('Confirm Password') }}
                    </span>

                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <span class="focus-input100"></span>
                </div>


                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn" type="submit">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="w-full text-center p-t-55">
                    <span class="txt2">
                        already a member?
                    </span>
                    <a class="txt2 bo1" href="{{ route('login') }}">{{ __('Login') }}</a>

                </div>
            </form>
        </div>
    </div>
</div>

{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
