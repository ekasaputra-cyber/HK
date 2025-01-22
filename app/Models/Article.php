<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // Add the fillable property to allow mass assignment
    protected $fillable = [
        'title',      // Add 'title' to the fillable array
        'slug',
        'content',    // Add 'content' to the fillable array
        'image',      // Add 'image' to the fillable array
    ];
}
