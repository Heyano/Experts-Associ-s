<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\newsLetter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function Contact(){
        $newsLetters = NewsLetter::all();
        return view('feature.pages.contact', compact('newsLetters'));
    }
    //create ou post
    public function newsLetter(Request $request){
        //on declare les champs qui sont dans le html
        $request->validate([
            'email'=> 'required',
        ]);
        //on affecte les champs du html dans le model
        $newsLetter = new NewsLetter();
        $newsLetter->email = $request->email;

        $newsLetter->save();
        return redirect('/index')->with('status', 'Votre souscription a été soumi avec succes.');
    }


    public function contact_form(Request $request){
        //on declare les champs qui sont dans le html
        $request->validate([
            'name'=> 'nullable',
            'phone'=> 'required',
            'email'=> 'nullable',
            'message'=> 'nullable',
        ]);

        //on affecte les champs du html dans le model
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;


        $contact->save();
        return redirect('/index')->with('status', 'Votre requête a été soumi avec succes.');
    }
}
