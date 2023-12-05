<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function News(){
        $actualites= Actualite::All();
        $newsLetters = NewsLetter::all();
        return view('feature.pages.news', compact('actualites','newsLetters'));
    }


}
