<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Abdul Qadeer',
            'email' => 'qadeer@example.com',
            'password' => Hash::make('qadeer'),
            'is_admin' => true,
        ]);
    }
}
