@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage Clubs</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
@endsection
@section('css')

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet"
          href="{{asset('/css/bootstrap-timepicker.min.css')}}">
@endsection
@section('content')

    <div class="container mb-5">
        <div class="row pt-2 justify-content-center ">
            <div class="col-md-8">
                <div class="col-md-12 mb-2 ">
                    <ul class="nav nav-tabs ">
                        <p class="nav-item">
                            <a class="nav-link  " href="{{ route('clubs.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link active bg-danger text-white"
                               href="{{ route('clubs.create') }}">Create</a>
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
                            <h5 class="card-title">Add Club</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                            <form class="needs-validation card-text" action="{{ route('clubs.store') }}" method="POST"
                                  novalidate>
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom01">Rotaract Club of</label>
                                        <input type="text" name="club_name" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="club name" required>
                                        <div class="invalid-feedback">Input a Club name</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Chattered Date</label>
                                        <input name="chartered"
                                               class="form-control rounded-0 " data-date-format="yyyy-mm-dd"
                                               data-provide="datepicker"
                                               id="validationCustom01" placeholder="yyyy-mm-dd" required>
                                        <div class="invalid-feedback">Seect Date</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="validationCustom01">State</label>
                                        <select class="custom-select" name="state_id" required>
                                            <option value="">Select state</option>
                                            @foreach ($states as $state )
                                                <option value="{{ $state->state_id }}"> {{ $state->state_name }} State
                                                </option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback">Seect state</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Sponsoring Rotary Club</label>
                                        <input type="text" name="sponsor" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="Sponsor" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Club Acronym</label>
                                        <input type="text" name="club_acronym" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="E.G. EKSU" required>
                                        <div class="invalid-feedback">Input Club ACRONYM Eg. EKSU</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Meeting Day</label>
                                        <select name="meeting_day" class="custom-select rounded-0 "
                                                id="validationCustom01" required>
                                            <option value="">Select Day</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Meeting Time</label>
                                        <div class="input-group bootstrap-timepicker timepicker">
                                            <input id="timepicker1" type="text" name="meeting_time"
                                                   class="form-control rounded-0 " required>
                                            <span class="input-group-addon"><span class="material-icons">
access_time
</span></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Meeting Venue</label>
                                        <input type="text" name="meeting_venue" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="E.g. Pathfinders Hotel,
                                               Ado-EKiti" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="validationCustom01">Type of Club</label>
                                        <select class="custom-select" name="type" required>
                                            <option value="">Select Club type</option>
                                            <option value="Community Base">Community Base</option>
                                            <option value="Instituitional Base">Instituitional Base</option>
                                        </select>
                                        <div class="invalid-feedback">Please Select Club type</div>
                                    </div>


                                </div>
                                <button class="btn btn-primary rounded-0" type="submit">Add State</button>
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
@section('bmm')

    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                autoclose: true,
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
            $('#timepicker1').timepicker();
        });
    </script>
    <script
        src="{{asset('script/bootstrap-timepicker.min.js')}}"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
@endsection
