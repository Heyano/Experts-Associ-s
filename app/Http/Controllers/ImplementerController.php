<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class ImplementerController extends Controller
{
    //
    public function Implementer(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.formation-pages.implementer', compact('newsLetters'));
    }

}
