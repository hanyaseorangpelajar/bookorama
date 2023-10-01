<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'isbn',
        'title',
        'author',
        'price',
        'categoryid'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryid', 'categoryid');
    }
}
