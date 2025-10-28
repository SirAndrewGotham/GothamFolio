<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'admin',
            //            'slug' => 'admin',
            //            'username' => 'Administrator',
            //            'avatar_url' => 'https://api.dicebear.com/6.x/avataaars/svg?seed=Admin',
            'password' => Hash::make('password'),
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]); // Assign role_id 1 to the admin user

        $totalUsers = 50;

        $this->command->getOutput()->progressStart($totalUsers);

        User::factory()->count($totalUsers)->make()->each(function ($user) {
            $user->save();
            //            $user->roles()->attach(3); // Assign role_id 3 to each regular user
            $this->command->getOutput()->progressAdvance();
        });

        $this->command->getOutput()->progressFinish();
        $this->command->info('Users seeded successfully!');
    }
}
