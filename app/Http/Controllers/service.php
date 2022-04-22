<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service extends Controller
{
    public function index()
    {
        return view('frontend.service');
    }
}
