<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tech extends Model
{
    protected $casts = [
        'open_source' => 'boolean',
        'release_date' => 'date',
    ];

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(TechType::class, 'tech_type')
            ->as('type');
    }

    public function areas(): BelongsToMany
    {
        return $this->belongsToMany(TechArea::class, 'tech_area')
            ->as('area');
    }
}
