<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class votersController extends Controller
{
    public function voters(){

        return view('layouts.voters');
    }
}