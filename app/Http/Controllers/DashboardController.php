<?php

namespace App\Http\Controllers;
use App\MyLibrary;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   
        // dd('tes');
        return view('template.dashboard');
    }
}