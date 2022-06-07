<?php

namespace App\Http\Controllers;

use App\Models\TankCrewMember;
use App\Models\Tank;
use App\Services\WgApiService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class TankController extends Controller
{
    public function wgUpdate(){
        $p= 1;
        Artisan::call('wg:update');
        $q = 2;
    }

    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function edit(Request $request): Factory|View|Application
    {
        if ($request->selected) {
            $selectedTank = Tank::where('wg_id', $request->selected)->first()->load('crewMembers.crewSkills');
        } else {
            $selectedTank = false;
        }

        return view('welcome')
            ->with('tanks', Tank::orderBy('name')->get())
            ->with('selectedTank', $selectedTank);
    }

    /**
     * @return JsonResponse
     */
    public function getTanks(): JsonResponse
    {
        $tanks = DB::table('tanks')->paginate(18);

        return response()->json($tanks);
    }
}
