<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style type="text/css">
  

    HTML CSS 

    Result
    Skip Results Iframe

body {
  background-color: rgb(228, 229, 247);
}
.social-login img {
  width: 24px;
}
a {
  text-decoration: none;
}

.card {
  font-family: sans-serif;
  width: 300px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 3em;
  margin-bottom:3em;
  border-radius: 10px;
  background-color: #ffff;
  padding: 1.8rem;
  box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
}

.title {
  text-align: center;
  font-weight: bold;
  margin: 0;
}
.subtitle {
  text-align: center;
  font-weight: bold;
}
.btn-text {
  margin: 0;
}

.social-login {
  display: flex;
  justify-content: center;
  gap: 5px;
}

.google-btn {
  background: #fff;
  border: solid 2px rgb(245 239 239);
  border-radius: 8px;
  font-weight: bold;
  display: flex;
  padding: 10px 10px;
  flex: auto;
  align-items: center;
  gap: 5px;
  justify-content: center;
}
.fb-btn {
  background: #fff;
  border: solid 2px rgb(69, 69, 185);
  border-radius: 8px;
  padding: 10px;
  display: flex;
  align-items: center;
}

.or {
  text-align: center;
  font-weight: bold;
  border-bottom: 2px solid rgb(245 239 239);
  line-height: 0.1em;
  margin: 25px 0;
}
.or span {
  background: #fff;
  padding: 0 10px;
}

.email-login {
  display: flex;
  flex-direction: column;
}
.email-login label {
  color: rgb(170 166 166);
}

input[type="text"],
input[type="password"] {
  padding: 15px 20px;
  margin-top: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}

.cta-btn {
  background-color: rgb(69, 69, 185);
  color: white;
  padding: 18px 20px;
  margin-top: 10px;
  margin-bottom: 20px;
  width: 100%;
  border-radius: 10px;
  border: none;
}

.forget-pass {
  text-align: center;
  display: block;
}


</style>
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
      <p class="subtitle">Already have an account? <a href="/login"> sign Up</a></p>

       <div class="social-login">  
          <a href="{{ url('auth/google') }}" class="google-btn">
            <img alt="Google" src="{{ asset('images/google.svg') }}" />
          </a>
          <a href="{{ url('auth/github') }}" class="google-btn">
            <img src="{{ asset('images/github.png') }}">
          </a> 
          <a href="{{ url('auth/github') }}" class="google-btn">
            <img src="{{ asset('images/facebook.svg') }}">
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
      <a class="forget-pass" href="#">Forgot password?</a>
   </form>
</div>


</body>
</html>