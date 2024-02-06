<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bulletcandidatesController extends Controller
{
    public function bulletcandidates(){

        return view('layouts.bulletcandidates');
    }
}