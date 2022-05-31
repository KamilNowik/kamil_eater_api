<?php

namespace App\Http\Controllers;

use App\Models\TankCrewMember;
use App\Models\Tank;
use App\Services\WgApiService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TankController extends Controller
{
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
            ->with('skills', TankCrewMember::SKILLS);
    }
}
