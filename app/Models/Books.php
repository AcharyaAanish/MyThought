<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
       'title_books',
        'rating_books',
        'type_books',
        'image_books',
        'description_books',
        'publish_date',
        'author_name',
        'writer_name'
    ];

}
