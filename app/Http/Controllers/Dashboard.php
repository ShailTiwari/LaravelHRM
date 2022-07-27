<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Employee;

class Dashboard extends Controller
{ 
      public function index()
    {
         $data= User::all();
         $bounce_rate=32.56;
         $page_view=6859;
         $new_session=64.25;
         return view('welcome',['members'=>$data,'bounce_rate'=>$bounce_rate,'page_view'=>$page_view,'new_session'=>$new_session]);
    }
      public function profile($id)
    {
         $data=User::find($id);
         $user=User::where(['id'=>$id])->first();
         return view('profile',['member'=>$user]);
    }
      public function update_profile(Request $request)
    { 
         $data=User::find($request->id);
         $data->name=$request->name;
         $data->email=$request->email;
         $data->save();
        return redirect('tabale_data');                      
    }
      public function delete($id)
    { 
       // return $id;
        $date=User::find($id);
        $date->delete(); 
        return redirect('tabale_data');
    }
      public function user_list()
    {
        $data= User::paginate(10);
        return view('user_list',['members'=>$data]);
    }
      public function department_list()
    {
        $data= Department::paginate(100);
        return view('department_list',['members'=>$data]);
    }
      public function employee_list()
    {
        $data= Employee::all();
        return view('employee_list',['members'=>$data]);
    }



}
