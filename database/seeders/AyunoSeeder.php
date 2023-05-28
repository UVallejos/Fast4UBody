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
            'inicioAyuno' => "2023-05-24 9:00:51",
            'actualmenteAyunando' => false,
            'finAyuno' => "2023-05-24 21:00:51",
            'tipoAyuno' => "12:12",
            'user_id' => 1,
            'created_at' => "2023-05-24 9:00:51",
            'updated_at' => "2023-05-24 21:00:51"
        ]);
        Ayuno::create([
            'inicioAyuno' => "2023-05-25 9:00:00",
            'actualmenteAyunando' => false,
            'finAyuno' => "2023-05-26 3:00:00",
            'tipoAyuno' => "18:6",
            'user_id' => 1,
            'created_at' => "2023-05-25 9:00:00",
            'updated_at' => "2023-05-25 9:00:00"
        ]);
        
        Ayuno::create([
            'inicioAyuno' => "2023-05-25 9:00:00",
            'actualmenteAyunando' => false,
            'finAyuno' => "2023-05-26 9:00:00",
            'tipoAyuno' => "24:00",
            'user_id' => 1,
            'created_at' => "2023-05-25 9:00:00",
            'updated_at' => "2023-05-26 9:00:00"
        ]);
    }
}
