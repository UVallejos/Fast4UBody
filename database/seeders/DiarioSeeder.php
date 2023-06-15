<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diario;
use Carbon\Carbon;

class DiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diario::create([
                'pesoInicial' => 96,
                'pesoObjetivo' => 74,
                'altura' => 173,
                'imc' => 32.08,
                'user_id' => 1
        ]);
        Diario::create([
            'pesoInicial' => 88,
            'pesoObjetivo' => 74,
            'altura' => 173,
            'imc' => 29.40,
            'user_id' => 1
        ]);
        Diario::create([
            'pesoInicial' => 73,
            'pesoObjetivo' => 74,
            'altura' => 173,
            'imc' => 24.39,
            'user_id' => 1
        ]);


    }
}
