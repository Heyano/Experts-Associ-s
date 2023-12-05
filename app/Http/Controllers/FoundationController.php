<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class FoundationController extends Controller
{
    //
    public function Foundation(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.formation-pages.foundation', compact('newsLetters'));
    }

}
