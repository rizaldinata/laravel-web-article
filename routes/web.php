<?php

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
        'title' => 'Blog Page', 'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Rizal Dinata',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quod illo?
            Commodi ipsam hic, ad atque
            debitis earum omnis doloribus repellendus ipsum voluptatem nulla reiciendis sequi corporis blanditiis
            obcaecati facilis.'
            ], 
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Rizal Dinata',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est suscipit fugiat earum
            laboriosam, nesciunt, laudantium quam neque cumque odio blanditiis esse deleniti voluptate tempora, sapiente
            nemo. Aperiam officiis illum dolor.'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Rizal Dinata',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quod illo?
        Commodi ipsam hic, ad atque
        debitis earum omnis doloribus repellendus ipsum voluptatem nulla reiciendis sequi corporis blanditiis
        obcaecati facilis.'
        ], 
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rizal Dinata',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est suscipit fugiat earum
        laboriosam, nesciunt, laudantium quam neque cumque odio blanditiis esse deleniti voluptate tempora, sapiente
        nemo. Aperiam officiis illum dolor.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'single post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page'
    ]);
});