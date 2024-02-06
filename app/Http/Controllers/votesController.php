<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class votesController extends Controller
{
    public function votes(){

        return view('layouts.votes');
    }
}
