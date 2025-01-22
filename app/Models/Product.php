<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi massal
    protected $fillable = [
        'name',
        'description',
        'slug',
        'price',
        'image',
        'link',
    ];
}
