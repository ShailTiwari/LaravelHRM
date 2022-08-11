<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class Login extends Controller
{
    public function index()
    {
         if(session()->has('user'))
        {
          return redirect('home');
        }

       return view('login');
    }

     public function postLogin(Request $request)
    { 
         $request->validate(['email' => 'required',
                           'password' => 'required',
                           ]);
        $data= $request->input();
        $email=$request->email;
        $password=Hash::make($request->password);
        $user=User::where(['email'=>$request->email])->first();

        if ( $user && Hash::check($request->password, $user->password)) 
        {
             $request->session()->put('user',$user); 
             return redirect('home');
        }
        else
        { 
              //return "Username and passwd not matched";
             return back()->with('errors_msg', 'Username or Password not matched.');
        }
    }



    
     public function signup()
    { 
     if(session()->has('user'))
        {
          return redirect('home');
        }

        return view('signup');
    }

       public function logout()
    {
        if(session()->has('user'))
        {
         session()->pull('user');
        }
        return redirect('login');
    }


   

  public function ragister(Request $request)
    { 
                      $request->validate(['name' => 'required|max:255',
                           'email' => 'required|unique:users|max:255',
                           'password' => 'required',
                           ]);
                        $User= new User;
                        $User->name=$request->name;
                        $User->email=$request->email;
                        $User->name=$request->name;
                        $User->post=1;
                        $User->isactive=1;
                        $User->isactive=0;
                        $User->password= Hash::make($request->password);
                        $User->save();

                         $user=User::where(['email'=>$request->email])->first();
                            if (!$user) 
                            {
                               return redirect('login');
                            }
                            else
                            {                    
                             $request->session()->put('user',$user); 
                             Mail::send('signup_email', ['username' =>$request->name], 
                                function($message) use($request){
                                  $message->to($request->email);
                                  $message->subject('Signup Notification');
                              });
                              return redirect('home');
                            }

    }


     public function forgot_password()
    {
       return view('forgot_password');
    }



 public function forgot_password_post(Request $request)
  {
    $request->validate([
        'email' => 'required|email|exists:users',
    ]);

    //$token = str_random(64);
   $token = Str::random(40);

      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );
      Mail::send('verify_password', ['token' => $token], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password Notification');
      });

      return back()->with('message', 'We have e-mailed your password reset link!');
  }



  public function getPassword($token) { 

     return view('reset_password',['token' => $token]);
  }

  public function updatePassword(Request $request)
  {

  $request->validate([
      'email' => 'required|email|exists:users',
      'password' => 'required|string|min:6|confirmed',
      'password_confirmation' => 'required',

  ]);

  $updatePassword = DB::table('password_resets')
                      ->where(['email' => $request->email, 'token' => $request->token])
                      ->first();

  if(!$updatePassword)
      return back()->withInput()->with('error', 'Invalid token!');

    $user = User::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);

    DB::table('password_resets')->where(['email'=> $request->email])->delete();

    return redirect('/login')->with('message', 'Your password has been changed!');

  }





    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function handleGoogleCallback(Request $request)
    {
        try {  
            $googleUser = Socialite::driver('google')->user();
           // return $googleUser ;
            $finduser = User::where('google_id', $googleUser->id)->first();
            if($finduser)
            {      
               $request->session()->put('user',$finduser); 
                return redirect('home'); 
            }
            else
            {

                        $User= new User;
                        $User->name=$googleUser->name;
                        $User->email=$googleUser->email;
                        $User->google_id=$googleUser->id;
                        $User->post=1;
                        $User->isactive=1;
                        $User->isactive=0;
                        $User->password= Hash::make('abc123');
                        $User->save();

                         $user=User::where(['google_id'=>$googleUser->id])->first();
                            if (!$user) 
                            {
                               return redirect('login');
                            }
                            else
                            {                    
                             $request->session()->put('user',$user); 
                             Mail::send('signup_email', ['username' =>$googleUser->name], 
                                function($message) use($request){
                                  $message->to($googleUser->email);
                                  $message->subject('Signup Notification');
                              });
                              return redirect('home');
                            }



            }     

        }
         catch (Exception $e) 
         {

            dd($e->getMessage());

        }

    }
}
