@extends("frontend.app")
@section('title') {{ "Home" }} @endsection
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Signup Land Portal</li>
       </ol>
   <div class="registration">
       <div class="registration_left">
           <h2>Land Portal Signup</h2>
          
           <div class="registration_form">
           <!-- Form -->
           <form  action="{{ route('admin.posts') }}" method="POST">
                              @csrf
                <div>
                      <label>{{ __('Name') }}
                          <input placeholder="first name:" id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      </label>
                  </div>
                  <div>
                      <label>
                          <input placeholder="last name:" type="text" tabindex="2" required autofocus>
                      </label>
                  </div>
                  <div>
                      <label>
                          <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                      </label>
                  </div>
                  <div>
                      <label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="password">
                      </label>
                  </div>
                  <div>
                      <label>
                           <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                      </label>
                  </div>
                  <div>
                      <input type="submit" value="create account" id="register-submit">
                  </div>
                  <div class="sky-form">
                      <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to mobilya.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
                  </div>
              </form>
              <!-- /Form -->
           </div>
       </div>
       <div class="registration_left">
           <h2>existing user</h2>
           <div class="registration_form">
           <!-- Form -->
              <form id="registration_form" action="contact.php" method="post">
                  <div>
                      <label>
                          <input placeholder="email:" type="email" tabindex="3" required>
                      </label>
                  </div>
                  <div>
                      <label>
                          <input placeholder="password" type="password" tabindex="4" required>
                      </label>
                  </div>
                  <div>
                      <input type="submit" value="sign in" id="register-submist">
            
                  </div>
                  <div class="forget">
                      <a href="#">forgot your password</a>
                  </div>
              </form>
           <!-- /Form -->
           </div>
       </div>
       <div class="clearfix"></div>
   </div>
</div>
@endsection
