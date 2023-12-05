<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\NewsLetter;
use App\Models\Subscription;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function About(){
        $subscriptions = Subscription::all();
        $countSubscription = sizeof($subscriptions);
        $formations = Formation::all();
        $countFormation = sizeof($formations);
        $teams = Team::all();
        $newsLetters = NewsLetter::all();
        return view('feature.pages.about',compact('formations','countFormation','subscriptions','countSubscription','teams','newsLetters'));
    }

}
