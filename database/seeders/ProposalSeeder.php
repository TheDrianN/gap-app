<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proposal;
use App\Models\Project;
use App\Models\User;

class ProposalSeeder extends Seeder
{
    public function run()
    {
        $freelancers = User::where('role', 'freelancer')->pluck('id')->toArray();
        $projects = Project::pluck('id')->toArray();

        foreach (range(1, 20) as $i) {
            Proposal::create([
                'project_id' => $projects[array_rand($projects)],
                'freelancer_id' => $freelancers[array_rand($freelancers)],
                'price' => rand(100, 1000),
                'duration_days' => rand(5, 30),
                'message' => 'Propuesta número ' . $i,
                'status' => 'enviada',
            ]);
        }
    }
}
