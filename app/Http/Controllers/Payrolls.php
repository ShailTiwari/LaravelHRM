<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Payroll;
use Illuminate\Support\Facades\DB;

class Payrolls extends Controller
{ 
    public function __construct() 
    {
        $this->page_name="Payroll";
    }

     public function list()
    {
        return view('payroll_list',['page_name'=>$this->page_name]);
    }
      public function data()
    {
        $data = DB::select('SELECT * from employees');
        return response($data);
    }

      public function print($id)
    {
         $data=Payroll::find($id);
         $user=Payroll::where(['id'=>$id])->first();
               $pdf = PDF::loadView('salary_slip'); 
        return $pdf->download('Salary_slip.pdf');
    }

       public function print_invoice($id)
    {
         $data=Payroll::find($id);
         $user=Payroll::where(['id'=>$id])->first();
               $pdf = PDF::loadView('invoice_slip'); 
               $pdf->setPaper('A4', 'portrait');
        return $pdf->download('invoice_slip.pdf');
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
