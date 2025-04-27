<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Verification;
use App\Models\User;

class VerificationSeeder extends Seeder
{
    public function run()
    {
        $users = User::pluck('id')->toArray();

        foreach ($users as $userId) {
            Verification::create([
                'user_id' => $userId,
                'document_path' => 'documentos/' . $userId . '.pdf',
                'status' => 'pendiente',
            ]);
        }
    }
}
