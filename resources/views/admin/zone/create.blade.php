@extends('admin.layout.admin')
@section('content')
<div class="container">
    <div class="row">

<div class="col-md-4 ">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb mt-2 rounded-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">ZOne</a></li>
          <li class="breadcrumb-item active" aria-current="page">Manage Zone</li>
        </ol>
      </nav>
</div>
<div class="col-md-8">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
          <a class="nav-link " href="{{ route('zones.index') }}">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('zones.create') }}">Create</a>
        </li>
      </ul>
</div>




            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="card rounded-0">
                        <div class="card-body">
                          <h5 class="card-title">Create Zone</h5>
                          {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                          <form class="needs-validation card-text" action="{{ route('zones.store') }}" method="POST" novalidate>
                            {{ csrf_field() }}
                            <div class="form-row">
                              <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Name of Zone</label>
                                <input type="text" name="zone_title" class="form-control rounded-0 " id="validationCustom01" placeholder="First name"  required>
                              </div>
                            </div>
                            <button class="btn btn-primary rounded-0" type="submit">Create Zone</button>
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
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>

                  </div>

            </div>
    </div>
</div>


@endsection
