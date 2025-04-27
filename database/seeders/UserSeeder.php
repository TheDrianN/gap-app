<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Empresa Uno',
                'email' => 'empresa1@example.com',
                'password' => 'password1',
                'role' => 'empresa',
                'country' => 'Perú',
                'sector' => 'Tecnología',
            ],
            [
                'name' => 'Empresa Dos',
                'email' => 'empresa2@example.com',
                'password' => 'password2',
                'role' => 'empresa',
                'country' => 'México',
                'sector' => 'Educación',
            ],
            [
                'name' => 'Freelancer Uno',
                'email' => 'freelancer1@example.com',
                'password' => 'password3',
                'role' => 'freelancer',
                'country' => 'Argentina',
                'sector' => 'Diseño',
            ],
            [
                'name' => 'Freelancer Dos',
                'email' => 'freelancer2@example.com',
                'password' => 'password4',
                'role' => 'freelancer',
                'country' => 'Chile',
                'sector' => 'Programación',
            ],
            [
                'name' => 'Empresa Tres',
                'email' => 'empresa3@example.com',
                'password' => 'password5',
                'role' => 'empresa',
                'country' => 'Colombia',
                'sector' => 'Construcción',
            ],
            [
                'name' => 'Freelancer Tres',
                'email' => 'freelancer3@example.com',
                'password' => 'password6',
                'role' => 'freelancer',
                'country' => 'Uruguay',
                'sector' => 'Marketing',
            ],
            [
                'name' => 'Empresa Cuatro',
                'email' => 'empresa4@example.com',
                'password' => 'password7',
                'role' => 'empresa',
                'country' => 'Ecuador',
                'sector' => 'Finanzas',
            ],
            [
                'name' => 'Freelancer Cuatro',
                'email' => 'freelancer4@example.com',
                'password' => 'password8',
                'role' => 'freelancer',
                'country' => 'Paraguay',
                'sector' => 'Redacción',
            ],
            [
                'name' => 'Empresa Cinco',
                'email' => 'empresa5@example.com',
                'password' => 'password9',
                'role' => 'empresa',
                'country' => 'Bolivia',
                'sector' => 'Salud',
            ],
            [
                'name' => 'Freelancer Cinco',
                'email' => 'freelancer5@example.com',
                'password' => 'password10',
                'role' => 'freelancer',
                'country' => 'España',
                'sector' => 'Traducción',
            ],
        ];

        foreach ($users as $userData) {
            User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make($userData['password']), // Hash seguro
                'role' => $userData['role'],
                'verified' => true,
                'country' => $userData['country'],
                'sector' => $userData['sector'],
                'bio' => 'Perfil de ' . $userData['name'],
            ]);
        }
    }
}
