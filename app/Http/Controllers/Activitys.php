<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Event;

class Activitys extends Controller
{  public function __construct() 
    {
        $this->page_name="Activitys";
    }

     public function index(Request $request)
     {
        $posts = Activity::orderBy('order','asc')->get();

        return view('activity',['page_name'=>$this->page_name,'posts'=>$posts]);
        //return view('activity',compact('posts'));
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
