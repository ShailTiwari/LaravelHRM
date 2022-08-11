<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class Customers extends Controller
{
      public function __construct() 
    {
        $this->page_name="Customer";
    }
     public function list()
    {
        return view('customer_list',['page_name'=>$this->page_name]);
    }
      public function data()
    {
        $data = DB::select('SELECT * from customers');
        return response($data);
    }

      public function create(Request $request)
    { 
         $data= new Customer();         
        if($request->file('image'))
        {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img'), $filename);
            //$data['profile_picture']= $filename;
            $data->profile_picture=$filename;
        }
        else
         {
             $data->profile_picture='default.png';
         }
         $data->name=$request->name;
         $data->email=$request->email;
         $data->lastname=$request->lastname;
         $data->address=$request->address;
         $data->department=$request->department;
         $data->post=$request->post;
         $data->save();
        return redirect('customer');                      
    }


    public function edit($id)
    {
         $data=Customer::find($id);
         $user=Customer::where(['id'=>$id])->first();
         return view('employee_profile',['page_name'=>$this->page_name,'member'=>$user]);
    }



       public function update(Request $request)
    { 
         $data= new Customer();         
        if($request->file('image'))
        {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img'), $filename);
            //$data['profile_picture']= $filename;
            $data->profile_picture=$filename;
        }
        else
         {
             $data->profile_picture='default.png';
         }

         $data->name=$request->name;
         $data->email=$request->email;
         $data->address=$request->address;
         $data->department=$request->department;
         $data->post=$request->post;
         $data->save();
        return redirect('customer');                      
    }

      public function delete($id)
    { 
        $date=Customer::find($id);
        $date->delete(); 
        return redirect('customer');
    }



}
