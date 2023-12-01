<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class AdminActualiteController extends Controller
{
    public function Actualite(){
        $actualites = Actualite::all();
        return view('admin.pages.actualité.index', compact('actualites'));
    }
    public function view(Request $request){
        $id = $request->id;
        $actualite = Actualite::findOrFail($id);
        return view('admin.pages.actualité.view', compact('actualite'));
    }

    public function edit(){
        return view('admin.pages.actualité.create');
    }

    public function create(Request $request){

        //on declare les champs qui sont dans le html
        $request->validate([
            'label' => 'required',
            'date'=> 'required',
            'content'=>'nullable',
            'picture'=> 'nullable',
            'city'=> 'nullable',
        ]);

        //on affecte les champs du html dans le model
        $actualite = new Actualite();
        $actualite->label = $request->label;
        $actualite->date = $request->date;

        //register picture formation
        if($request->hasFile('picture')){
            try{
                $path = imagePath()['actualite']['path'];
                $filename = getUrlImage($request->picture, $path);
                $actualite->picture = $filename;
            }catch (\Exception $e) {
                return back();
            }
        }

        $actualite->content = $request->input('content');
        $actualite->city = $request->city;
        $actualite->save();

        //$data = prepareFormation($request->label, $request->date, $picture, $request->duration, $request->input('content'), $request->time, $request->city, $request->category, $request->price);
        //$data->save();

        return redirect('admin-actualite/edit')->with('status', 'L\'enregistrement a bien  été effectué ');

    }

    public function update_actualite($id){
        $actualite = Actualite::find($id);
        return view('admin.pages.actualité.update', compact('actualite'));
    }

    public function validate_actualite(Request $request){
        $request->validate([
            'label' => 'required',
            'date'=> 'required',
            'content'=>'nullable',
            'picture'=> 'nullable',
            'city'=> 'nullable',

        ]);

        $actualite = Actualite::findOrFail($request->id);
        $actualite->label = $request->label;
        $actualite->picture = $request->picture;
        $actualite->date = $request->date;
        $actualite->content = $request->input('content');
        $actualite->city = $request->city;
        $actualite->update();
        return redirect('admin-actualite')->with('status', 'La modification a bien été effectuée');
    }

    public function delete_actualite($id){
        $actualite = Actualite::find($id);
        $actualite->delete();
        return redirect('admin-actualite')->with('status', 'L\'actualité a bien été supprimée');
    }

}
