<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'tech_stack' => 'array',
        'is_highlighted' => 'boolean',
    ];

    protected $appends = ['technologies'];

    public function getTechnologiesAttribute(): array
    {
        return $this->tech_stack ?? [];
    }
}
