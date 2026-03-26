<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function dashboard(){
        return view('index');
    }
    public function slider(){
        return view('view-table.home.slider');
    }
    public function service(){
        return view('view-table.home.service');
    }
    public function history(){
        return view('view-table.profile.history');
    }
    public function visimisi(){
        return view('view-table.profile.visimisi');
    }
    public function profile(){
        return view('view-table.profile.profile');
    }
    public function structre(){
        return view('view-table.profile.structure');
    }
    public function condition(){
        return view('view-table.membership.condition');
    }
    public function benefit(){
        return view('view-table.membership.benefit');
    }
    public function serviceview(){
        return view('view-table.service-view.index');
    }
}
