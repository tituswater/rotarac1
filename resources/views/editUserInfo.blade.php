@extends('layout.app')
@include('pages.header')
@include('meta::manager', [
            'title'         => 'About - Rotaract District 9125 Nigeria.',
            'description'   => 'About Rotarct District 9125,nigeria',
            'image'         => '{{ asset("extra-images\aboutus-img.png") }}',
        ])
@section('css')
    <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    {{--    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}

    <style>
        .ck-editor__editable {
            min-height: 300px;
        }
    </style>


@endsection
@section('banner')
    <!-- Banner -->
    <div class="charity-subheader">
        <span class="black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h1>Edit Profile</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
@endsection

@section('content')
    <div class="charity-main-content">
        <div class="container pt-2 pb-5">
            <div class="row justify-content-center">
                <div class="col-md-10 left bio">
                    <div class="pt-3">
                        <div class="">

                            {{--                            <h5 class="card-title">Add Club</h5>--}}
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
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                            <form class="needs-validation card-text" action="/user/update/profile"
                                  method="POST"
                                  novalidate>
                                {{ csrf_field() }}

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name</label>
                                        <input type="text" name="name" class="form-control rounded-0 " disabled
                                               id="validationCustom01" value="{{$user->name}}" required>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Email</label>
                                        {{$user->email}}
                                        <input type="hidden" name="email" class="form-control rounded-0 "
                                               id="validationCustom01" value="{{$user->email}}">

                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="validationCustom01">Gender</label>
                                        <select class="custom-select" name="gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="invalid-feedback">Please Select Club type</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom01">Nickname</label>
                                        <input type="text" name="nickname" class="form-control rounded-0 "
                                               placeholder="E.g. Water"
                                               id="validationCustom01" value="{{$user->nickname}}" required>
                                    </div>
                                    <div class="col-md-3 mb-3">

                                        <label for="validationCustom01">Phone</label>
                                        <input id="phone" required name="phone" type="tel" value="{{$user->phone}}"
                                               class="form-control
                                        rounded-0 ">

                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom01">Date of Birth</label>
                                        <input name="user_dob"
                                               class="form-control rounded-0 " data-date-format="yyyy-mm-dd"
                                               data-provide="datepicker" value="{{$user->user_dob}}"
                                               id="validationCustom01" placeholder="yyyy-mm-dd" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="validationServerUsername">Facebook Profile link</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend3">
                                                    <i class="fa fa-facebook"></i>
                                                </span>
                                            </div>
                                            <input type="url" name="facebook_profile"
                                                   class="form-control is-invalid rounded-0"
                                                   id="validationServerUsername" placeholder="Facebook Profile link"
                                                   aria-describedby="inputGroupPrepend3">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServerUsername">Instagram Profile link</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend3">
                                                    <i class="fa fa-instagram"></i>
                                                </span>
                                            </div>
                                            <input type="url" name="instagram_profile"
                                                   class="form-control is-invalid rounded-0"
                                                   id="validationServerUsername" placeholder="Instagram Profile link"
                                                   aria-describedby="inputGroupPrepend3">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="validationServerUsername">Twitter Profile link</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend3">
                                                    <i class="fa fa-twitter"></i>
                                                </span>
                                            </div>
                                            <input type="url" name="twitter_profile" class="form-control is-invalid
                                            rounded-0"
                                                   id="validationServerUsername" placeholder="Instagram Profile link"
                                                   aria-describedby="inputGroupPrepend3">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServerUsername">Linkedin Profile link</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend3">
                                                    <i class="fa fa-linkedin"></i>
                                                </span>
                                            </div>
                                            <input type="url" name="linkedin_profile" class="form-control is-invalid
                                            rounded-0"
                                                   id="validationServerUsername" placeholder="Instagram Profile link"
                                                   aria-describedby="inputGroupPrepend3">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServerUsername">My Citation</label>
                                        <textarea id="editor" name="bio">
                                            <h1>{!! $user->bio !!}</h1>
                                        </textarea>
                                    </div>

                                </div>
                                <button class="btn btn-primary rounded-0" type="submit">Update</button>
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
        // import PasteFromOffice from '@ckeditor/ckeditor5-paste-from-office/src/pastefromoffice';
        // import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
        // import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
        // import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
        // import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
        // import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
        $(document).ready(function () {


            // tinymce.init({selector: 'textarea'});
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                // allowDropdown: false,
                // autoHideDialCode: false,
                // autoPlaceholder: "off",
                // dropdownContainer: document.body,
                excludeCountries: ["us"],
                // formatOnDisplay: false,
                // geoIpLookup: function(callback) {
                //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                //     var countryCode = (resp && resp.country) ? resp.country : "";
                //     callback(countryCode);
                //   });
                // },
                // hiddenInput: "full_number",
                // initialCountry: "auto",
                // localizedCountries: { 'de': 'Deutschland' },
                // nationalMode: false,
                // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                // placeholderNumberType: "MOBILE",
                // preferredCountries: ['cn', 'jp'],
                // separateDialCode: true,
                utilsScript: "{{asset('js/utils.js')}}",
            });

            $('.datepicker').datepicker({
                autoclose: true,
                showInputs: false,
                template: 'modal',
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
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    // plugins: [ Essentials, Paragraph, Bold, Italic,PasteFromOffice ]
                    // toolbar: [ 'bold', 'italic' ]
                })
                .then(editor => {
                    console.log('Editor was initialized', editor);
                })
                .catch(error => {
                    console.error(error.stack);
                });
            editor.editing.view.change(writer => {
                writer.setAttribute('spellcheck', 'true', editor.editing.view
                    .document.getRoot());
            });


        });

    </script>

    <script src="{{asset('js/intlTelInput.js')}}"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

    {{--    --}}
@endsection

