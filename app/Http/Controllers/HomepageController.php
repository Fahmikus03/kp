<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class HomepageController extends Controller
{   
    public function homepage(){
        return view ('homepage', [
            'title' => 'Homepage',
            'info' => Information::all(),
        ]);
    } 
}
