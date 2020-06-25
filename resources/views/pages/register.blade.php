@extends('layout.app2')
@include('pages.header')
@section('')
<!-- Banner -->
<div class="charity-subheader">
    <span class="black-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Membership Registration</h1>
            </div>
        </div>
    </div>
</div>
<!-- Banner -->

@endsection

@section('content')
<!-- Content -->

<div class="charity-main-content mt-0 ">
    <div class="charity-main-section charity-aboutus-text-full mt-0">
        <div class="container center-container">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="card  rounded-0">
                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('members.store') }}" method="POST" novalidate>
                                {{ csrf_field() }}
                                <div class="form-row">
                                  <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Full name</label>
                                    <input type="text" name="member_name" class="form-control" id="validationCustom01"  required>

                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Email Address</label>
                                    <input type="email" name="member_email" class="form-control" id="validationCustom02" required>

                                  </div>
                                </div>
                                <div class="form-row">

                                  <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Phone Number</label>
                                    <input type="tel" name="member_phone" class="form-control" id="validationCustom03" required>

                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">State</label>
                                    <select class="custom-select" name="member_club" id="validationCustom04" required>
                                      <option selected disabled value="">Choose...</option>
                                     @foreach ($clubs as $club )
                                     <option   value="{{ $club->club_id }}"> RAC {{ $club->club_name }}</option>
                                     @endforeach
                                    </select>

                                  </div>

                                </div>
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                      Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                      You must agree before submitting.
                                    </div>
                                  </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
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
</div>
<!-- Content -->
@endsection
