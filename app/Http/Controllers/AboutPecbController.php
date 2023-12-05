<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class AboutPecbController extends Controller
{
    //
    public function AboutPecb(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.about-pecb', compact('newsLetters'));
    }

}
