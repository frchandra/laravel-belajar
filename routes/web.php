<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
