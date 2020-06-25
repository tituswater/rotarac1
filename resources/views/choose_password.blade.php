@extends('layout.app2')
@section('page_title')
    Club
@endsection
@include('pages.header')

@section('banner')
    <!-- Banner -->
    <div class="charity-subheader bg-light">
{{--        <span class="black-transparent"></span>--}}
        <div class="container">
            <div class="row">
                <div class="col-md-6  m-auto justify-content-center">
                    <h1 class="mt-5 text-primary">Choose a password</h1>
                    <form class="needs-validation" action="change_password"
                          method="POST" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-9 mb-2">
                                <input type="hidden" name="email" value="{{Auth::user()->email}}">
                                <input id="validationCustom01"  type="password" class="form-control form-control-lg rounded-0
" name="password" placeholder="Enter Passoword" required
                                       autocomplete="new-password">


                            </div>

                            {{--                            <div class="col-md-6 mb-2">--}}
                            {{--                                <select class="form-control form-control-lg" name="gender" required>--}}
                            {{--                                    <option value="">Select Gender</option>--}}
                            {{--                                    <option value="male">Male</option>--}}
                            {{--                                    <option value="female">Female</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6 mb-3">--}}
                            {{--                                <input data-provide="datepicker" name="user_dob" class="form-control--}}
                            {{--                                    form-control-lg rounded-0 "--}}
                            {{--                                       id="validationCustom01" placeholder="Date of Birth mm/dd/yyyy" required>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6 mb-3">--}}
                            {{--                                <input type="file" name="club_name" class="form-control form-control-lg  "--}}
                            {{--                                       id="validationCustom01" placeholder="club name" required>--}}
                            {{--                            </div>--}}

                            <div class="col-md-3">
                                <button class="btn btn-lg btn-block btn-danger " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

@endsection

@section('content')
    <!-- Content -->

@endsection
