<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rating;
use App\Models\Project;
use App\Models\User;

class RatingSeeder extends Seeder
{
    public function run()
    {
        $projects = Project::pluck('id')->toArray();
        $freelancers = User::where('role', 'freelancer')->pluck('id')->toArray();

        foreach (range(1, 10) as $i) {
            Rating::create([
                'project_id' => $projects[array_rand($projects)],
                'freelancer_id' => $freelancers[array_rand($freelancers)],
                'rating' => rand(1, 5),
                'comment' => 'Comentario del rating ' . $i,
            ]);
        }
    }
}
