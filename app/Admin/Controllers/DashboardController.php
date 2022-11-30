<?php

namespace App\Admin\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
