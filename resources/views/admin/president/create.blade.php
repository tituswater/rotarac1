
@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage Presidents</p>
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
                            <a class="nav-link " href="{{ route('presidents.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link active " href="{{ route('presidents.create') }}">Create</a>
                        </p>
                    </ul>
                </div>


                <div class="col-md-12">
                    <div class="card rounded-0 ">
                        <div class="card-body">
                            <h5 class="card-title">Update Club Presidents District 9125</h5>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>

                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ol>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            @endif
                            <form class="needs-validation card-text" action="{{ route('presidents.store') }}" method="POST"
                                  novalidate>
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="control-label" for="validationCustom01">President's Email</label>
                                        <input type="email" name="presidents_mail" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="president@email.com "  required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="control-label" for="validationCustom01">Club</label>
                                        <select class="custom-select" name="president_club" required>
                                            <option value="">Select Club</option>
                                            @foreach ($clubs as $club )
                                                <option value="{{ $club->club_id }}">RAC {{ $club->club_name
                                                }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="control-label" for="validationCustom01">Tenure Start</label>
                                        <input type="date" name="tenure_start" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder=" "  required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="control-label" for="validationCustom01">Tenure End</label>
                                        <input type="date" name="tenure_end" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder=" "  required>
                                    </div>
                                </div>
                                <button class="btn btn-primary rounded-0" type="submit">Add President</button>
                            </form>

                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function() {
                                    'use strict';
                                    window.addEventListener('load', function() {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName('needs-validation');
                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                            form.addEventListener('submit', function(event) {
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



        </div>
    </div>

@endsection

