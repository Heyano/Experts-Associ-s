<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //
    public function Management(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.formation-pages.management', compact('newsLetters'));
    }


}
