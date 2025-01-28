<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page',
        'nama' => 'Rizal Risqi Ahmad Dinata'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts Page',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'single post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Category ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page'
    ]);
});