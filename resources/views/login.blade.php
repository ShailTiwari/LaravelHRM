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
    <form id="formAuthentication" class="mb-3"  method="post" action="{{ route('login.post') }}">
       @csrf
      <h2 class="title"> Log in</h2>
      <p class="subtitle">Don't have an account? <a href="/signup"> Sign  Up</a></p>

      <div class="social-login">
      
      
 <a href="{{ url('auth/google') }}" class="google-btn">
            <img alt="Google" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGQkJCMDA7IiBkPSJNMTEzLjQ3LDMwOS40MDhMOTUuNjQ4LDM3NS45NGwtNjUuMTM5LDEuMzc4QzExLjA0MiwzNDEuMjExLDAsMjk5LjksMCwyNTYNCgljMC00Mi40NTEsMTAuMzI0LTgyLjQ4MywyOC42MjQtMTE3LjczMmgwLjAxNGw1Ny45OTIsMTAuNjMybDI1LjQwNCw1Ny42NDRjLTUuMzE3LDE1LjUwMS04LjIxNSwzMi4xNDEtOC4yMTUsNDkuNDU2DQoJQzEwMy44MjEsMjc0Ljc5MiwxMDcuMjI1LDI5Mi43OTcsMTEzLjQ3LDMwOS40MDh6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojNTE4RUY4OyIgZD0iTTUwNy41MjcsMjA4LjE3NkM1MTAuNDY3LDIyMy42NjIsNTEyLDIzOS42NTUsNTEyLDI1NmMwLDE4LjMyOC0xLjkyNywzNi4yMDYtNS41OTgsNTMuNDUxDQoJYy0xMi40NjIsNTguNjgzLTQ1LjAyNSwxMDkuOTI1LTkwLjEzNCwxNDYuMTg3bC0wLjAxNC0wLjAxNGwtNzMuMDQ0LTMuNzI3bC0xMC4zMzgtNjQuNTM1DQoJYzI5LjkzMi0xNy41NTQsNTMuMzI0LTQ1LjAyNSw2NS42NDYtNzcuOTExaC0xMzYuODlWMjA4LjE3NmgxMzguODg3TDUwNy41MjcsMjA4LjE3Nkw1MDcuNTI3LDIwOC4xNzZ6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojMjhCNDQ2OyIgZD0iTTQxNi4yNTMsNDU1LjYyNGwwLjAxNCwwLjAxNEMzNzIuMzk2LDQ5MC45MDEsMzE2LjY2Niw1MTIsMjU2LDUxMg0KCWMtOTcuNDkxLDAtMTgyLjI1Mi01NC40OTEtMjI1LjQ5MS0xMzQuNjgxbDgyLjk2MS02Ny45MWMyMS42MTksNTcuNjk4LDc3LjI3OCw5OC43NzEsMTQyLjUzLDk4Ljc3MQ0KCWMyOC4wNDcsMCw1NC4zMjMtNy41ODIsNzYuODctMjAuODE4TDQxNi4yNTMsNDU1LjYyNHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGMTQzMzY7IiBkPSJNNDE5LjQwNCw1OC45MzZsLTgyLjkzMyw2Ny44OTZjLTIzLjMzNS0xNC41ODYtNTAuOTE5LTIzLjAxMi04MC40NzEtMjMuMDEyDQoJYy02Ni43MjksMC0xMjMuNDI5LDQyLjk1Ny0xNDMuOTY1LDEwMi43MjRsLTgzLjM5Ny02OC4yNzZoLTAuMDE0QzcxLjIzLDU2LjEyMywxNTcuMDYsMCwyNTYsMA0KCUMzMTguMTE1LDAsMzc1LjA2OCwyMi4xMjYsNDE5LjQwNCw1OC45MzZ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
            <p class="btn-text">Sign in with Google</p>
          </a>
         <button class="fb-btn">
         <img alt="FB" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDI5MS4zMTkgMjkxLjMxOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjkxLjMxOSAyOTEuMzE5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojM0I1OTk4OyIgZD0iTTE0NS42NTksMGM4MC40NSwwLDE0NS42Niw2NS4yMTksMTQ1LjY2LDE0NS42NmMwLDgwLjQ1LTY1LjIxLDE0NS42NTktMTQ1LjY2LDE0NS42NTkNCgkJUzAsMjI2LjEwOSwwLDE0NS42NkMwLDY1LjIxOSw2NS4yMSwwLDE0NS42NTksMHoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTE2My4zOTQsMTAwLjI3N2gxOC43NzJ2LTI3LjczaC0yMi4wNjd2MC4xYy0yNi43MzgsMC45NDctMzIuMjE4LDE1Ljk3Ny0zMi43MDEsMzEuNzYzaC0wLjA1NQ0KCQl2MTMuODQ3aC0xOC4yMDd2MjcuMTU2aDE4LjIwN3Y3Mi43OTNoMjcuNDM5di03Mi43OTNoMjIuNDc3bDQuMzQyLTI3LjE1NmgtMjYuODF2LTguMzY2DQoJCUMxNTQuNzkxLDEwNC41NTYsMTU4LjM0MSwxMDAuMjc3LDE2My4zOTQsMTAwLjI3N3oiLz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
         </button>        
      </div>

      <p class="or"><span>or</span></p>

      <div class="email-login">
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
      <button  type="submit" class="cta-btn">Log In</button>
      <a class="forget-pass" href="#">Forgot password?</a>
   </form>
</div>


</body>
</html>