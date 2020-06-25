@extends('admin.layout.admin')
@section('content')

            <div class="col-md-4 ">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb mt-2 rounded-0">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">ZOne</a></li>

                    </ol>
                  </nav>
            </div>
            <div class="col-md-8">
                <ul class="nav nav-tabs mt-2">
                    <li class="nav-item">
                      <a class="nav-link active " href="{{ route('zones.index') }}">List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{ route('zones.create') }}">Create</a>
                    </li>
                  </ul>
            </div>



            <div class="col-md-8">
                    <div class="card rounded-0 ">
                        <div class="card-body">
                          <h5 class="card-title">Zones in District 9125</h5>
                          {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}

<br>
 <div class="row">
      <div class="col-md-12">
        <div class="list-group ">
           @foreach($zones as $zone)
            <a href="#" class=" mb-2 list-group-item list-group-item-action flex-column align-items-start rounded-0 border-bottom-0 border-top-0">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Zone {{ $zone->zone_title }}</h5>
                  <small>{{ $zone->created_at }}</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Totatal State:</small>
              </a>

            @endforeach
        </div>

     </div>
 </div>
 {!! $zones->links() !!}

                        </div>
                      </div>




            </div>


@endsection


