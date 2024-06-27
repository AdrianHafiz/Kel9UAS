<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'movie_id',
        'rating',
        'review',
    ];

    // Relationship to movie
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
