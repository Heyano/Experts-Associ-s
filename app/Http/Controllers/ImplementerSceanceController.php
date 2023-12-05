<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class ImplementerSceanceController extends Controller
{
    //
    public function ImplementerSceance(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.implementerSceance', compact('newsLetters'));
    }

}
