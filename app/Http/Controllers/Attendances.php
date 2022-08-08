<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

     public function auto_attendance(Request $request)
    { 
         $data= new Attendance();
         $data->employee_id=session()->get('user')['id'];
         if ($request->type=='1') 
         {
         $data->start=date('Y-m-d');
         $data->puncin=date('H:i:s');
         $data->puncout="00:00:00";
         $data->work="00:00:00";
         $data->break="00:00:00";
         $data->overtime="00:00:00";  
         $data->shifttime="08:00:00";
         $data->remarks="Auto";

                 if(Attendance::where('start', '=',date('Y-m-d'))->where('employee_id',session()->get('user')['id'])->count() > 0)
                 {
                 //$data->save();     
                 return response(['code' => 201,'status' => 'success', 'msg' => 'Already exist.']);
                 }
                 else
                 {

                 $data->save();     
                 return response(['code' => 200,'status' => 'success', 'msg' => 'Update Successfully.']);
                 }
         }
         else
         {
            $Attendance = Attendance::where('start', '=',date('Y-m-d'))->where('employee_id',session()->get('user')['id'])->get();
            $id=$Attendance[0]->id;


         $data=Attendance::find($id);
         $data->puncout=date('H:i:s');
         $data->work="00:00:00";
         $data->break="00:00:00";
         $data->overtime="00:00:00";
         $data->save();     
         return response(['code' => 200,'status' => 'success', 'msg' => 'Update Successfully.']);
                
         }
       



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
