<?php

namespace App\Http\Controllers;
use App\Models\Holiday;

use Illuminate\Http\Request;

class Holidays extends Controller
{
    
      public function index()
    {
         $data= Holiday::all();
         return view('holiday_list',['members'=>$data]);
    }
}
