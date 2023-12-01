<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function News(){
        $actualites= Actualite::All();
        return view('feature.pages.news', compact('actualites'));
    }
}
