<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('authors', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "author" => User::latest()->get()
        ]);
    }

    public function contents(User $author){
        return view('author', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Penulis",
            "author" => $author->name,
            "articles" => $author->articles 
        ]);
    }
}
