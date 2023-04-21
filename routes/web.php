<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        'active' => 'about',
    ]);
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});


Route::get('/category/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category: $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By author: $author->name",
        'active' => 'post',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
