<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class Activitys extends Controller
{  public function __construct() 
    {
        $this->page_name="Activitys";
    }




 public function index(Request $request)
     {
        $projects = DB::select('select * from projects');
        $issues = DB::select('select * from issues');
        $assignee = DB::select('select * from employees');
        $reporter = DB::select('select * from employees');
        $labels = DB::select('select * from labels');
        $flagges = DB::select('select * from flagges');
        $posts = Activity::orderBy('order','asc')->get();


        return view('work_list',
            ['page_name'=>$this->page_name,
            'posts'=>$posts,
            'projects'=>$projects,
            'issues'=>$issues,
            'assignee'=>$assignee,
            'reporter'=>$reporter,
            'labels'=>$labels,
            'flagges'=>$flagges]);

     }




     public function projects_view($projectname,$id)
     {        
        $projects = DB::select('select * from projects');
        $task_status = DB::select('select * from task_status');
        $issues = DB::select('select * from issues');
        $assignee = DB::select('select * from employees');
        $reporter = DB::select('select * from employees');
        $labels = DB::select('select * from labels');
        $flagges = DB::select('select * from flagges');
        $posts = Activity::where('project', $id)
                             ->orderBy('order','asc')
                             ->get();
        return view('activity',
            ['page_name'=>$this->page_name,
            'posts'=>$posts,
            'projects'=>$projects,
            'issues'=>$issues,
            'assignee'=>$assignee,
            'reporter'=>$reporter,
            'labels'=>$labels,
            'flagges'=>$flagges,
            'task_status'=>$task_status]);

     }

    public function updateOrder(Request $request){
        foreach ($request->order as $key => $order) 
        {            
            // return response()->json($request);
                 $data= new Activity();
                 $data=Activity::find($order['id']);
                 $data->taskstatus=$order['status'];
                 $data->order=$order['order'];
                // $data->ticketid=$order['ticketid'];
                // $data->head_id=$order['head_id'];
                 $event =$data->update();
                // return response()->json($data);
        }

        return response('Update Successfully.', 200);
    }



      public function create_activity_profile(Request $request)
    { 
         $data= new Activity();
         $data->project=$request->project;
         $data->key='AP-T';
         $data->icon_picture='';
         $data->type=$request->type;
         $data->summary=$request->summary;
         $data->description=$request->description;
         $data->assignee=$request->assignee;
         $data->reporter=$request->reporter;
         $data->labels=$request->labels;
         $data->flagged=$request->flagged;
         $data->start=date('Y-m-d');
         $data->options='1';
         $data->isconfirm='1';
         $data->remarks='';
         $data->save();
        return redirect('activity');                      
    }



    


}
