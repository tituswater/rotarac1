@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage Officers</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
@endsection
@section('css')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection
@section('content')

    <div class="container mb-5">
        <div class="row pt-2 justify-content-center ">
            <div class="col-md-8">
                <div class="col-md-12 mb-2 ">
                    <ul class="nav nav-tabs ">
                        <p class="nav-item">
                            <a class="nav-link  " href="{{ route('officers.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link active bg-danger text-white"
                               href="{{ route('officers.create') }}">Create</a>
                        </p>
                    </ul>
                </div>

                <div class="col-md-12 ">
                    <div class="card rounded-0 ">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>

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
                            <h5 class="card-title">Add District Officer</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                            <form class="needs-validation card-text" action="{{ route('officers.store') }}"
                                  method="POST" novalidate>
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Email of Officer</label>
                                        <input type="email" name="member_email" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="Email of Officer" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Office</label>
                                        <select class="form-control" name="office_held" id="validationCustom01"
                                                required>
                                            <option></option>
                                            @foreach ($offices as $office)
                                                <option
                                                    value="{{ $office->office_id }}"> {{ $office->office_title }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Date of Assumption of Office</label>
                                        <input name="from" class="form-control rounded-0 " id="validationCustom01"
                                               data-date-format="yyyy-mm-dd" data-provide="datepicker"
                                               placeholder="yyyy-mm-dd" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Date of Completion</label>
                                        <input name="to" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="yyyy-mm-dd"
                                               data-date-format="yyyy-mm-dd" data-provide="datepicker" required>
                                    </div>

                                </div>
                                <button class="btn btn-primary rounded-0" type="submit">Add Officer</button>
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
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    ...
                </div>

            </div>


        </div>
    </div>


    </div>
    </div>


    </div>
    </div>


@endsection
@section('bmm')

    <script>
        $(document).ready(function () {

            $('.datepicker').datepicker({
                format: {
                    /*
                     * Say our UI should display a week ahead,
                     * but textbox should store the actual date.
                     * This is useful if we need UI to select local dates,
                     * but store in UTC
                     */
                    toDisplay: function (date, format, language) {
                        var d = new Date(date);
                        d.setDate(d.getDate() - 7);
                        return d.toISOString();
                    },
                    toValue: function (date, format, language) {
                        var d = new Date(date);
                        d.setDate(d.getDate() + 7);
                        return new Date(d);
                    }
                }
            });
        });
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
@endsection

