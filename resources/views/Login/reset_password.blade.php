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

                  @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
  
      <h2 class="title">Reset Password? 🔒</h2>
      <p class="subtitle">Enter your email and new password we'll set your password </p>

        <form id="formAuthentication" class="mb-3"  method="post" action="{{ route('updatePassword') }}">
         @csrf
      <div class="email-login">
         <label for="email"> <b>Email</b></label>
                 <input type="hidden" name="token" value="{{ $token }}">
         <input type="email" placeholder="Email" name="email" id="email" required>
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif

         <label for="email"> <b>Password</b></label>
         <input type="password" placeholder="Password" name="password" id="password" required>
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif

         <label for="psw"><b>Confirm Password</b></label>
         <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" required>
          @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
          @endif

      </div>
      <button  type="submit" class="cta-btn">Reset Password</button>
      <a class="forget-pass" href="/login">Back to login ?</a>
   </form>
</div>


</body>
</html>