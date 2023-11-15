<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function Faq(){
        return view('feature.pages.faq');
    }
}
