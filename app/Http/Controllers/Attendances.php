<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Attendance;

class Attendances extends Controller
{
    public function __construct() 
    {
        $this->page_name="Attendance";
    }
     public function Attendance_list()
    {
        $data= Attendance::all();

         $users = DB::table('attendances')->count();
         $maxdate = DB::table('attendances')->max('start'); 

         $last_attendance = DB::table('attendances')
                ->select('start', 'puncin','puncout','break','overtime')
                ->orderByRaw('id DESC')
                ->limit(1)
                ->get();



        return view('Attendance_list',['page_name'=>$this->page_name,'last_attendance'=>$last_attendance,'members'=>$data]);
    }

    
    public function Attendance_profile($id)
    {
        //return $id;
         $data=Attendance::find($id);
         $user=Attendance::where(['id'=>$id])->first();
         return view('Attendance_profile',['page_name'=>$this->page_name,'member'=>$user]);
    }

      public function create_attendance(Request $request)
    { 
         $data= new Attendance();
         $data->employee_id=session()->get('user')['id'];
         $data->start=$request->start;
         $data->puncin=$request->puncin;
         $data->puncout=$request->puncout;
         $data->work=$request->work;
         $data->break=$request->break;
         $data->overtime=$request->overtime;
         $data->shifttime=$request->shifttime;
         $data->remarks=$request->remarks;
         $data->save();
         return redirect('Attendance');                      
    }


      public function update_Attendance_profile(Request $request)
    { 
         $data= new Attendance();
         
         $data=Attendance::find($request->id);
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
        return redirect('Attendance');                      
    }



      public function delete($id)
    { 
        $date=Attendance::find($id);
        $date->delete(); 
        return redirect('Attendance');
    }
}
