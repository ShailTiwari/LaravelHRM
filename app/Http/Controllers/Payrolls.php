<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;

class Payrolls extends Controller
{
    public function index()
    {
        $data= Payroll::paginate(100);
        return view('payroll_list',['members'=>$data]);
    }

     public function create(Request $request)
    { 
         $data= new Payroll();
         $data->name=$request->name;
         $data->isactive=$request->status;
         $data->isdelete='0';
         $data->inuse='1';
         $data->created_by='1';
         $data->updated_by='1';
         $data->save();
        return redirect('Payroll');                      
    }

      public function edit($id)
    {
         $data=Payroll::find($id);
         $user=Payroll::where(['id'=>$id])->first();
         return $user;
        // return view('Payroll_list',['member'=>$user]);
    }

    public function delete($id)
    { 
        $date=Payroll::find($id);
        $date->delete(); 
        return redirect('Payroll');
    }
}
