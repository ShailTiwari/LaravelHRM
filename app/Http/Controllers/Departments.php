<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class Departments extends Controller
{
      public function __construct() {
        $this->page_name="Department";
    }

     public function index()
    {
       // $page_name="Department";
        $data= Department::all();
        return view('department_list',['page_name'=>$this->page_name,'members'=>$data]);
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
