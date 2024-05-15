<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardKaderController extends Controller
{
    public function index()
    {
        return view('kader.dashboard.index');
    }
}
