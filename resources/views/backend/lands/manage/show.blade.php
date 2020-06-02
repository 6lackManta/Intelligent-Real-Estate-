@extends('backend.lands.manage.app')

@section('content')    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="wrapper">
  
        @include('backend.lands.manage.partials.topbar')

        @include('backend.lands.manage.partials.sidebar')
      
        <div id="page-wrapper">
            <div class="container-fluid">
              @include('backend.lands.manage.partials.topbar2')
              @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                 @endif
             <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">LAND DATA</h3>
                            <p class="text-muted">All </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Area</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 @foreach ($lands as $land)
                                        <tr>
                                            <td>{{$land->id}}</td>
                                            <td>{{$land->title}}</td>
                                            <td>{{$land->type}}</td>
                                            <td>{{$land->country}}</td>
                                            <td>{{$land->state}}</td>
                                            <td>{{$land->city}}</td>
                                            <td>{{$land->price}}</td>
                                            <td>{{$land->area}}</td>
                  <td>  <a href="{{ route('admin.land.edit',$land->id)}}" class="btn btn-primary">Edit</a></td> 
      <td>  <form action="{{ route('admin.land.destroy', $land->id)}}" method="post">
                  @csrf
                  @method('DELETE')
      <button class="btn btn-danger" type="submit">Delete</button>
                </form></td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div
               
            </div>
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
       
    </div>

@endsection