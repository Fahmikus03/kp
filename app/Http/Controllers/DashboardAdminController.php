<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Information;
use App\Models\Type_of_complaint;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        return view('dashboard.admin.dashboard',[
            'title' => 'Dashboard Admin',
            'ktp' => Complaint::where('type_of_complaint_id', 1)->count(),
            'kk' => Complaint::where('type_of_complaint_id', 2)->count(),
            'akte' => Complaint::where('type_of_complaint_id', 3)->count(),
        ]);
    }

    public function webSetting(){
        return view('dashboard.admin.web-setting',[
            'title' => 'Web Setting',
            'info' => Information::all()
        ]);
    }

    public function webSettingEdit(){
        return view('dashboard.admin.web-setting-edit',[
            'title' => 'Web Setting',
            'info' => Information::all()
        ]);
    }

    public function webSettingUpdate(Request $request){
        $data = $request->validate([
            'about' => 'required',
            'street' => 'required',
            'address' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        Information::where('id', 1)->update($data);

        return redirect()->route('web-setting')->with('success', 'Web Setting Updated');
    }
}
