@extends("frontend.app")
@section('title') {{ "Home" }} @endsection
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Account</li>
       </ol>
   <div class="registration">
       <div class="registration_left">
           <h2>new user? <span> create an account </span></h2>
           <!-- [if IE]
              < link rel='stylesheet' type='text/css' href='ie.css'/>
           [endif] -->

           <!-- [if lt IE 7]>
              < link rel='stylesheet' type='text/css' href='ie6.css'/>
           <! [endif] -->
         <!--   <script>
              (function() {

              // Create input element for testing
              var inputs = document.createElement('input');

              // Create the supports object
              var supports = {};

              supports.autofocus   = 'autofocus' in inputs;
              supports.required    = 'required' in inputs;
              supports.placeholder = 'placeholder' in inputs;

              // Fallback for autofocus attribute
              if(!supports.autofocus) {

              }

              // Fallback for required attribute
              if(!supports.required) {

              }

              // Fallback for placeholder attribute
              if(!supports.placeholder) {

              }

              // Change text inside send button on submit
              var send = document.getElementById('register-submit');
              if(send) {
                  send.onclick = function () {
                      this.innerHTML = '...Sending';
                  }
              }

           })();
           </script> -->
           <div class="registration_form">
           <!-- Form -->
           <form  action="{{ route('register') }}" method="POST">
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
                      <input type="submit" value="create an account" id="register-submit">
                     <a class="acount-btn" href="{{ route("login.github") }}"><i class="fa fa-github fa-lg"></i>  Signup with Github </a> 
                     <a class="acount-btn" href="{{ route("login.github") }}"><i class="fa fa-google fa-lg"></i>  Signup with Gmail </a>
                  </div>
                  <div class="sky-form">
                      <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to mbilya.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
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
                      <input type="submit" value="sign in" id="register-submit">
            <a class="acount-btn" href="{{ route("login.github") }}"><i class="fa fa-github fa-lg"></i>  Login with Github </a>
            <a class="acount-btn" href="{{ route("login.github") }}"><i class="fa fa-google fa-lg"></i>  Login with Google </a>
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
