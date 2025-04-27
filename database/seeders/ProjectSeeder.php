<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $companies = User::where('role', 'empresa')->pluck('id')->toArray();

        foreach (range(1, 10) as $i) {
            Project::create([
                'company_id' => $companies[array_rand($companies)],
                'title' => 'Proyecto ' . $i,
                'description' => 'Descripción del proyecto ' . $i,
                'budget_min' => rand(500, 1000),
                'budget_max' => rand(1500, 3000),
                'deadline' => now()->addDays(rand(10, 90)),
                'status' => 'activo',
            ]);
        }
    }
}
