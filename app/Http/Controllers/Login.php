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

                      $user=User::where(['email'=>$request->email])->first();

                        if ($user) 
                        {
                            return back()->with('errors_msg', 'Email already exists.');
                        }
                        else
                        { 
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
    // return $request->input();

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
      'email' => 'required|exists:users',
      'password' => 'required|string|min:6|confirmed',
      'password_confirmation' => 'required',

  ]);

  $updatePassword = DB::table('password_resets')
                      ->where(['email' => $request->email, 'token' => $request->token])
                      ->first();

  if(!$updatePassword)
  {

      return back()->withInput()->with('error', 'Invalid token!');
  }
  else
  {
    
    $user = User::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);

    DB::table('password_resets')->where(['email'=> $request->email])->delete();

    return redirect('/login')->with('message', 'Your password has been changed!');
  }


  }





    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();

    } 


    public function handleGoogleCallback(Request $request)
    {
        try {  
            $googleUser = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('google_id', $googleUser->id)->first();

            if($finduser)
            {      
               $value = $request->session()->put('user',$finduser); 
               return redirect('home'); 
            }
            else
            {
                 $finduserr = User::where('email', $googleUser->email)->first();
                    if($finduserr)
                    {  
                        User::where('email', $googleUser->email)
                            ->update(['google_id'=>$googleUser->id, 
                                      'isactive'=>1,
                                      'isdelete'=>0
                                ]);                       
                                $finduser = User::where('google_id', $googleUser->id)->first();
                                $value = $request->session()->put('user',$finduser); 
                                return redirect('home'); 
                     }
                    else
                    {
                        User::create([
                                'google_id' =>$googleUser->id,
                                'name' =>$googleUser->name,                      
                                'password' =>Hash::make('abc123'),
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);
                         $finduserr = User::where('google_id',$googleUser->id)->first();
                         $request->session()->put('user',$finduserr); 
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







    public function redirectTogithub()
    {
        // return Socialite::driver('github')->redirect();
         return Socialite::driver('github')->redirect();

    }  

    public function handlegithubCallback(Request $request)
    {
        try {  

            $githubUser = Socialite::driver('github')->stateless()->user();
            $finduser = User::where('github_id', $githubUser->id)->first();

            if($finduser)
            {      
               $value = $request->session()->put('user',$finduser); 
               return redirect('home'); 
            }
            else
            {
                 $finduserr = User::where('email', $githubUser->email)->first();
                    if($finduserr)
                    {  
                        User::where('email', $githubUser->email)
                            ->update([
                                'github_id'=>$githubUser->id,  
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);                       
                                $finduser = User::where('github_id', $githubUser->id)->first();
                                $value = $request->session()->put('user',$finduser); 
                                return redirect('home'); 
                     }
                    else
                    {
                        User::create([
                                'github_id' =>$githubUser->id,
                                'name' =>$githubUser->name,                      
                                'password' =>Hash::make('abc123'),
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);
                         $finduserr = User::where('github_id',$githubUser->id)->first();
                        $request->session()->put('user',$finduserr); 
                         Mail::send('signup_email', ['username' =>$githubUser->name], 
                                function($message) use($request){
                                  $message->to($githubUser->email);
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
