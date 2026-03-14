<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TechType extends Model
{
    public function techs(): BelongsToMany
    {
        return $this->belongsToMany(Tech::class, 'tech_type')
            ->as('tech');
    }
}
