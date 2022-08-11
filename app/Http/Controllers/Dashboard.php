<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{  

    public function __construct() 
    {
        $this->page_name="Dashboard";
    }


      public function index()
    {
         $data= User::all();
         $users = DB::table('employees')->count();
         $projects = DB::table('projects')->count();
         $activities = DB::table('activities')->max('order'); 
         $holidays = DB::table('holidays')->count();
         $attendances = DB::table('attendances')->count();
         return view('welcome',
            [
                'page_name'=>$this->page_name,
                'members'=>$data,
                'users_count'=>$users,
                'projects'=>$projects,
                'activities'=>$activities,
                'holidays'=>$holidays,
                'attendances'=>$attendances
            ]);
    }
    
      public function profile($id)
    {
         $page_name="Profile";
         $data=User::find($id);
         $user=User::where(['id'=>$id])->first();
         return view('profile',['page_name'=>$page_name,'member'=>$user]);
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
        return view('user_list',['page_name'=>$this->page_name,'members'=>$data]);
    }
      public function department_list()
    {
        $data= Department::paginate(100);
        return view('department_list',['page_name'=>$this->page_name,'members'=>$data]);
    }
     



}
