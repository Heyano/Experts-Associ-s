<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //
    public function Business(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.formation-pages.business', compact('newsLetters'));
    }

}
