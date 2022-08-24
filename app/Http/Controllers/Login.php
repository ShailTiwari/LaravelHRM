<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
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

       return view('Login.login');
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

        return view('Login.signup');
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
                             Mail::send('Login.signup_email', ['username' =>$request->name], 
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
       return view('Login.forgot_password');
    }



 public function forgot_password_post(Request $request)
  {
    $request->validate([
        'email' => 'required|email|exists:employees'
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
      'email' => 'required|exists:employees',
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
   //  return back()->with('message', 'We have e-mailed your password reset link!');

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
                                'email' =>$googleUser->email,
                                'name' =>$googleUser->name,                      
                                'password' =>Hash::make('abc123'),
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);
                         $finduserr = User::where('google_id',$googleUser->id)->first();
                         $request->session()->put('user',$finduserr); 
                         Mail::send('Login.signup_email', ['username' =>$googleUser->name], 
                                function($message) use($googleUser){
                                  $message->to($googleUser->email);
                                  $message->subject('Signup Notification  via Google');
                              });
                        return redirect('home');
                    }
            }     

        }
         catch (Exception $e) 
         {
            //dd($e->getMessage());
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
                                'email' =>$githubUser->email,
                                'name' =>$githubUser->name,                      
                                'password' =>Hash::make('abc123'),
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);
                         $finduserr = User::where('github_id',$githubUser->id)->first();
                        $request->session()->put('user',$finduserr); 
                         Mail::send('Login.signup_email', ['username' =>$githubUser->name], 
                                function($message) use($githubUser){
                                  $message->to($githubUser->email);
                                  $message->subject('Signup Notification via Git');
                              });
                        return redirect('home');
                    }
            }     

        }
         catch (Exception $e) 
         {
            //dd($e->getMessage());
        }

    }




    public function redirectTolinkedin()
    {
       //  return Socialite::driver('github')->redirect();
        return Socialite::driver('linkedin')->redirect();

    }  

    public function handlelinkedinCallback(Request $request)
    {
        try {  
            $linkedinuser = Socialite::driver('linkedin')->stateless()->user();      
            $finduser = User::where('linkedin_id', $linkedinuser->id)->first();

            if($finduser)
            {      
               $value = $request->session()->put('user',$finduser); 
               return redirect('home'); 
            }
            else
            {
                    $finduserr = User::where('email', $linkedinuser->email)->first();
                    if($finduserr)
                    {  
                        User::where('email', $linkedinuser->email)
                            ->update([
                                'linkedin_id'=>$linkedinuser->id,  
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);                       
                                $finduser = User::where('github_id', $linkedinuser->id)->first();
                                $value = $request->session()->put('user',$finduser); 
                                return redirect('home'); 
                     }
                    else
                    {
                        User::create([
                                'linkedin_id'=>$linkedinuser->id,
                                'email' =>$linkedinuser->email,
                                'name' =>$linkedinuser->name,                      
                                'password' =>Hash::make('abc123'),
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);
                         $finduserr = User::where('linkedin_id',$linkedinuser->id)->first();
                                $value = $request->session()->put('user',$finduserr); 
                         Mail::send('Login.signup_email', ['username' =>$linkedinuser->name], 
                                function($message) use($linkedinuser){
                                  $message->to($linkedinuser->email);
                                  $message->subject('Signup Notification via Linked in');
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





    public function redirectToamazon()
    {
         return Socialite::driver('amazon')->redirect();

    } 


    public function handleamazonCallback(Request $request)
    {
        try {  
            $amazonUser = Socialite::driver('amazon')->stateless()->user();
            $finduser = User::where('amazon_id', $amazonUser->id)->first();

            if($finduser)
            {      
               $value = $request->session()->put('user',$finduser); 
               return redirect('home'); 
            }
            else
            {
                 $finduserr = User::where('email', $amazonUser->email)->first();
                    if($finduserr)
                    {  
                        User::where('email', $amazonUser->email)
                            ->update(['amazon_id'=>$amazonUser->id, 
                                      'isactive'=>1,
                                      'isdelete'=>0
                                ]);                       
                                $finduser = User::where('amazon_id', $amazonUser->id)->first();
                                $value = $request->session()->put('user',$finduser); 
                                return redirect('home'); 
                     }
                    else
                    {
                        User::create([
                                'amazon_id' =>$amazonUser->id,
                                'email' =>$amazonUser->email,
                                'name' =>$amazonUser->name,                      
                                'password' =>Hash::make('abc123'),
                                'isactive'=>1,
                                'isdelete'=>0
                                ]);
                         $finduserr = User::where('amazon_id',$amazonUser->id)->first();
                         $request->session()->put('user',$finduserr); 
                         Mail::send('Login.signup_email', ['username' =>$amazonUser->name], 
                                function($message) use($amazonUser){
                                  $message->to($amazonUser->email);
                                  $message->subject('Signup Notification  via Google');
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


       public function logout()
    {
        if(session()->has('user'))
        {
         session()->pull('user');
        }
        return redirect('login');
    }








public function setting()
    {
         $id=1;
         $page_name="Settings";
         $data=Setting::find($id);
         $user=Setting::where(['id'=>$id])->first();
         return view('settings',['page_name'=>$page_name,'member'=>$user]);
    }

       public function update_setting(Request $request)
    { 
         $data= new Setting();
        // return $request->input();

         $data=Setting::find($request->id);
        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            //$data['profile_picture']= $filename;
            $data->logo=$filename;
        }
        if($request->file('invoice_logo')){
            $file= $request->file('invoice_logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            //$data['profile_picture']= $filename;
            $data->invoice_image=$filename;
        }
         $data->site_name=$request->site_name;
         $data->company_name=$request->company_name;
         $data->sort_name=$request->sort_name;
         $data->description=$request->description;
         $data->pan_no=$request->pan_no;
         $data->gst_no=$request->gst_no;
         $data->est_info=$request->est_info;
         $data->phone=$request->phone;
         $data->owner=$request->owner;
         $data->state=$request->state;
         $data->zipCode=$request->zipCode;
         $data->save();
        return redirect('setting');   

    }
}
