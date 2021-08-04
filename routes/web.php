<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('home', [
        "title" => "home"
    ]);    
});

Route::get('/about', function () {    
    return view('about', [
        "title" => "about",
        "name" => "Eko",
        "email" => "eko@gmail.com",
        "image" => "sample1.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//single post
Route::get('blog/{post:slug}', [PostController::class, 'show']);