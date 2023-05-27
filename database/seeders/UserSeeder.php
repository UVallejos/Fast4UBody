<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ulises Vallejos',
            'email' => 'ulises@example.com',
            'password' => bcrypt('123456789'),
            'altura' => 180,
            'peso' => 79,
            'pesoObjetivo' => 70
        ]);

        User::create([
            'name' => 'Eliel Vallejos',
            'email' => 'Eliel@example.com',
            'password' => bcrypt('123456789'),
            'altura' => 180,
            'peso' => 85,
            'pesoObjetivo' => 75
        ]);
    }
}
