<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laratrust\Checkers\Role;

class DashboardController extends Controller
{
    public function index(){
        
        if(Auth::user()->hasRole('student')){
            return view('Dashboard/studentDashboard');
        }else if(Auth::user()->hasRole('lecturer')){
            return view('Dashboard/lecturerDashboard');
        }else if(Auth::user()->hasRole('committee')){
            return view('Dashboard/committeeDashboard');
        }else if(Auth::user()->hasRole('coordinator')){
            return view('Dashboard/coordinatorDashboard');
        }else if(Auth::user()->hasRole('dean')){
            return view('Dashboard/deanDashboard');
        }else if(Auth::user()->hasRole('hosd')){
            return view('Dashboard/hosdDashboard');
        }
    }

    
}
