<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Movie extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['name', 'slug', 'category', 'video_url', 'thumbnail', 'rating', 'is_feature'];
}