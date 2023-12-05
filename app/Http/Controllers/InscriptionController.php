<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    //
    public function Inscription(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.inscription', compact('newsLetters'));
    }


}
