<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'name',
        'content',
        'parent_id',
        'is_approved',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }
}
