@extends("frontend.app")
@section('title') {{ "Land Portal Login" }} @endsection
@section('content')

<div class="login_sec">
    <div class="container">
        <ol class="breadcrumb">
         <li><a href="{{ route('/') }}">Home</a></li>
         <li class="active">Login Land Portal</li>
        </ol>
        <h2>Login</h2>
        <div class="col-md-6 log">
                <p>Welcome, please enter the following to continue.</p>
                <p>If you have previously Login with us, <span>click here</span></p>
            <form method="POST" action="{{ route('login') }}">
                   @csrf

                    <h5>Email Adress:</h5>
               <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                      {{ $errors->first('email') }}
                                    </span>
                                @endif
                    <h5>Password:</h5>
                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                   <div> <input type="submit" value="Login">
                     <a style="color: white" class="acount-btn" href="{{ route("login.github") }}"><i class="fa fa-github fa-lg"></i>  Login with Github </a></div>
                     <a href="{{route('password.request')}}">Forgot Password ?</a>

                </form>
                 <!-- Github login -->
<!-- <a class="github-button" href="google.com" data-color-scheme="no-preference: dark; light: dark; dark: dark;" data-size="large">Signup with GitHub</a> -->
        </div>
         <div class="col-md-6 login-right">
                 <h3>NEW REGISTRATION</h3>
               <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
               <a class="acount-btn" href="{{ route("register") }}">Create an Account</a>
               <a class="acount-btn" href="{{ route("login.github") }}"><i class="fa fa-github fa-lg"></i>  Signup with Github </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
