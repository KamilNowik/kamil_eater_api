<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tank extends Model
{
    use HasFactory;

    /**
     * @return belongsToMany
     */
    public function crewMembers(): belongsToMany
    {
        return $this->belongsToMany(
            CrewMember::class,
            'tank_crew_members',
            'tank_wg_id',
            'crew_member_role',
            'wg_id',
            'role');
    }
}
