<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class candidatesController extends Controller
{
    public function candidates(){

        return view('layouts.candidates');
    }
}
