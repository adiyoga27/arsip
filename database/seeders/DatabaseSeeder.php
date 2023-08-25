<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::create([
            'name' => "Guest",
            'is_active' => true,
            'description' => "Guest Access Archive Page"
        ]);
        $role = Role::create([
            'name' => "Administrator",
            'is_active' => true,
            'description' => "Full Access Archive Page"
        ]);

        \App\Models\User::factory()->create([
            'role_id' => $role->id,
            'name' => 'Test User',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password')
        ]);

     
    }
}
