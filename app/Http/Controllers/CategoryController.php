<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index() {
        return view('categories', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Kategori",
            "categories" => Category::all()
        ]);
    }
    public function contents(Category $category){
        return view('category', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Kategori",
            "articles" => $category->articles,
            "category" => $category->name
            //"category" => $category,
        ]);
    }
}
