<?php

use App\Models\Annee;
use App\Models\Category;
use App\Models\Formation;
use App\Models\Session;

function prepareCategory($label, $picture){
    $category = new Category();
    $category->label = $label;
    $category->picture = $picture;

    return $category;
}
function prepareSession($label, $dateDebut, $dateFin){
    $session = new Session();
    $session->label = $label;
    $session->dateDebut = $dateDebut;
    $session->dateFin = $dateFin;

    return $session;
}
function prepareAnnee($label){
    $Annee = new Annee();
    $Annee->label = $label;

    return $Annee;
}
function getYears($date) {
    $dateInfo = date_parse($date);

    if ($dateInfo['year']) {
        return $dateInfo['year'];
    } else {
        return false; // La date est invalide
    }
}
function prepareFormation($label, $date, $picture, $duration, $content, $time, $city, $category, $price){
    //$category = Category::where('id', $category)->first();
    //$idCategory = $category->id;
    $formation = new Formation();
    $formation->label = $label;
    $formation->date = $date;
    $formation->picture = $picture;
    $formation->duration = $duration;
    $formation->content = $content;
    $formation->time = $time;
    $formation->city = $city;
    $formation->category = $category;
    $formation->price = $price;

    return $formation;
}

//formationImage
function imagePath()
{
    $data['formation'] = [
        'path' => 'images/admin/formation',
        'size' => '992x740'
    ];

    return $data;
}

function getUrlImage($image, $url): string
{
    $destinationPath = public_path($url);
    $file = $image;
    //$filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '_' . uniqid() . '.' . $extension;
    $file->move($destinationPath, $filename);
    $filePath = $url.'/'.$filename;

    return $filePath;
}

//actulitéImage
function imagePaths()
{
    $data['actualite'] = [
        'path' => 'images/admin/actualite',
        'size' => '992x740'
    ];

    return $data;
}
function getUrlImages($image, $url): string
{
    $destinationPath = public_path($url);
    $file = $image;
    //$filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '_' . uniqid() . '.' . $extension;
    $file->move($destinationPath, $filename);
    $filePath = $url.'/'.$filename;

    return $filePath;
}

//teamImage
function imagePathTeam()
{
    $data['team'] = [
        'path' => 'images/admin/team',
        'size' => '992x740'
    ];

    return $data;
}

function getUrlImageTeam($image, $url): string
{
    $destinationPath = public_path($url);
    $file = $image;
    //$filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '_' . uniqid() . '.' . $extension;
    $file->move($destinationPath, $filename);
    $filePath = $url.'/'.$filename;

    return $filePath;
}
//categoryImage
function imagePathCategory()
{
    $data['category'] = [
        'path' => 'images/admin/category',
        'size' => '992x740'
    ];

    return $data;
}

function getUrlImageCategory($image, $url): string
{
    $destinationPath = public_path($url);
    $file = $image;

    // Utilisez plutôt la méthode getClientOriginalExtension pour obtenir l'extension du fichier
    $extension = $file->getClientOriginalExtension();

    // Générez un nom de fichier unique basé sur le timestamp et un identifiant unique
    $filename = time() . '_' . uniqid() . '.' . $extension;

    // Déplacez le fichier vers le dossier de destination avec le nouveau nom de fichier
    $file->move($destinationPath, $filename);

    // Construisez le chemin complet du fichier
    $filePath = $url . '/' . $filename;

    return $filePath;
}
