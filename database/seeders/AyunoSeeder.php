<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ayuno;
use Carbon\Carbon;

class AyunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ayuno::create([
            'inicioAyuno' => Carbon::now(),
            'actualmenteAyunando' => true,
            'finAyuno' => Carbon::now()->addHours(12),
            'tipoAyuno' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Ayuno::create([
            'inicioAyuno' => Carbon::now(),
            'actualmenteAyunando' => true,
            'finAyuno' => Carbon::now()->addHours(12),
            'tipoAyuno' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        Ayuno::create([
            'inicioAyuno' => Carbon::now(),
            'actualmenteAyunando' => true,
            'finAyuno' => Carbon::now()->addHours(16),
            'tipoAyuno' => 2,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
