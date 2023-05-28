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
                'pesoInicial' => 79,
                'pesoObjetivo' => 70,
                'altura' => 170,
                'imc' => 27.34,
                'user_id' => 1
        ]);

        Diario::create([
                'pesoInicial' => 85,
                'pesoObjetivo' => 75,
                'altura' => 180,
                'imc' => 26.1,
                'user_id' => 1

        ]);
    }
}
