<?php
namespace App\Http\Controllers;
use App\Models\Holiday;
use Illuminate\Http\Request;

class Holidays extends Controller
{
     public function __construct() 
    {
        $this->page_name="Holiday";
    }
      public function index()
    {
         $data= Holiday::all();
         return view('holiday_list',['page_name'=>$this->page_name,'members'=>$data]);
    }
       public function create(Request $request)
    { 
         $data= new Holiday();
         $data->title=$request->title;
         $data->description=$request->description;
         $data->start=$request->start;
         $data->isactive=1;
         $data->save();
        return redirect('holiday');                      
    }
       public function update (Request $request)
    { 
       // return $request->input();
         $data= new Holiday();
         $data=Holiday::find($request->id);
         $data->title=$request->title;
         $data->description=$request->description;
         $data->start=$request->start;
         $data->isactive=1;
         $data->save();
        return redirect('holiday');                      
    }
      public function delete($id)
    { 
        $date=Holiday::find($id);
        $date->delete(); 
        return redirect('holiday');
    }
}
