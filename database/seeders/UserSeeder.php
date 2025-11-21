<?php

namespace Database\Seeders;

use App\Models\Role;
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
        User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => Role::where('name', 'admin')->first()->id,
            ]
        );

        $totalUsers = 5;

        $this->command->getOutput()->progressStart($totalUsers);

        User::factory()
            ->count($totalUsers)
            ->create(['role_id' => Role::where('name', 'user')->first()->id])
            ->each(function () {
                $this->command->getOutput()->progressAdvance();
            });

        $this->command->getOutput()->progressFinish();
        $this->command->info('Users seeded successfully!');
    }
}
