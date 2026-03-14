<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TechArea extends Model
{
    public function techs(): BelongsToMany
    {
        return $this->belongsToMany(Tech::class, 'tech_area')
            ->as('tech');
    }
}
