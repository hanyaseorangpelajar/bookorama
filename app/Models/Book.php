<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Book
{
    private static $books = [
        [
            "title" => "Jawir",
            "slug" => 'jawir',
            "author" => "Mas Rusdi",
            "synopsis" => "Djawir adalah koentji"
        ],
        [
            "title" => "Sir",
            'slug' => 'sir',
            "author" => "Mas Kudis",
            "synopsis" => "Sir adalah koentji"
        ]
    ];

    public static function all()
    {
        return collect(self::$books);
    }

    public static function find($slug)
    {
        $books = static::all();
        // $book = [];
        // foreach ($books as $b) {
        //     if ($b['slug'] === $slug) {
        //         $book = $b;
        //     }
        // }
        // return $book;
        return $books->firstWhere('slug', $slug);
    }
}
