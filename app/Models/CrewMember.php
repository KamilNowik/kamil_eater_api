<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrewMember extends Model
{
    protected $table = 'crew_members';

    const SKILLS = [
        'commander' => [
            "repair",
            "fireFighting",
            "camouflage",
            "brotherhood",
            "commander_tutor",
            "commander_eagleEye",
            "commander_sixthSense",
            "commander_expert",
            "commander_universalist",
            "commander_enemyShotPredictor"
        ],
        'radioman' => [
            "repair",
            "fireFighting",
            "camouflage",
            "brotherhood",
            "radioman_inventor",
            "radioman_finder",
            "radioman_retransmitter",
            "radioman_lastEffort"
        ],
        'driver' => [
            "repair",
            "fireFighting",
            "camouflage",
            "brotherhood",
            "driver_virtuoso",
            "driver_smoothDriving",
            "driver_badRoadsKing",
            "driver_rammingMaster",
            "driver_tidyPerson"
        ],
        'gunner' => [
            "repair",
            "fireFighting",
            "camouflage",
            "brotherhood",
            "gunner_gunsmith",
            "gunner_sniper",
            "gunner_smoothTurret",
            "gunner_rancorous"
        ],
        'loader' => [
            "repair",
            "fireFighting",
            "camouflage",
            "brotherhood",
            "loader_pedant",
            "loader_desperado",
            "loader_intuition"
        ]
    ];

    use HasFactory;
}
