<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CrewMember extends Model
{
    use HasFactory;

    /**
     * @return belongsToMany
     */
    public function crewSkills(): belongsToMany
    {
        return $this->belongsToMany(
            CrewSkill::class,
            'crew_member_skills',
            'crew_member_role',
            'crew_skill_name',
            'role',
            'skill');
    }
}
