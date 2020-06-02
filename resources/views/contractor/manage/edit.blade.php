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
              <div class="col-md-6 col-xs-10">
                        <div class="white-box">
                            <form class="form-horizontal form-material" enctype="multipart/form-data" method="post" action="{{route('admin.land.update',$land->id)}}">
                            @method('patch')
                                @csrf
                                   <div class="form-group">
                                    <label class="col-sm-12">Property Type</label>
                                    <div class="col-sm-12">
                                        <select name="type" required autofocus class="form-control form-control-line" value="{{$land->type}}">
                                            <option value="home">Homes</option>
                                            <option value="plots">Plots</option>
                                            <option value="commercial">Commercial</option>
                                                  </select>
                                    </div>
                                </div>
                                                                  <div class="form-group">
                <label for="country">Select Country:</label>
                <select name="country" class="form-control form-control-line">
                    <option value="">--- Select Country ---</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="state">Select State:</label>
                <select name="state"  class="form-control form-control-line">
                <option>--State--</option>
                </select>
            </div>

            <div class="form-group">
                <label for="city">Select City:</label>
                <select required autofocus name="city" class="form-control form-control-line">
                <option>--City--</option>
                </select>
            </div>


                                 <div class="form-group">
                                    <label for="example-email" class="col-md-12">Property Title</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="title"
                                            id="title" required autofocus value="{{$land->title}}"> </div>
                                </div>
                              
                                <div class="form-group">
                                    <label class="col-md-12">Property Description</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" name="desc" id="desc" autofocus required 
                                        value="{{ $land->desc }}" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Land Price (PKR)</label>
                                    <div class="col-md-12">
                                        <input type="text"
                                            class="form-control form-control-line" name="price" id="price" value="{{$land->price}}" required autofocus > </div>
                                </div<div class="form-group">
                                    <label class="col-md-12">Land Area</label>
                                    <div class="col-md-12">
                                        <input type="text"
                                            name="area" id="area" value="{{$land->area}}"required autofocus class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Select Unit</label>
                                    <div class="col-sm-12">
                                        <select name="unit" id="unit" value="{{$land->unit}}" required autofocus class="form-control form-control-line">
                                            <option value="squarefeet">Square feet</option>
                                            <option value="squareyards">Square Yards</option>
                                            <option value="squaremeter">Square meter</option>
                                            <option value="marla">Marla</option>
                                            <option value="kanal">Kanal</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                     <div class="col-md-6">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button class="btn btn-success">Upload</button>
                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
               
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
@endsection