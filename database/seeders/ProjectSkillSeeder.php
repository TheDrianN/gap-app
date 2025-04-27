<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class ProjectSkillSeeder extends Seeder
{
    public function run()
    {
        $projects = Project::all();
        $skills = Skill::pluck('id')->toArray();

        foreach ($projects as $project) {
            $assignedSkills = array_rand($skills, rand(1, 3));
            foreach ((array) $assignedSkills as $skillId) {
                $project->skills()->attach($skills[$skillId]);
            }
        }
    }
}
