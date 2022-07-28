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
}
