<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Receta;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){   
        
        $recetas = [
            [
                'nombreReceta' => 'Ensalada de quinoa con tomate y aguacate',
                'procedimiento' => 'Cocine 1 taza de quinoa siguiendo las instrucciones del paquete. Mezcle la quinoa cocida con 2 tomates picados, 1 aguacate picado y 1/4 taza de hojas de cilantro picado. Mezcle con 2 cucharadas de jugo de limón y 1 cucharada de aceite de oliva. Sirva frío.',
                'ingredientes' => 'Quinoa, tomates, aguacate, hojas de cilantro, jugo de limón, aceite de oliva.',
                'imagen' => 'assets/img/ensalada_quinoa_tomate_aguacate.jpg',
            ],
            [
                'nombreReceta' => 'Ensalada de pollo con arándanos y nueces',
                'procedimiento' => 'Cocine 1 pechuga de pollo a la parrilla y córtela en cubos. Mezcle la pechuga de pollo con 2 tazas de lechuga, 1/2 taza de arándanos secos, 1/4 taza de nueces picadas y 1/4 taza de queso feta desmenuzado. Mezcle con 2 cucharadas de vinagreta balsámica. Sirva frío.',
                'ingredientes' => 'Pechuga de pollo, lechuga, arándanos secos, nueces, queso feta, vinagreta balsámica.',
                'imagen' => 'assets/img/ensalada_pollo_arandanos_nueces.jpg',
            ],
            [
                'nombreReceta' => 'Salmón al horno con verduras asadas',
                'procedimiento' => 'Corte 2 tazas de verduras en trozos (pimientos, calabacín, cebolla, zanahorias). Mezcle las verduras con 2 cucharadas de aceite de oliva y sazone con sal y pimienta. Coloque una porción de salmón encima de las verduras y espolvoree con 1 cucharadita de ajo en polvo. Hornee a 180°C durante 20 minutos.',
                'ingredientes' => 'Salmón, verduras (pimientos, calabacín, cebolla, zanahorias), aceite de oliva, sal, pimienta, ajo en polvo.',
                'imagen' => 'assets/img/salmon_verduras_asadas.jpg',
            ],
            [
                'nombreReceta' => 'Pasta con salsa de tomate y albóndigas',
                'procedimiento' => 'Para la salsa de tomate: Sofría 1 cebolla picada y 3 dientes de ajo picados en 2 cucharadas de aceite de oliva hasta que estén dorados. Agregue 800 gramos de tomates pelados y picados, 1/2 taza de agua y sal y pimienta al gusto. Cocine a fuego medio durante 15-20 minutos. Para las albóndigas: En un tazón grande, mezcle 1/2 kg de carne molida, 1/2 taza de pan rallado, 1 huevo, 2 dientes de ajo picados, 1/4 taza de queso parmesano rallado, sal y pimienta al gusto. Forme las albóndigas y cocine en una sartén con aceite caliente hasta que estén doradas y cocidas por completo. Sirva con la salsa de tomate caliente sobre pasta cocida.',
                'ingredientes' => 'Carne molida, pan rallado, huevo, ajo, queso parmesano, tomates, cebolla, pasta, aceite de oliva, sal, pimienta.',
                'imagen' => 'assets/img/pasta_salsa_tomate_albondigas.jpg',
            ],
            [
                'nombreReceta' => 'Tostadas de huevo y aguacate',
                'procedimiento' => 'Tostar dos rebanadas de pan integral. En una olla con agua hirviendo y sal agregar un huevo y cocinar durante 3-4 minutos para que quede poché. Pelar y cortar medio aguacate en rodajas. Colocar las tostadas en un plato, poner las rodajas de aguacate encima y el huevo poché sobre el aguacate. Servir con salsa picante y ensalada de lechuga y tomate.',
                'ingredientes' => 'Pan integral, huevo, aguacate, salsa picante, lechuga, tomate.',
                'imagen' => 'assets/img/tostadas_huevo_aguacate.jpg',
            ],
            [
                'nombreReceta' => 'Ensalada de atún con aguacate y pepino',
                'procedimiento' => 'En un tazón grande, mezcle 2 latas de atún en agua escurridas, 1 aguacate picado, 1 pepino pelado y picado y 1/4 taza de cebolla roja picada. Mezcle con una vinagreta de limón y hierbas (2 cucharadas de jugo de limón, 1 cucharada de aceite de oliva, 1 cucharada de eneldo fresco picado y sal y pimienta al gusto). Sirva frío.',
                'ingredientes' => 'Atún en agua, aguacate, pepino, cebolla roja, jugo de limón, aceite de oliva, eneldo fresco, sal, pimienta.',
                'imagen' => 'assets/img/ensalada_atun_aguacate_pepino.jpg',
                ],

            ];
            foreach ($recetas as $receta) {
                Receta::create([
                    'nombreReceta' => $receta['nombreReceta'],
                    'procedimiento' => $receta['procedimiento'],
                    'ingredientes' => $receta['ingredientes'],
                    'imagen' => $receta['imagen']
                ]);
            }
    }
}
