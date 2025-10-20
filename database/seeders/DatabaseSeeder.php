<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory()->create([
            'name'          => 'User'
        ]);

        Role::factory()->create([
            'name'          => 'Admin'
        ]);

        User::factory()->create([
            'firstname'     => 'User',
            'lastname'      => 'User',
            'email'         => 'user@example.com',
            'username'      => 'user',
            'password'      => 'Abcd1234#',
            'role_id'       => 1
        ]);

        User::factory()->create([
            'firstname'     => 'Admin',
            'lastname'      => 'Admin',
            'email'         => 'admin@example.com',
            'username'      => 'admin',
            'password'      => 'Abcd1234#',
            'role_id'       => 2
        ]);
    }
}
