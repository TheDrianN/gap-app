<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        $skills = ['PHP', 'Laravel', 'Vue.js', 'React', 'Node.js', 'Python', 'Django', 'SQL', 'HTML', 'CSS'];

        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }
    }
}
