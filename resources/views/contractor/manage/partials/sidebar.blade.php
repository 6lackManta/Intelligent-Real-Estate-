<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{route('contractor.index')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('contractor.profile')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                     <li>
                        <a href="{{ route('admin.land.create') }}" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Add data</a>
                    </li>
                    <li>
                        <a href="{{route('admin.land.shows')}}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>View Data</a>
                    </li>
                   
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>View Data</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                    </li>
                </ul>
                <div class="center p-20">
                     <form method="POST" action="{{ route('logout') }}">
  @csrf
  <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Logout</button>
</form>
                    
                 </div>
            </div>
            
        </div>