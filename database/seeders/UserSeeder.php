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
            'email' => 'prueba@prueba.com',
            'password' => bcrypt('123456789@Aa'),
            'altura' => 173,
            'peso' => 96,
            'pesoObjetivo' => 74
        ]);
    }
}
