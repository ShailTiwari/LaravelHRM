<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class Employe extends Controller
{ 

    public function __construct() 
    {
        $this->page_name="Employee";
    }
     public function employee_list()
    {
        //$data= Employee::all();

        $data = DB::select('select * from employees limit 10');
       // return response($data);
        return view('employee_list',['page_name'=>$this->page_name,'members'=>$data]);
    }

      public function employee_data()
    {
        $data = DB::select('select * from employees ');
        return response($data);
    }




    
    public function employee_profile($id)
    {
        //return $id;
         $data=Employee::find($id);
         $user=Employee::where(['id'=>$id])->first();
         return view('employee_profile',['page_name'=>$this->page_name,'member'=>$user]);
    }

      public function create_employee_profile(Request $request)
    { 
         $data= new Employee();
         
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img'), $filename);
            //$data['profile_picture']= $filename;

         $data->profile_picture=$filename;
        }


         $data->name=$request->name;
         $data->email=$request->email;
         $data->lastname=$request->lastname;
         $data->address=$request->address;
         $data->department=$request->department;
         $data->post=$request->post;
         $data->save();
        return redirect('employee');                      
    }


      public function update_employee_profile(Request $request)
    { 
         $data= new Employee();
         
         $data=Employee::find($request->id);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img'), $filename);
            //$data['profile_picture']= $filename;

         $data->profile_picture=$filename;
        }

         $data->name=$request->name;
         $data->email=$request->email;
         $data->address=$request->address;
         $data->department=$request->department;
         $data->post=$request->post;
         $data->save();
        return redirect('employee');                      
    }



      public function delete($id)
    { 
        $date=Employee::find($id);
        $date->delete(); 
        return redirect('employee');
    }
}
