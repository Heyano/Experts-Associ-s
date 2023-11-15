<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //
    public function Management(){
        return view('feature.pages.formation-pages.management');
    }
}
