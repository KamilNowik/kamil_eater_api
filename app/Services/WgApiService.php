<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WgApiService
{
    /**
     * @return array
     */
    public function getTanks(): array
    {
        $path = 'https://api.worldoftanks.eu/wot/encyclopedia/vehicles/?tier=8%2C9%2C10&application_id=afdb5bc768d55634a30097ace6abb17d&fields=name%2C+tank_id%2C+crew.member_id%2C+images.big_icon';

        $response = Http::get($path);

        return $response->json()['data'];
    }

    public function getCrewMembers()
    {
        $path = 'https://api.worldoftanks.eu/wot/encyclopedia/crewroles/?application_id=afdb5bc768d55634a30097ace6abb17d&language=pl';

        $response = Http::get($path);

        return $response->json()['data'];
    }

    public function getCrewSkills(){
        $path = 'https://api.worldoftanks.eu/wot/encyclopedia/crewskills/?application_id=afdb5bc768d55634a30097ace6abb17d&language=pl';

        $response = Http::get($path);

        return $response->json()['data'];

    }
}
