<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardLeaderController extends Controller
{
    public function index()
    {
        return view('dashboard/leader/dashboard', [
            'title' => 'Dashboard Leader',
        ]);
    }
}
