<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class positionsController extends Controller
{
    public function positions(){

        return view('layouts.positions');
    }
}
