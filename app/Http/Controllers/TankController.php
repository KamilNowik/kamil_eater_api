<?php

namespace App\Http\Controllers;

use App\Models\CrewMember;
use App\Models\Tank;
use App\Services\WgApiService;
use Illuminate\Http\Request;

class TankController extends Controller
{
    /**
     * @param WgApiService $service
     * @return string
     */
    public function index(WgApiService $service): string
    {
        $data = $service->getTanks();

        foreach ($data as $vehicle) {
            $tank = new Tank();
            $tank->name = $vehicle['name'];
            $tank->wg_id = $vehicle['tank_id'];
            $tank->save();

            foreach ($vehicle['crew'] as $member) {
                $crewMember = new CrewMember();
                $crewMember->tank_id = $tank->id;
                $crewMember->role_name = $member['member_id'];
                $crewMember->save();
            }
        }

        return 'hehe';
    }

    public function edit(Request $request)
    {
       return view('welcome');
    }
}
