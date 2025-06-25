<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert a user admin
        DB::table('users')->insert([
            'name' => 'Usuário Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('232425'), // Use a secure password
            'address' => '123 Admin St',
            'phone_number' => '123-456-7890',
            'is_active' => 1,
            'is_admin' => 1, // Set as admin
            'profile_picture' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call(UserSeeder::class);
    }

}
