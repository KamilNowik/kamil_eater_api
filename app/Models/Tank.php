<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tank extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function crewMembers(): HasMany
    {
        return $this->hasMany(CrewMember::class);
    }
}
