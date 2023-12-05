<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class BusnessSceanceController extends Controller
{
    //
    public function BusnessSceance(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.busnessSceance', compact('newsLetters'));
    }

}
