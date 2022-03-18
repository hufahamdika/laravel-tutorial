<?php

namespace App\Models;
use App\Http\Controllers\ArticleController;

class Article 
{
    private static $articles = [
        [
            "title" => "Ukraine vs Russia",
            "slug" => "ukraine-rusia",
            "author" => "Russia Today",
            "body" => "Russia side - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, ducimus. Odit maxime sint sunt mollitia totam pariatur natus autem, voluptatum itaque, reiciendis a quidem nulla est ducimus magni saepe libero."
        ],
        [
            "title" => "Omicron di Indonesia",
            "slug" => "omicron-di-indonesia",
            "author" => "Pemuda Pancasila Bogor",
            "body" => "Omicron - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, ducimus. Odit maxime sint sunt mollitia totam pariatur natus autem, voluptatum itaque, reiciendis a quidem nulla est ducimus magni saepe libero."
        ]
    ]; 

    public static function all(){
        return collect(self::$articles);
    }

    public static function find($slug){
        $articles = static::all();
       
        return $articles->firstwhere('slug', $slug);
    }
}
