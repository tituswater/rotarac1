@extends('layout.app')
@include('pages.header')
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader ">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="h5">Manage ADDRs</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
@endsection
@section('content')

    <div class="container mb-5">
        <div class="row pt-2 justify-content-center ">
            <div class="col-md-8">
                <div class="col-md-12 mb-2 ">
                    <ul class="nav nav-tabs ">
                        <p class="nav-item">
                            <a class="nav-link  " href="{{ route('adrrs.index') }}">List</a>
                        </p>
                        <p class="nav-item">
                            <a class="nav-link active" href="{{ route('adrrs.create') }}">Create</a>
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
                            <h5 class="card-title">Add ADRR</h5>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                            <form class="needs-validation card-text" action="{{ route('adrrs.store') }}" method="POST"
                                  novalidate>
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">ADRR Email</label>
                                        <input type="email" name="adrr_email" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="ADRR email" required>

                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="validationCustom01">Zone</label>
                                        <select class="custom-select" name="adrr_zone" required>
                                            <option value="">Select Zone</option>
                                            @foreach ($zones as $zone )
                                                <option value="{{ $zone->zone_id }}"> Zone {{ $zone->zone_title }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback">Seect state</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Tenure Start</label>
                                        <input type="text" name="adrr_tenure_start" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="E.G. 14:30" required>
                                    </div><div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Tenure End</label>
                                        <input type="text" name="adrr_tenure_end" class="form-control rounded-0 "
                                               id="validationCustom01" placeholder="E.g. Pathfinders Hotel,
                                               Ado-EKiti" required>
                                    </div>


                                </div>
                                <button class="btn btn-primary rounded-0" type="submit">Add ADRR</button>
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
@endsection
