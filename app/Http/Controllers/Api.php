<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Illuminate\Http\Request;

class Api extends Controller
{
    //
    function getdata()
    {
        $department = Employee::all();
      return   $department;


    }
}
