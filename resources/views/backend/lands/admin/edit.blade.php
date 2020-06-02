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
             
                            <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="{{ url('backend/plugins/images/large/img1.jpg') }}">
                                <div class="overlay-box">
                                    <div class="user-content">
    <a href="javascript:void(0)"><img src= "{{ url('backend/plugins/images/users/genu.jpg') }}" 
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@myadmin.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>Awais</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">

                        <div class="white-box">
<form class="form-horizontal form-material" enctype="multipart/form-data" method="POST" action="{{route('admin.profile.store')}}">
                                @csrf
                                  <div class="form-group">
                                    <label class="col-md-12">ID</label>
                                    <div class="col-md-12">
   <input type="text"name="id_admin" class="form-control form-control-line" readonly value="{{Auth::guard('admin')->user()->id}}" > </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Name</label>
                                    <div class="col-md-12">
                                        <input autofocus type="text" 
                                           name="name" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12"> Address</label>
                                    <div class="col-md-12">
                                        <input autofocus type="text"  
                                            class="form-control form-control-line" name="adress" name="example-email"
                                            id="example-email"> </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input autofocus type="text" name="phone" 
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">About You</label>
                                    <div class="col-md-12">
                                        <textarea rows="5"  name="about" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                   <div class="form-group">
                                     <div class="col-md-6">
                    <input autofocus type="file"  name="image" id="image" class="form-control">
                </div>
   
                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div> 
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
    <script type="text/javascript">
        
        document.getElementById("ids").defaultValue = "Goofy";
    </script>
    <!-- ============================================================== -->
@endsection