<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {

    public static function all() {
        return [
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
    }

    public static function find($slug) : array {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] === $slug);

        if(!$post) {
            abort(404);
        }

        return $post;
    }
}   