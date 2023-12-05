<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function Faq(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.faq', compact('newsLetters'));
    }

}
