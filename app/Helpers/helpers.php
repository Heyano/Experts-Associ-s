<?php

use App\Models\Category;
use App\Models\Formation;

function prepareCategory($label){
    $category = new Category();
    $category->label = $label;

    return $category;
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

