<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "title" => "home",
        "active" => 'home'
    ]);    
});

Route::get('/about', function () {    
    return view('about', [
        "title" => "about",
        "active" => 'about',
        "name" => "Eko",
        "email" => "eko@gmail.com",
        "image" => "sample1.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//single post
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories',[
        'title'=>'Post Categories',
        "active" => 'categories',
        'categories'=>Category::all(),
    ]);
    
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


// Route::get('/categories/{category:slug}', function(Category $category){ //sudah tak terpakai
//     return view('posts',[
//         'title'=>"Post by Category : $category->name",
//         "active" => 'categories',
//         'posts'=>$category->posts->load('category', 'author')     
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author){ //sudah gak terpakai
//     return view('posts',[
//         'title'=> "Post by Author : $author->name",
//         'active' => 'blog',
//         'posts'=>$author->posts->load('category', 'author'),
        
//     ]);
// });
