<?php

namespace App\Console\Commands;

use App\Models\CrewMember;
use App\Models\CrewSkill;
use App\Models\Tank;
use App\Models\TankCrewMember;
use App\Services\WgApiService;
use Illuminate\Console\Command;

class UpdateDataFromWg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wg:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update data from wg api';

    /**
     * Execute the console command.
     *
     * @param WgApiService $service
     * @return void
     */
    public function handle(WgApiService $service): void
    {
//        $tanksData = $service->getTanks();
//        $crewMembersData = $service->getCrewMembers();
        $crewSkillsData = $service->getCrewSkills();

//        Tank::truncate();
//        TankCrewMember::truncate();
//        CrewMember::truncate();
CrewSkill::truncate();

//        foreach ($tanksData as $vehicle) {
//            $tank = new Tank();
//            $tank->wg_id = $vehicle['tank_id'];
//            $tank->name = $vehicle['name'];
//            $tank->image_link = $vehicle['images']['big_icon'];
//            $tank->save();
//
//            foreach ($vehicle['crew'] as $member) {
//                $crewMember = new TankCrewMember();
//                $crewMember->tank_wg_id = $tank->wg_id;
//                $crewMember->crew_member_role = $member['member_id'];
//                $crewMember->save();
//            }
//        }

//        foreach ($crewMembersData as $crewMemberData){
//            $cm = new CrewMember();
//            $cm->role = $crewMemberData['role'];
//            $cm->name = $crewMemberData['name'];
//            $cm->skills = json_encode($crewMemberData['skills']);
//            $cm->save();
//        }

        foreach($crewSkillsData as $crewSkillData){
            $cs = new CrewSkill();
            $cs->skill = $crewSkillData['skill'];
            $cs->name = $crewSkillData['name'];
            $cs->description = $crewSkillData['description'];
            $cs->is_perk = $crewSkillData['is_perk'];
            $cs->image_link = $crewSkillData['image_url']['big_icon'];
            $cs->save();
        }
    }
}
