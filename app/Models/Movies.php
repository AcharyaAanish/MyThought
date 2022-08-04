<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = [
        'title_movies',
        'rating_movies',
        'type_movies',
        'image_movies',
        'description_movies',
        'release_date',
        'author_name',
        'director_name',
        'cast_name'
    ];
}
