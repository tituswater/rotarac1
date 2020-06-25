@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('setl/css/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('setl/css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('setl/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('setl/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('setl/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('setl/vendor/select2/select2.min.css') }}">
    <script src="{{ asset('setl/js/main.js/') }}"></script>
@endsection
@section('content')


                    <div class="limiter ">
                        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                            <div class="wrap-login100  bg-light border-2 border-success p-l-110 p-r-110 p-t-62 p-b-33">
                                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form  flex-sb flex-w">
                                    <span class="login100-form-title p-b-53">
                                        Sign In With
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

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate = "Password is required">

                                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="focus-input100"></span>
                                    </div>



                                    <div class="container-login100-form-btn m-t-17">
                                        <button class="login100-form-btn" type="submit">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    <div class="w-full text-center p-t-55">
                                        <span class="txt2">
                                            Not a member?
                                        </span>
                                        <a class="txt2 bo1" href="{{ route('register') }}">{{ __('Register') }}</a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> --}}


                    <div id="dropDownSelect1"></div>

@endsection
