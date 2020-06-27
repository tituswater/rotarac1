@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage Offices</p>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <div class="container  mb-5">
        <div class="row pt-2 justify-content-center">
            <div class="col-md-8">
                <div class="col-md-12 mb-2 ">
                    <ul class="nav nav-tabs ">
                        <p class="nav-item">
                            <a class="nav-link " href="{{ route('officers.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link active bg-danger text-white"
                               href="{{ route('officers.create') }}">Create</a>
                        </p>
                    </ul>
                </div>


                <div class="col-md-12">
                    <div class="card rounded-0 ">
                        <div class="card-body">
                            <h5 class="card-title">Create Office</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                            <form class="needs-validation card-text" action="{{ route('offices.store') }}" method="POST"
                                  novalidate>
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom01">Office title</label>
                                        <input type="text" name="office_title" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="Office Title" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom01">Office ACRONYM</label>
                                        <input type="text" name="office_acronym" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="Office Acronym" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary rounded-0" type="submit">Create Office</button>
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


        </div>
    </div>

@endsection

