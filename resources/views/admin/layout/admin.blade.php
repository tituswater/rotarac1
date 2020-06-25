<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}
    <!-- Bootstrap CSS -->
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <title>@yield('title')</title>
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
      <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick-slider.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
      <link href="{{ asset('css/jplayer.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/color.css') }}">

      <style>

      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <div class="container">
            <a class="navbar-brand" href="#">Admin RAC D9125 Nigeria.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-item nav-link text-white active" href="{{ route('zones.index') }}">Zone(s) <span class="sr-only">
                    (current)</span></a>
            <a class="nav-item nav-link text-white" href="#">Clubs</a>
            <a class="nav-item nav-link text-white" href="#">Officers</a>
            <a class="nav-item nav-link text-white" href="#">Carousel</a>
            <a class="nav-item nav-link text-white" href="#">Events</a>

            <a class="nav-item nav-link text-white" href="#">Gallery</a>
            <a class="nav-item nav-link text-white disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </div>
        </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
            @yield('content')
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  </body>
</html>
