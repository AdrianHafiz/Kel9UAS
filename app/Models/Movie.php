<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'director',
        'writers',
        'stars',
        'image_url',
    ];

    // Relationship to ratings
    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }
}
