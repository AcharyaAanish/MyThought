<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takeme extends Model
{
    use HasFactory;

    protected $table = 'takemes';

    protected $fillable = [
        'product_name',
        'product_cost',
        'product_discount',
        'image_takeme'
    ];
}
