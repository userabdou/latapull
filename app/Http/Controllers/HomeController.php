<?php

namespace App\Http\Controllers;

use App\Models\Agrement;
use App\Models\Alert;
use App\Models\Designation;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $alerts = Alert::all();
        $ags = Agrement::all();
        return view('home',compact('alerts','ags'));
    }
}
