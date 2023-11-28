<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class DashboardLeaderController extends Controller
{
    public function index(){
        return view('dashboard.leader.dashboard',[
            'title' => 'Dashboard Leader',
            'ktp' => Complaint::where('type_of_complaint_id', 1)->count(),
            'kk' => Complaint::where('type_of_complaint_id', 2)->count(),
            'akte' => Complaint::where('type_of_complaint_id', 3)->count(),
        ]);
    }
}
