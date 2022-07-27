<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class Departments extends Controller
{
     public function index()
    {
        $data= Department::paginate(100);
        return view('department_list',['members'=>$data]);
    }

     public function create(Request $request)
    { 
         $data= new Department();
         $data->name=$request->name;
         $data->isactive=$request->status;
         $data->isdelete='0';
         $data->inuse='1';
         $data->created_by='1';
         $data->updated_by='1';
         $data->save();
        return redirect('department');                      
    }

      public function edit($id)
    {
         $data=Department::find($id);
         $user=Department::where(['id'=>$id])->first();
         return $user;
        // return view('department_list',['member'=>$user]);
    }

    public function delete($id)
    { 
        $date=Department::find($id);
        $date->delete(); 
        return redirect('department');
    }


}
