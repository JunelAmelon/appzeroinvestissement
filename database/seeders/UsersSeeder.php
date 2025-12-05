<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        // Créer un utilisateur admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@appzeroinvestissement.com',
            'password' => Hash::make('admin@123'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Créer des utilisateurs clients
        User::create([
            'name' => 'Jean Dupont',
            'email' => 'jean.dupont@example.com',
            'password' => Hash::make('password'),
            'role' => 'client',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Marie Martin',
            'email' => 'marie.martin@example.com',
            'password' => Hash::make('password'),
            'role' => 'client',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Pierre Bernard',
            'email' => 'pierre.bernard@example.com',
            'password' => Hash::make('password'),
            'role' => 'client',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Sophie Dubois',
            'email' => 'sophie.dubois@example.com',
            'password' => Hash::make('password'),
            'role' => 'client',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Luc Moreau',
            'email' => 'luc.moreau@example.com',
            'password' => Hash::make('password'),
            'role' => 'client',
            'email_verified_at' => now(),
        ]);

        $this->command->info('✅ 6 utilisateurs créés (1 admin + 5 clients)');
    }
}
