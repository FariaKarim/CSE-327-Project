<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorController extends Controller
{
    //
    public function viewHome(){
       return view('doctor.home');
    }
}
