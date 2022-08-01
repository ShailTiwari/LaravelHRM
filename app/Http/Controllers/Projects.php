<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class Projects extends Controller
{
     public function __construct() 
    {
        $this->page_name="Project";
    }
     public function project_list()
    {
        $data= Project::all();
        return view('project_list',['page_name'=>$this->page_name,'members'=>$data]);
    }
    
    public function project_profile($id)
    {
        //return $id;
         $data=Project::find($id);
         $user=Project::where(['id'=>$id])->first();
         return view('project_profile',['page_name'=>$this->page_name,'member'=>$user]);
    }

      public function create_project_profile(Request $request)
    { 
         $data= new Project();

        if($request->file('image'))
        {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/project_img'), $filename);
            //$data['profile_picture']= $filename;
            $data->icon_picture=$filename;
        }

         $data->title=$request->title;
         $data->key=$request->key;
         $data->start=date('Y-m-d');
         $data->description='';
         $data->category=$request->category;
         $data->lead=$request->lead;
         $data->default_assigned=$request->default_assigned;
         $data->options='1';
         $data->isconfirm='1';
         $data->remarks='';
         $data->save();
        return redirect('project');                      
    }

      public function update_Project_profile(Request $request)
    { 
         $data= new Project();
         
         $data=Project::find($request->id);
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
        return redirect('project');                      
    }

      public function delete($id)
    { 
        $date=Project::find($id);
        $date->delete(); 
        return redirect('project');
    }
}
