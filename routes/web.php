<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', function () {
    return view('welcome-pegawai');
});

Route::redirect("/employee", "/pegawai");
Route::view("/pegawai", "welcome-pegawai");

Route::get("/pegawai/{id}", function ($id) {
    return "Pegawai dengan id: " . $id . ".";
});

Route::get("/pegawai/{id}", function ($id) {
    return "Pegawai dengan id: " . $id . ".";
})->where('id', '[0-9]+');

Route::get("/pegawai/{id}", function ($id) {
    return "Pegawai dengan id: " . $id . ".";
})->whereNumber('id');

Route::get("/pegawai/{id}/city/{city}", function ($id, $city) {
    return "Pegawai dengan id: " . $id . ", dengan kota: " . $city . ".";
})->whereNumber('id')->whereAlpha('city');

Route::prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
    Route::get("/name/{name}", function ($name) {
        return "Pegawai dengan name: " . $name . ".";
    })->whereAlpha('name');
});

Route::middleware('/date')->prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
});

Route::get("/view", function () {
    return "Warga Laravel.";
})->name("view");

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name(('proses-form-guest'));

Route::get('/basic', function(){
    return 'Hallo ngab, coba basic';
});

Route::get('/header', function(){
    return response('Hallo', 200)->header('Content-Type','text/html');
});

Route::get('/header-cookie', function(){
    return response('Hallo', 200)
    ->header('Content-Type','text/html')
    ->withcookie('name','Fitrah Arie');
});

Route::get('/json', function(){
    return response()->json([
        'Nama1' => 'Hufa',
        'Nama2' => 'Hamdika'
    ]);
});

Route::get('/cookie', function () {
    $content = 'Hello World';
    $type = 'text/plain';
    $minutes = 1;
    return response($content)
                ->header('Content-Type', $type)
                ->cookie('name', 'value', $minutes);
});

Route::get('/dashboard',function(){
    return redirect('/');
});

Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article:slug}', [ArticleController::class, 'contents']);

Route::get('categories/', [CategoryController::class, 'index']);
Route::get('categories/{category:slug}', [CategoryController::class, 'contents']);

//Route::get('categories/', [CategoryController::class, 'index']);
Route::get('authors/{author:username}', [UserController::class, 'contents']);