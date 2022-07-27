<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class Events extends Controller
{
        public function index(Request $request)

    {

  

        if($request->ajax()) {

       

             $data = Event::whereDate('start', '>=', $request->start)

                       ->whereDate('end',   '<=', $request->end)

                       ->get(['id', 'title', 'start', 'end']);

  

             return response()->json($data);

        }

  

        return view('fullcalender');

    }

 

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function ajax_event_save (Request $request)

    {
        

             

 

        switch ($request->type) 
        {
           case 'add':
         $data= new Event();
         $data->title=$request->title;
         $data->start=$request->start;
         $data->end=$request->end;
         $event =$data->save();
         return response()->json($event);
        break;  

           case 'update':
              $data= new Event();
               $data=Event::find($request->id);
                 $data->title=$request->title;
                 $data->start=$request->start;
                 $data->end=$request->end;
                 $event =$data->update();

              return response()->json($event);
             break;  

           case 'delete':
              $flight= new Event();
              $flight = Event::find($request->id); 
              $flight->delete();
              return response()->json($flight);
             break;
        }

    }
}
