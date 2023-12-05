<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\Contact;
use App\Models\Subscription;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function Team(){
        $teams = Team::all();
        $contacts = Contact::all();
        $countContact = sizeof($contacts);
        $subscriptions = Subscription::all();
        $countSubscription = sizeof($subscriptions);
        return view('admin.pages.team.index', compact('teams','contacts','countContact','subscriptions','countSubscription'));
    }
    public function view(Request $request){
        $id = $request->id;
        $team = Team::findOrFail($id);
        $contacts = Contact::all();
        $countContact = sizeof($contacts);
        $subscriptions = Subscription::all();
        $countSubscription = sizeof($subscriptions);
        return view('admin.pages.team.view', compact('team','contacts','countContact','subscriptions','countSubscription'));
    }

    public function edit(){
        $contacts = Contact::all();
        $countContact = sizeof($contacts);
        $subscriptions = Subscription::all();
        $countSubscription = sizeof($subscriptions);
        return view('admin.pages.team.create', compact('contacts','countContact','subscriptions','countSubscription'));
    }

    public function create(Request $request){

        //on declare les champs qui sont dans le html
        $request->validate([
            'name' => 'required',
            'date'=> 'required',
            'firstname'=>'nullable',
            'picture'=> 'nullable',
            'post'=> 'nullable',
        ]);

        //on affecte les champs du html dans le model
        $team = new Team();
        $team->name = $request->name;
        $team->date = $request->format('d-m-Y');

        //register picture formation
        if($request->hasFile('picture')){
            try{
                $path = imagePathTeam()['team']['path'];
                $filename = getUrlImageTeam($request->picture, $path);
                $team->picture = $filename;
            }catch (\Exception $e) {
                return back();
            }
        }

        $team->firstname = $request->firstname;
        $team->post = $request->post;
        $team->save();

        //$data = prepareFormation($request->label, $request->date, $picture, $request->duration, $request->input('content'), $request->time, $request->city, $request->category, $request->price);
        //$data->save();

        return redirect('admin-team/edit')->with('status', 'L\'enregistrement a bien  été effectué ');

    }

    public function update_team($id){
        $team = Team::find($id);
        $contacts = Contact::all();
        $countContact = sizeof($contacts);
        $subscriptions = Subscription::all();
        $countSubscription = sizeof($subscriptions);
        return view('admin.pages.team.update', compact('team','contacts','countContact','subscriptions','countSubscription'));
    }

    public function validate_team(Request $request){
        $request->validate([
            'name' => 'required',
            'date'=> 'required',
            'firstname'=>'nullable',
            'picture'=> 'nullable',
            'post'=> 'nullable',

        ]);

        $team = Actualite::findOrFail($request->id);
        $team->name = $request->name;
        $team->picture = $request->picture;
        $team->date = $request->format('d-m-Y');
        $team->firstname = $request->firstname;
        $team->post = $request->post;
        $team->update();
        return redirect('admin-team')->with('status', 'La modification a bien été effectuée');
    }

    public function delete_team($id){
        $team = Team::find($id);
        $team->delete();
        return redirect('admin-team')->with('status', 'Le membre a bien été supprimée');
    }

}
