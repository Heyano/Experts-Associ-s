<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class ManagerSceanceController extends Controller
{
    //
    public function ManagerSceance(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.managerSceance', compact('newsLetters'));
    }


}
