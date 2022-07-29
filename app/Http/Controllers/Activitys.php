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
                 $data->ticketid=$order['ticketid'];
                 $data->taskstatus=$order['status'];
                 $data->head_id=$order['head_id'];
                 $data->order=$order['order'];
                 $event =$data->update();
                // return response()->json($data);
        }

        return response('Update Successfully.', 200);
    }
    


}
