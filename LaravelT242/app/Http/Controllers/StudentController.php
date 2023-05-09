<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $data= Students::where('id', 1)->get();
          
        return view('index', $data) ; 
       }
}
