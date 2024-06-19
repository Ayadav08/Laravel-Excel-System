<?php

namespace App\Http\Controllers\Admin;

use  App\Http\Controllers\Controller;
use  Illuminate\Http\Request;

class AdminControoler extends Controller
{
    public function home()
    {
        return view('admin.dashboard');
    }
}