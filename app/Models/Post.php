<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected $appends = ['image'];

    public function getImageAttribute(): ?string
    {
        return $this->cover_image;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
