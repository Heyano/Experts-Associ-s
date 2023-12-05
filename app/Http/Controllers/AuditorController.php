<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class AuditorController extends Controller
{
    //
    public function Auditor(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.formation-pages.auditor', compact('newsLetters'));
    }

}
