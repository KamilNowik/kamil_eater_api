<?php

namespace App\Http\Controllers;

use App\Models\CrewMember;
use App\Models\Tank;
use App\Services\WgApiService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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
            $tank->image_link = $vehicle['images']['big_icon'];
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

    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function edit(Request $request): Factory|View|Application
    {
        if ($request->selected) {
            $selectedTank = Tank::where('id', $request->selected)->first()->load('crewMembers');
        } else {
            $selectedTank = false;
        }

        return view('welcome')
            ->with('tanks', Tank::orderBy('name')->get())
            ->with('selectedTank', $selectedTank)
            ->with('skills', CrewMember::SKILLS);
    }
}
