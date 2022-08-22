<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
  <link rel="stylesheet" href="{{ asset('css/auth_css.css') }}">
<body>


<div class="card">
    @if(Session::has('errors_msg'))
                 <div
                        class="bs-toast toast fade show  bg-danger top-0"
                        data-role="alert"
                        data-aria-live="assertive"
                        data-animation="true"
                        data-autohide="true"
                        aria-atomic="true" 
                        data-delay="10"

                        
                      >
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Alert</div>
                          <small>Just Now</small>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          {{ Session::get('errors_msg') }}
                    @php
                        Session::forget('errors_msg');
                    @endphp
                        </div>
                      </div>

                @endif
              <form id="formAuthentication"  method="post" action="{{ route('ragister.post') }}">
       @csrf
      <h2 class="title"> Sign Up</h2>
      <p class="subtitle">Already have an account? <a href="{{url('login')}}">Sign In</a></p>

       <div class="social-login">  
          <a href="{{ url('auth/google') }}" class="google-btn">
            <img alt="Google" src="{{ asset('images/google.svg') }}" />
          </a>
          <a href="{{ url('auth/github') }}" class="google-btn">
            <img src="{{ asset('images/github.png') }}">
          </a> 
          <a href="{{ url('auth/linkedin') }}" class="google-btn">
            <img src="{{ asset('images/linkedin.svg') }}">
          </a>
      </div>

      <p class="or"><span>or</span></p>

      <div class="email-login">
        <label for="email"> <b>Name</b></label>
         <input type="text" placeholder="Enter Email" name="name" id="name" required>
          @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
         <label for="email"> <b>Email</b></label>
         <input type="text" placeholder="Enter Email" name="email" id="email" required>
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
         <label for="psw"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="password" id="password" required>
         @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
         @endif
      </div>
      <button  type="submit" class="cta-btn">Sign Up</button>
      <a class="forget-pass" href="{{url('forgot_password')}}">Forgot password?</a>
   </form>
</div>


</body>
</html>