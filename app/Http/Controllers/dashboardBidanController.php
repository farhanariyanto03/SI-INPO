<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardBidanController extends Controller
{
    public function index()
    {
        return view('bidan.dashboard.index');
    }
}
